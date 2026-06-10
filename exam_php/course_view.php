<?php
require_once 'data/courses.php';
require_once 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier si l'utilisateur est connecté, sinon redirection vers login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: auth/login.php");
    exit;
}

$is_logged_in = true;
$user_id = $_SESSION["id"];

$id = isset($_GET['id']) ? $_GET['id'] : 'intro_linux';
$lesson_id_param = isset($_GET['lesson']) ? $_GET['lesson'] : null;

if (!isset($courses[$id])) {
    header("Location: cours.php");
    exit;
}

$course = $courses[$id];

// 0. Aplatir les leçons pour la navigation (DOIT ÊTRE FAIT AVANT LA SAUVEGARDE)
$all_lessons = [];
foreach ($course['modules'] as $module) {
    foreach ($module['lessons'] as $lesson) {
        $all_lessons[] = [
            'module' => $module['title'],
            'title' => $lesson
        ];
    }
}

$current_lesson = $all_lessons[$lesson_id] ?? $all_lessons[0];

// 1. Initialisation/Mise à jour de la table (silencieux)
if ($is_logged_in) {
    $create_table = "CREATE TABLE IF NOT EXISTS user_progress (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user_id INT NOT NULL,
        course_id VARCHAR(50) NOT NULL,
        current_lesson_id INT DEFAULT 0, -- La leçon où l'élève se trouve
        max_completed_id INT DEFAULT -1, -- La plus haute leçon validée
        status ENUM('en_cours', 'termine') DEFAULT 'en_cours',
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE KEY user_course (user_id, course_id)
    )";
    mysqli_query($link, $create_table);

    // RÉCUPÉRATION INITIALE : Avant toute modification
    $sql_progress = "SELECT current_lesson_id, max_completed_id FROM user_progress WHERE user_id = ? AND course_id = ?";
    $last_saved_pos = 0;
    $max_completed = -1;
    if ($stmt = mysqli_prepare($link, $sql_progress)) {
        mysqli_stmt_bind_param($stmt, "is", $user_id, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $last_saved_pos, $max_completed);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    }

    // REDIRECTION AUTOMATIQUE : Si aucun numéro de leçon n'est précisé dans l'URL
    if ($lesson_id_param === null && $last_saved_pos > 0) {
        header("Location: course_view.php?id=$id&lesson=$last_saved_pos");
        exit;
    }

    $lesson_id = ($lesson_id_param !== null) ? (int)$lesson_id_param : 0;

    // SAUVEGARDE AUTOMATIQUE de la position actuelle (marque-page)
    $sql_auto = "INSERT INTO user_progress (user_id, course_id, current_lesson_id) 
                 VALUES (?, ?, ?) 
                 ON DUPLICATE KEY UPDATE current_lesson_id = ?";
    if ($stmt = mysqli_prepare($link, $sql_auto)) {
        mysqli_stmt_bind_param($stmt, "isii", $user_id, $id, $lesson_id, $lesson_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    // 2. Si on vient de cliquer sur "Terminer le cours" ou "Leçon suivante"
    if (isset($_POST['complete_lesson'])) {
        $next_lesson = $lesson_id + 1;
        $status = ($next_lesson >= count($all_lessons)) ? 'termine' : 'en_cours';
        
        $sql = "UPDATE user_progress SET max_completed_id = GREATEST(max_completed_id, ?), status = ? 
                WHERE user_id = ? AND course_id = ?";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "isis", $lesson_id, $status, $user_id, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        
        if ($next_lesson < count($all_lessons)) {
            header("Location: course_view.php?id=$id&lesson=$next_lesson");
        } else {
            header("Location: cours.php");
        }
        exit;
    }
} else {
    $lesson_id = isset($_GET['lesson']) ? (int)$_GET['lesson'] : 0;
    $current_lesson = $all_lessons[$lesson_id] ?? $all_lessons[0];
}

?>

<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $current_lesson['title']; ?> - <?php echo $course['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #ff79c6; border-radius: 10px; }
    </style>
</head>
<body class="bg-base-300 h-screen flex flex-col overflow-hidden">

    <!-- Top Navigation Bar -->
    <header class="bg-base-100 border-b border-white/5 p-4 flex justify-between items-center z-50">
        <div class="flex items-center gap-4">
            <a href="course_details.php?id=<?php echo $id; ?>" class="btn btn-ghost btn-sm">
                <i data-lucide="arrow-left"></i>
            </a>
            <div>
                <h1 class="font-black text-sm md:text-base uppercase tracking-widest text-pink-400"><?php echo $course['title']; ?></h1>
                <p class="text-xs opacity-50"><?php echo $current_lesson['module']; ?> • <?php echo $current_lesson['title']; ?></p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden md:flex flex-col items-end mr-4">
                <?php 
                // La progression visuelle combine les leçons validées ET la position actuelle
                $validated = ($is_logged_in && isset($max_completed)) ? $max_completed + 1 : 0;
                $current_pos = $lesson_id + 1;
                $display_count = max($validated, $current_pos);
                
                $percent = round(($display_count) / count($all_lessons) * 100); 
                ?>
                <span class="text-xs font-bold opacity-70">Progression : <?php echo $percent; ?>%</span>
                <progress class="progress progress-secondary w-32" value="<?php echo $display_count; ?>" max="<?php echo count($all_lessons); ?>"></progress>
            </div>
            <a href="profile.php" class="btn btn-circle btn-ghost avatar placeholder">
                <div class="bg-neutral text-neutral-content rounded-full w-8">
                    <span>R</span>
                </div>
            </a>
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <!-- Sidebar Navigation (Desktop) -->
        <aside class="hidden lg:flex w-80 bg-base-100 border-r border-white/5 flex-col custom-scrollbar overflow-y-auto">
            <div class="p-6">
                <h2 class="font-bold text-lg mb-6 flex items-center gap-2">
                    <i data-lucide="list" class="text-primary w-5 h-5"></i> Sommaire du cours
                </h2>
                
                <div class="space-y-6">
                    <?php 
                    $global_lesson_index = 0;
                    foreach ($course['modules'] as $module): 
                        // Vérifier si toutes les leçons du module sont terminées
                        $module_lesson_count = count($module['lessons']);
                        $module_end_index = $global_lesson_index + $module_lesson_count - 1;
                        $is_module_finished = ($is_logged_in && $max_completed >= $module_end_index);
                    ?>
                    <div>
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xs uppercase font-black opacity-40 tracking-widest"><?php echo $module['title']; ?></h3>
                            <?php if ($is_module_finished): ?>
                                <i data-lucide="check-circle" class="w-3 h-3 text-secondary"></i>
                            <?php endif; ?>
                        </div>
                        <ul class="space-y-1">
                            <?php foreach ($module['lessons'] as $lesson): ?>
                            <li>
                                <a href="?id=<?php echo $id; ?>&lesson=<?php echo $global_lesson_index; ?>" 
                                   class="flex items-center gap-3 p-3 rounded-xl transition-all text-sm
                                   <?php echo $global_lesson_index === $lesson_id ? 'bg-secondary/10 text-secondary border border-secondary/20 font-bold' : 'hover:bg-base-200 opacity-70'; ?>">
                                    <?php if ($is_logged_in && $global_lesson_index <= $max_completed): ?>
                                        <i data-lucide="check-circle-2" class="w-4 h-4 text-secondary"></i>
                                    <?php elseif ($global_lesson_index === $lesson_id): ?>
                                        <i data-lucide="play-circle" class="w-4 h-4 text-secondary"></i>
                                    <?php else: ?>
                                        <i data-lucide="circle" class="w-4 h-4 opacity-30"></i>
                                    <?php endif; ?>
                                    <span class="truncate"><?php echo $lesson; ?></span>
                                </a>
                            </li>
                            <?php 
                            $global_lesson_index++;
                            endforeach; 
                            ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col md:flex-row overflow-hidden">
            
            <!-- Lesson Content -->
            <div class="flex-1 overflow-y-auto custom-scrollbar bg-base-300">
                
                <!-- Video Section (Only for the first lesson as requested) -->
                <?php if ($lesson_id === 0 && isset($course['preview_video'])): ?>
                <div class="aspect-video bg-black w-full shadow-2xl relative group">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        src="<?php echo $course['preview_video']; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <?php endif; ?>

                <div class="p-6 md:p-10 max-w-4xl mx-auto">
                    <article class="prose prose-invert lg:prose-xl max-w-none">
                        <h1 class="text-3xl md:text-4xl font-black mb-6"><?php echo $current_lesson['title']; ?></h1>
                        
                        <!-- Dynamic Content based on lesson index -->
                        <div class="bg-base-100 p-8 rounded-2xl border border-white/5 shadow-xl space-y-6">
                            <?php switch($lesson_id): 
                                case 0: ?>
                                    <p class="text-lg leading-relaxed">
                                        Bienvenue dans ce premier module ! Linux n'est pas qu'un système d'exploitation, c'est une <strong>révolution technologique et philosophique</strong>. 
                                    </p>
                                    <div class="alert bg-secondary/5 border-secondary/20">
                                        <i data-lucide="info" class="text-secondary"></i>
                                        <span>Dans cette leçon, nous allons explorer les bases fondamentales.</span>
                                    </div>
                                    <h3 class="text-xl font-bold mt-8">Qu'est-ce que Linux ?</h3>
                                    <p>
                                        C'est un noyau (Kernel) créé en 1991 par <strong>Linus Torvalds</strong>. Contrairement à Windows ou macOS, Linux est open-source, ce qui signifie que n'importe qui peut voir, modifier et distribuer son code.
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <h4 class="font-bold text-pink-400 mb-2 flex items-center gap-2">
                                                <i data-lucide="settings" class="w-4 h-4"></i> Le Noyau (Kernel)
                                            </h4>
                                            <p class="text-sm opacity-70">C'est le chef d'orchestre qui fait le lien entre vos logiciels et le matériel (CPU, RAM, Disque).</p>
                                        </div>
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <h4 class="font-bold text-secondary mb-2 flex items-center gap-2">
                                                <i data-lucide="layout" class="w-4 h-4"></i> La Distribution (Distro)
                                            </h4>
                                            <p class="text-sm opacity-70">C'est l'ensemble composé du noyau, d'outils système et d'une interface graphique (ex: Ubuntu, Debian).</p>
                                        </div>
                                    </div>
                                <?php break; 
                                case 1: ?>
                                    <h3 class="text-2xl font-bold text-pink-400">Linus Torvalds : Le génie derrière le manchot</h3>
                                    <p>Tout a commencé en 1991 à l'Université d'Helsinki en Finlande. Un jeune étudiant nommé <strong>Linus Torvalds</strong> a envoyé un message désormais célèbre sur un groupe de discussion :</p>
                                    <div class="bg-zinc-900 p-6 rounded-xl italic font-mono text-sm border-l-4 border-pink-500">
                                        "I'm doing a (free) operating system (just a hobby, won't be big and professional like gnu) for 386(486) AT clones..."
                                    </div>
                                    <p>Linus voulait simplement un système similaire à UNIX (qu'il utilisait à l'université) pour son propre ordinateur. Il ne se doutait pas que son "hobby" allait un jour propulser la quasi-totalité de l'Internet, des supercalculateurs et des smartphones (Android).</p>
                                    <div class="flex items-center gap-4 bg-base-200 p-4 rounded-xl">
                                        <i data-lucide="award" class="text-yellow-500 w-10 h-10"></i>
                                        <p class="text-sm">Fun Fact : Linus a aussi créé <strong>Git</strong>, l'outil que presque tous les développeurs utilisent aujourd'hui !</p>
                                    </div>
                                <?php break;
                                case 2: ?>
                                    <h3 class="text-2xl font-bold text-pink-400">Libre vs Open Source : Quelle différence ?</h3>
                                    <p>On utilise souvent ces termes comme des synonymes, mais ils cachent deux visions du monde :</p>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div class="collapse collapse-plus bg-base-200">
                                            <input type="checkbox" checked /> 
                                            <div class="collapse-title text-lg font-bold">Logiciel Libre (Free Software)</div>
                                            <div class="collapse-content">
                                                <p>Initié par <strong>Richard Stallman</strong>, c'est une vision éthique. Un logiciel est libre s'il garantit 4 libertés : utiliser, étudier, modifier et redistribuer. On parle de liberté ("free as in speech"), pas de prix.</p>
                                            </div>
                                        </div>
                                        <div class="collapse collapse-plus bg-base-200">
                                            <input type="checkbox" checked /> 
                                            <div class="collapse-title text-lg font-bold">Open Source</div>
                                            <div class="collapse-content">
                                                <p>C'est une vision plus pragmatique et technique. L'idée est que rendre le code public permet de créer de meilleurs logiciels grâce à la collaboration mondiale. C'est le modèle préféré des entreprises.</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php break;
                                case 3: ?>
                                    <h3 class="text-2xl font-bold text-pink-400">La puissance de la personnalisation</h3>
                                    <p>L'un des plus grands avantages de Linux est sa <strong>flexibilité totale</strong>. Contrairement à d'autres systèmes, vous n'êtes pas coincé avec une seule interface. Vous pouvez modifier et customiser chaque pixel de votre bureau selon vos goûts.</p>
                                    
                                    <div class="alert bg-secondary/5 border-secondary/20 my-6">
                                        <i data-lucide="palette" class="text-secondary"></i>
                                        <span>"Sous Linux, votre ordinateur s'adapte à vous, et non l'inverse."</span>
                                    </div>

                                    <h4 class="text-xl font-bold mb-4">Les environnements de bureau populaires :</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <span class="font-bold text-secondary">GNOME</span>
                                            <p class="text-sm opacity-70">Moderne, épuré et très intuitif. C'est le bureau par défaut d'Ubuntu et Fedora.</p>
                                        </div>
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <span class="font-bold text-secondary">KDE Plasma</span>
                                            <p class="text-sm opacity-70">Le roi de la personnalisation. Vous pouvez tout changer, des effets de fenêtres aux widgets.</p>
                                        </div>
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <span class="font-bold text-secondary">XFCE</span>
                                            <p class="text-sm opacity-70">Léger et rapide. Idéal pour donner une seconde vie à un vieil ordinateur.</p>
                                        </div>
                                        <div class="p-4 bg-base-200 rounded-xl border border-white/5">
                                            <span class="font-bold text-secondary">Cinnamon</span>
                                            <p class="text-sm opacity-70">Une interface traditionnelle et élégante, parfaite pour ceux qui viennent de Windows.</p>
                                        </div>
                                    </div>
                                <?php break;
                                case 4: ?>
                                    <h3 class="text-2xl font-bold text-pink-400">Un système ordonné : L'Arborescence</h3>
                                    <p class="text-lg">L'une des plus grandes forces de Linux est sa <strong>structure rigoureuse</strong>. Contrairement au désordre que l'on peut parfois trouver ailleurs, chaque fichier a une place précise définie par une norme (la FHS). Comprendre cette hiérarchie, c'est posséder la carte aux trésors du système.</p>
                                    
                                    <div class="bg-zinc-900 p-6 rounded-2xl border border-white/10 shadow-2xl my-8 font-mono text-sm leading-relaxed">
                                        <div class="flex items-center gap-2 mb-4 pb-2 border-b border-white/5 text-pink-400">
                                            <i data-lucide="folder-tree" class="w-4 h-4"></i>
                                            <span>Explorateur de la Racine (/)</span>
                                        </div>
                                        <ul class="space-y-3">
                                            <li><span class="text-pink-500 font-bold">/</span> : <span class="opacity-70">La Racine. Tout, absolument tout, part d'ici.</span></li>
                                            <li><span class="text-blue-400 font-bold">├── /bin</span> : <span class="opacity-70">Les binaires essentiels (commandes comme ls, cp, cd).</span></li>
                                            <li><span class="text-blue-400 font-bold">├── /boot</span> : <span class="opacity-70">Les fichiers nécessaires au démarrage (le cœur du système).</span></li>
                                            <li><span class="text-blue-400 font-bold">├── /dev</span> : <span class="opacity-70">Les fichiers de périphériques (disques, clavier, souris).</span></li>
                                            <li><span class="text-yellow-400 font-bold">├── /etc</span> : <span class="opacity-70">Le centre de contrôle. Tous les fichiers de configuration sont ici.</span></li>
                                            <li><span class="text-green-400 font-bold">├── /home</span> : <span class="opacity-70">Votre espace personnel (documents, photos, bureau).</span></li>
                                            <li><span class="text-blue-400 font-bold">├── /lib</span> : <span class="opacity-70">Les bibliothèques partagées (les "moteurs" des programmes).</span></li>
                                            <li><span class="text-purple-400 font-bold">├── /media</span> : <span class="opacity-70">Point de montage pour vos clés USB et disques externes.</span></li>
                                            <li><span class="text-orange-400 font-bold">├── /opt</span> : <span class="opacity-70">Les logiciels tiers imposants (ex: Google Chrome, Discord).</span></li>
                                            <li><span class="text-red-400 font-bold">├── /root</span> : <span class="opacity-70">La maison personnelle du super-utilisateur (l'administrateur).</span></li>
                                            <li><span class="text-blue-400 font-bold">├── /sbin</span> : <span class="opacity-70">Les commandes système réservées à l'administrateur.</span></li>
                                            <li><span class="text-teal-400 font-bold">├── /tmp</span> : <span class="opacity-70">Les fichiers temporaires (effacés à chaque redémarrage).</span></li>
                                            <li><span class="text-indigo-400 font-bold">├── /usr</span> : <span class="opacity-70">La majorité de vos applications et fichiers utilisateurs.</span></li>
                                            <li><span class="text-yellow-500 font-bold">└── /var</span> : <span class="opacity-70">Les données variables (journaux système, bases de données).</span></li>
                                        </ul>
                                    </div>

                                    <div class="alert bg-secondary/10 border-secondary/20 italic">
                                        <i data-lucide="lightbulb" class="text-secondary"></i>
                                        <span>Astuce : Sous Linux, "Tout est fichier". Même votre souris ou votre processeur sont représentés par un fichier dans cette arborescence !</span>
                                    </div>

                                    <p class="mt-6">Pourquoi est-ce génial ? Parce qu'une fois que vous connaissez ces dossiers, vous pouvez dépanner n'importe quel serveur ou ordinateur Linux dans le monde, car l'organisation reste la même !</p>
                                <?php break;
                                case 5: ?>
                                    <h3 class="text-2xl font-bold text-pink-400">Maîtrise et État d'esprit</h3>
                                    <p class="text-lg">Félicitations ! Vous avez parcouru un long chemin. Pour conclure cette introduction, découvrons comment Linux vous donne le contrôle total, tant techniquement qu'intellectuellement.</p>
                                    
                                    <!-- Partie Technique : Le Contrôle -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                                        <div class="bg-base-200 p-6 rounded-2xl border border-white/5">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="p-2 bg-pink-500/10 rounded-lg"><i data-lucide="shield-check" class="text-pink-400"></i></div>
                                                <h4 class="font-bold">Le Pouvoir du "Sudo"</h4>
                                            </div>
                                            <p class="text-sm opacity-70 leading-relaxed">Sous Linux, vous êtes protégé par défaut. Pour les actions critiques, on utilise <code>sudo</code>. C'est votre ceinture de sécurité qui empêche les erreurs fatales et les virus.</p>
                                        </div>
                                        <div class="bg-base-200 p-6 rounded-2xl border border-white/5">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="p-2 bg-pink-500/10 rounded-lg"><i data-lucide="shopping-cart" class="text-pink-400"></i></div>
                                                <h4 class="font-bold">Dépôts Certifiés</h4>
                                            </div>
                                            <p class="text-sm opacity-70 leading-relaxed">Oubliez le téléchargement de fichiers .exe louche. Linux utilise des "Repositories", des sources sûres et vérifiées par la communauté pour installer vos logiciels.</p>
                                        </div>
                                    </div>

                                    <div class="divider opacity-10"></div>

                                    <!-- Partie Wow : L'État d'Esprit -->
                                    <h4 class="text-xl font-bold mb-4 flex items-center gap-2">
                                        <i data-lucide="sparkles" class="text-yellow-400"></i> L'Aventure ne fait que commencer
                                    </h4>
                                    <p class="mb-6">Apprendre Linux, ce n'est pas juste apprendre un système, c'est adopter une nouvelle façon de voir l'informatique :</p>

                                    <div class="space-y-4">
                                        <div class="collapse collapse-arrow bg-base-100 border border-pink-500/10">
                                            <input type="radio" name="mindset" checked /> 
                                            <div class="collapse-title font-bold text-pink-400">Vous n'êtes jamais seul</div>
                                            <div class="collapse-content">
                                                <p class="text-sm">Grâce aux <code>man pages</code> (manuels intégrés) et aux immenses Wikis communautaires, la réponse à vos questions est toujours à une ligne de commande de distance.</p>
                                            </div>
                                        </div>
                                        <div class="collapse collapse-arrow bg-base-100 border border-pink-500/10">
                                            <input type="radio" name="mindset" /> 
                                            <div class="collapse-title font-bold text-pink-400">Reprenez le contrôle</div>
                                            <div class="collapse-content">
                                                <p class="text-sm">Pas de télémétrie cachée, pas de mises à jour forcées. Linux respecte votre vie privée et vos choix. C'est vous le capitaine du navire.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Final CTA -->
                                    <div class="mt-12 p-8 bg-gradient-to-br from-pink-600/20 to-purple-600/20 border border-pink-500/30 rounded-3xl text-center shadow-2xl relative overflow-hidden group">
                                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-pink-500/10 rounded-full blur-3xl group-hover:bg-pink-500/20 transition-all"></div>
                                        
                                        <div class="flex justify-center mb-4">
                                            <div class="stack">
                                                <div class="grid w-20 h-20 bg-pink-500 text-white place-content-center rounded-2xl shadow-lg rotate-3"><i data-lucide="award" class="w-10 h-10"></i></div>
                                                <div class="grid w-20 h-20 bg-purple-500 text-white place-content-center rounded-2xl shadow-lg -rotate-3"></div>
                                            </div>
                                        </div>

                                        <h4 class="text-3xl font-black mb-2 tracking-tighter">CERTIFICAT D'INTRODUCTION</h4>
                                        <p class="opacity-80 max-w-md mx-auto mb-8">Bravo ! Vous avez posé les premières pierres de votre expertise Linux. Le terminal vous attend pour la suite.</p>
                                        
                                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                                            <a href="course_view.php?id=commandes_base" class="btn btn-secondary btn-lg gap-2 shadow-xl shadow-pink-500/20">
                                                Passer à la pratique <i data-lucide="terminal"></i>
                                            </a>
                                            <a href="cours.php" class="btn btn-ghost btn-lg">Retour aux cours</a>
                                        </div>
                                    </div>
                                <?php break;
                                default: ?>
                                    <div class="py-20 text-center opacity-50 italic">
                                        <i data-lucide="construction" class="w-12 h-12 mx-auto mb-4"></i>
                                        <p>Contenu en cours de création...</p>
                                    </div>
                            <?php endswitch; ?>
                        </div>

                        <!-- Next Actions -->
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-12 pt-8 border-t border-white/5">
                            <?php if ($lesson_id > 0): ?>
                            <a href="?id=<?php echo $id; ?>&lesson=<?php echo $lesson_id - 1; ?>" class="btn btn-outline gap-2">
                                <i data-lucide="chevron-left"></i> Leçon précédente
                            </a>
                            <?php else: ?>
                            <div></div>
                            <?php endif; ?>

                            <form method="POST" class="flex gap-2">
                                <?php if ($lesson_id < count($all_lessons) - 1): ?>
                                <button type="submit" name="complete_lesson" class="btn btn-primary gap-2">
                                    Leçon suivante <i data-lucide="chevron-right"></i>
                                </button>
                                <?php else: ?>
                                <button type="submit" name="complete_lesson" class="btn btn-success gap-2">
                                    <i data-lucide="award"></i> Terminer le cours
                                </button>
                                <?php endif; ?>
                            </form>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Interactive Practice Area (Terminal Mockup) -->
            <div class="hidden xl:flex w-[450px] bg-zinc-900 border-l border-white/5 flex-col">
                <div class="p-4 bg-zinc-950 border-b border-white/5 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <i data-lucide="terminal" class="w-4 h-4 text-green-500"></i>
                        <span class="text-xs font-bold uppercase tracking-widest opacity-70">Terminal Interactif</span>
                    </div>
                    <div class="flex gap-1">
                        <span class="w-2 h-2 rounded-full bg-red-500/50"></span>
                        <span class="w-2 h-2 rounded-full bg-yellow-500/50"></span>
                        <span class="w-2 h-2 rounded-full bg-green-500/50"></span>
                    </div>
                </div>
                <div class="flex-1 p-4 font-mono text-sm space-y-4 overflow-y-auto custom-scrollbar">
                    <div class="text-zinc-500 italic"># Bienvenue Richard ! Teste tes connaissances ici.</div>
                    <div class="flex gap-2">
                        <span class="text-green-500">user@richlabs:~$</span>
                        <span class="animate-pulse">_</span>
                    </div>
                    
                    <!-- Quick Tasks -->
                    <div class="mt-10 p-4 bg-secondary/5 border border-secondary/20 rounded-xl">
                        <h4 class="text-xs font-bold text-secondary mb-3 uppercase">Mission du cours</h4>
                        <p class="text-xs leading-relaxed opacity-80 mb-4">Essaye d'imaginer le résultat de la commande <code>uname -a</code> pour voir les infos du système.</p>
                        <button class="btn btn-xs btn-secondary btn-outline w-full">Vérifier la commande</button>
                    </div>

                    <div class="flex flex-col gap-2 mt-auto text-[10px] opacity-30 text-center">
                        <i data-lucide="info" class="w-4 h-4 mx-auto"></i>
                        <p>Ce terminal est un environnement de bac à sable sécurisé.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Navigation Drawer Trigger (Hidden on Desktop) -->
    <div class="lg:hidden fixed bottom-20 right-6 z-[100]">
        <button class="btn btn-circle btn-secondary shadow-2xl">
            <i data-lucide="menu"></i>
        </button>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
