<?php
require_once 'data/courses.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if (!isset($courses[$id])) {
    header("Location: cours.php");
    exit;
}

$course = $courses[$id];
?>

<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course['title']; ?> - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide"></script>
</head>
<body class="bg-base-300 min-h-screen">

    <?php include 'header.php'; ?>

    <main class="max-w-6xl mx-auto px-4 py-8 md:py-16">
        
        <!-- Course Header -->
        <div class="flex flex-col lg:flex-row gap-8 items-start mb-12">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-4">
                    <div class="p-3 bg-base-200 rounded-2xl shadow-inner">
                        <i data-lucide="<?php echo $course['icon']; ?>" class="w-10 h-10 <?php echo $course['color']; ?>"></i>
                    </div>
                    <div class="badge <?php echo $course['level_color']; ?> badge-lg"><?php echo $course['level']; ?></div>
                </div>
                <h1 class="text-4xl md:text-5xl font-black mb-6"><?php echo $course['title']; ?></h1>
                <p class="text-xl opacity-80 leading-relaxed mb-8 max-w-2xl">
                    <?php echo $course['description']; ?>
                </p>
                
                <div class="flex flex-wrap gap-4 mb-8">
                    <div class="flex items-center gap-2 bg-base-200 px-4 py-2 rounded-xl">
                        <i data-lucide="clock" class="w-5 h-5 text-primary"></i>
                        <span class="font-bold"><?php echo $course['duration']; ?></span>
                    </div>
                    <div class="flex items-center gap-2 bg-base-200 px-4 py-2 rounded-xl">
                        <i data-lucide="book-open" class="w-5 h-5 text-secondary"></i>
                        <span class="font-bold"><?php echo $course['lessons_count']; ?> leçons</span>
                    </div>
                    <div class="flex items-center gap-2 bg-base-200 px-4 py-2 rounded-xl">
                        <i data-lucide="users" class="w-5 h-5 text-success"></i>
                        <span class="font-bold"><?php echo $course['students']; ?> étudiants</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="course_view.php?id=<?php echo $id; ?>" class="btn btn-primary btn-lg px-12 gap-3 shadow-lg shadow-primary/20">
                        <i data-lucide="play-circle"></i> Commencer le cours
                    </a>
                    <button class="btn btn-outline btn-lg gap-3">
                        <i data-lucide="heart"></i> Ajouter aux favoris
                    </a>
                </div>
            </div>

            <!-- Video Preview Card -->
            <?php if(isset($course['preview_video'])): ?>
            <div class="w-full lg:w-96">
                <div class="card bg-base-100 shadow-2xl border border-white/5 overflow-hidden">
                    <figure class="aspect-video bg-black">
                         <iframe width="100%" height="100%" src="<?php echo $course['preview_video']; ?>" frameborder="0" allowfullscreen></iframe>
                    </figure>
                    <div class="card-body p-6">
                        <h3 class="font-bold text-lg mb-2">Aperçu du cours</h3>
                        <p class="text-sm opacity-70">Regardez l'introduction gratuite pour voir ce que vous allez apprendre.</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Curriculum (Accordions) -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                    <i data-lucide="list-checks" class="text-primary"></i> Programme du cours
                </h2>
                
                <div class="space-y-4">
                    <?php foreach($course['modules'] as $index => $module): ?>
                    <div class="collapse collapse-arrow bg-base-100 border border-white/5 shadow-md">
                        <input type="radio" name="curriculum" <?php echo $index === 0 ? 'checked' : ''; ?> /> 
                        <div class="collapse-title text-xl font-bold p-6 flex items-center gap-4">
                            <span class="w-8 h-8 rounded-full bg-base-300 flex items-center justify-center text-sm"><?php echo $index + 1; ?></span>
                            <?php echo $module['title']; ?>
                        </div>
                        <div class="collapse-content px-6 pb-6">
                            <div class="divider my-0 mb-4 opacity-5"></div>
                            <ul class="space-y-4">
                                <?php foreach($module['lessons'] as $lesson): ?>
                                <li class="flex items-center justify-between group cursor-pointer hover:bg-base-200 p-3 rounded-xl transition-all">
                                    <div class="flex items-center gap-3">
                                        <i data-lucide="play-circle" class="w-5 h-5 text-primary opacity-50 group-hover:opacity-100"></i>
                                        <span class="font-medium"><?php echo $lesson; ?></span>
                                    </div>
                                    <div class="badge badge-ghost badge-sm opacity-50">Vidéo</div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Sidebar: Objectives & Extras -->
            <div class="lg:col-span-1 flex flex-col gap-8">
                
                <!-- Objectives Card -->
                <div class="card bg-base-100 shadow-xl border border-white/5">
                    <div class="card-body">
                        <h3 class="card-title text-secondary mb-4">Ce que vous allez apprendre</h3>
                        <ul class="space-y-4">
                            <?php foreach($course['learning_objectives'] as $objective): ?>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-success shrink-0 mt-1"></i>
                                <span class="text-sm leading-relaxed"><?php echo $objective; ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Certification Card -->
                <div class="card bg-gradient-to-br from-primary/10 to-secondary/10 shadow-xl border border-white/10 p-1">
                    <div class="card bg-base-100 p-6">
                        <div class="flex flex-col items-center text-center gap-4">
                            <i data-lucide="award" class="w-16 h-16 text-warning animate-pulse"></i>
                            <h3 class="text-xl font-bold">Certification RichLabs</h3>
                            <p class="text-sm opacity-70">Obtenez un certificat vérifiable à la fin de ce parcours pour booster votre CV.</p>
                        </div>
                    </div>
                </div>

                <!-- Instructor Card -->
                <div class="card bg-base-100 shadow-xl border border-white/5">
                    <div class="card-body">
                        <h3 class="card-title text-xs uppercase tracking-widest opacity-50 mb-2">Instructeur</h3>
                        <div class="flex items-center gap-4">
                            <div class="avatar">
                                <div class="w-12 h-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="face.jpeg" alt="Richard" />
                                </div>
                            </div>
                            <div>
                                <p class="font-bold">Richard</p>
                                <p class="text-xs opacity-50">Expert SysAdmin & OSINT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Bottom Bar for Mobile -->
        <div class="fixed bottom-4 left-4 right-4 lg:hidden z-50">
            <button class="btn btn-primary w-full shadow-2xl gap-3 btn-lg">
                <i data-lucide="play"></i> Commencer (Gratuit)
            </button>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
