<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs - Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center gap-5 px-4">
        <div class="flex items-center gap-3">
            <i data-lucide="graduation-cap" class="text-pink-500 w-15 h-15"></i>
            <span class="text-5xl font-bold text-center">Apprenez Linux</span>
        </div>
        <span class="text-2xl text-center">Votre parcours d'apprentissage personnalisé</span>

        <!-- Stats personnelles -->
        <div class="stats stats-vertical lg:stats-horizontal shadow-xl mt-5">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <i data-lucide="book-open" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Cours complétés</div>
                <div class="stat-value text-primary">3/25</div>
                <div class="stat-desc">12% de progression</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <i data-lucide="trophy" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Badges obtenus</div>
                <div class="stat-value text-secondary">5</div>
                <div class="stat-desc">Niveau: Apprenti</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-warning">
                    <i data-lucide="flame" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Streak</div>
                <div class="stat-value text-warning">7 jours</div>
                <div class="stat-desc">Continue comme ça!</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-success">
                    <i data-lucide="clock" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Temps total</div>
                <div class="stat-value text-success">12h</div>
                <div class="stat-desc">Cette semaine: 3h</div>
            </div>
        </div>

        <!-- Barre de recherche et filtres -->
        <div class="flex flex-col gap-3 w-full max-w-4xl mt-10">
            <div class="join flex justify-center">
                <div class="input validator join-item w-2/3">
                    <i data-lucide="search" class="text-pink-300 w-10 h-10"></i>
                    <input type="search" class="grow rounded-md" placeholder="Rechercher un cours...">
                </div>
                <button class="btn btn-primary rounded-md">Rechercher</button>
            </div>

            <div class="flex flex-wrap justify-center gap-3">
                <button class="btn btn-primary">Tous</button>
                <button class="btn btn-outline">
                    <i data-lucide="star"></i>
                    Débutant
                </button>
                <button class="btn btn-outline">
                    <i data-lucide="zap"></i>
                    Intermédiaire
                </button>
                <button class="btn btn-outline">
                    <i data-lucide="flame"></i>
                    Avancé
                </button>
                <button class="btn btn-outline">
                    <i data-lucide="heart"></i>
                    Favoris
                </button>
            </div>
        </div>
    </section>

    <!-- Continuer où vous en étiez -->
    <section class="lg:px-65 px-4 py-10 bg-base-200">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="play-circle" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Continuer où vous en étiez</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="flex justify-between items-start">
                    <i data-lucide="terminal" class="text-green-400 w-12 h-12"></i>
                    <div class="badge badge-success">Débutant</div>
                </div>
                <span class="text-2xl font-bold">Commandes essentielles</span>
                <span class="text-sm">Maîtrisez les commandes de base pour naviguer et manipuler les fichiers.</span>
                
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between text-sm">
                        <span>Progression</span>
                        <span class="font-bold">65%</span>
                    </div>
                    <progress class="progress progress-success" value="65" max="100"></progress>
                </div>

                <div class="flex items-center gap-2 text-sm">
                    <i data-lucide="clock" class="w-4 h-4"></i>
                    <span>1h30 restante</span>
                </div>

                <button class="btn btn-primary mt-2">
                    <i data-lucide="play"></i>
                    Continuer
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="flex justify-between items-start">
                    <i data-lucide="users" class="text-blue-400 w-12 h-12"></i>
                    <div class="badge badge-success">Débutant</div>
                </div>
                <span class="text-2xl font-bold">Gestion des utilisateurs</span>
                <span class="text-sm">Apprenez à créer et gérer les utilisateurs et leurs permissions.</span>
                
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between text-sm">
                        <span>Progression</span>
                        <span class="font-bold">40%</span>
                    </div>
                    <progress class="progress progress-primary" value="40" max="100"></progress>
                </div>

                <div class="flex items-center gap-2 text-sm">
                    <i data-lucide="clock" class="w-4 h-4"></i>
                    <span>2h restante</span>
                </div>

                <button class="btn btn-primary mt-2">
                    <i data-lucide="play"></i>
                    Continuer
                </button>
            </div>
        </div>
    </section>

    <!-- Roadmap d'apprentissage -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="map" class="text-pink-500 w-12 h-12"></i>
            <span class="font-bold text-3xl">Votre parcours d'apprentissage</span>
        </div>
        <span class="text-lg ml-2">Suivez ce parcours structuré pour devenir un expert Linux</span>

        <div class="mt-10">
            <ul class="timeline timeline-vertical">
                <li>
                    <div class="timeline-start timeline-box bg-success text-success-content">
                        <div class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 1: Fondations</span>
                        </div>
                        <div class="text-sm mt-2">Introduction à Linux • Installation • Premiers pas</div>
                        <div class="badge badge-sm mt-2">Complété</div>
                    </div>
                    <div class="timeline-middle">
                        <div class="rounded-full bg-success w-7 h-7 flex items-center justify-center">
                            <i data-lucide="check" class="w-4 h-4 text-success-content"></i>
                        </div>
                    </div>
                    <hr class="bg-success" />
                </li>

                <li>
                    <hr class="bg-success" />
                    <div class="timeline-middle">
                        <div class="rounded-full bg-primary w-7 h-7 flex items-center justify-center text-primary-content">
                            2
                        </div>
                    </div>
                    <div class="timeline-end timeline-box bg-primary text-primary-content">
                        <div class="flex items-center gap-2">
                            <i data-lucide="loader" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 2: Commandes de base</span>
                        </div>
                        <div class="text-sm mt-2">Navigation • Manipulation fichiers • Permissions</div>
                        <div class="badge badge-sm mt-2">En cours - 65%</div>
                    </div>
                    <hr class="bg-base-300" />
                </li>

                <li>
                    <hr class="bg-base-300" />
                    <div class="timeline-start timeline-box">
                        <div class="flex items-center gap-2">
                            <i data-lucide="lock" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 3: Administration</span>
                        </div>
                        <div class="text-sm mt-2">Utilisateurs • Processus • Services • Logs</div>
                        <div class="badge badge-outline badge-sm mt-2">Verrouillé</div>
                    </div>
                    <div class="timeline-middle">
                        <div class="rounded-full bg-base-300 w-7 h-7 flex items-center justify-center">
                            3
                        </div>
                    </div>
                    <hr class="bg-base-300" />
                </li>

                <li>
                    <hr class="bg-base-300" />
                    <div class="timeline-middle">
                        <div class="rounded-full bg-base-300 w-7 h-7 flex items-center justify-center">
                            4
                        </div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="flex items-center gap-2">
                            <i data-lucide="lock" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 4: Réseau</span>
                        </div>
                        <div class="text-sm mt-2">Configuration • Firewall • SSH • VPN</div>
                        <div class="badge badge-outline badge-sm mt-2">Verrouillé</div>
                    </div>
                    <hr class="bg-base-300" />
                </li>

                <li>
                    <hr class="bg-base-300" />
                    <div class="timeline-start timeline-box">
                        <div class="flex items-center gap-2">
                            <i data-lucide="lock" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 5: Scripting</span>
                        </div>
                        <div class="text-sm mt-2">Bash • Automatisation • Cron</div>
                        <div class="badge badge-outline badge-sm mt-2">Verrouillé</div>
                    </div>
                    <div class="timeline-middle">
                        <div class="rounded-full bg-base-300 w-7 h-7 flex items-center justify-center">
                            5
                        </div>
                    </div>
                    <hr class="bg-base-300" />
                </li>

                <li>
                    <hr class="bg-base-300" />
                    <div class="timeline-middle">
                        <div class="rounded-full bg-base-300 w-7 h-7 flex items-center justify-center">
                            6
                        </div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="flex items-center gap-2">
                            <i data-lucide="lock" class="w-6 h-6"></i>
                            <span class="font-bold">Niveau 6: Sécurité</span>
                        </div>
                        <div class="text-sm mt-2">Hardening • SELinux • Audit • Chiffrement</div>
                        <div class="badge badge-outline badge-sm mt-2">Verrouillé</div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Parcours recommandés -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="route" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Parcours recommandés</span>
        </div>
        <span class="text-lg ml-2">Choisissez un parcours adapté à vos objectifs</span>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-10">
            <div class="card bg-base-100 p-6 gap-3 hover:shadow-xl transition-all">
                <div class="flex justify-center">
                    <i data-lucide="star" class="text-green-500 w-20 h-20"></i>
                </div>
                <span class="text-2xl font-bold text-center">Débutant</span>
                <span class="text-sm text-center">Pour ceux qui découvrent Linux</span>
                
                <div class="divider my-1"></div>
                
                <div class="flex flex-col gap-2 text-sm">
                    <div class="flex items-center gap-2">
                        <i data-lucide="check" class="w-4 h-4 text-success"></i>
                        <span>6 cours</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span>15 heures</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="trophy" class="w-4 h-4 text-warning"></i>
                        <span>3 badges</span>
                    </div>
                </div>

                <button class="btn btn-primary mt-3">
                    <i data-lucide="arrow-right"></i>
                    Commencer
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:shadow-xl transition-all">
                <div class="flex justify-center">
                    <i data-lucide="server" class="text-blue-500 w-20 h-20"></i>
                </div>
                <span class="text-2xl font-bold text-center">Admin Système</span>
                <span class="text-sm text-center">Gérez des serveurs Linux</span>
                
                <div class="divider my-1"></div>
                
                <div class="flex flex-col gap-2 text-sm">
                    <div class="flex items-center gap-2">
                        <i data-lucide="check" class="w-4 h-4 text-success"></i>
                        <span>8 cours</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span>25 heures</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="trophy" class="w-4 h-4 text-warning"></i>
                        <span>5 badges</span>
                    </div>
                </div>

                <button class="btn btn-outline mt-3">
                    <i data-lucide="lock"></i>
                    Verrouillé
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:shadow-xl transition-all">
                <div class="flex justify-center">
                    <i data-lucide="cloud-cog" class="text-purple-500 w-20 h-20"></i>
                </div>
                <span class="text-2xl font-bold text-center">DevOps</span>
                <span class="text-sm text-center">Automatisation et CI/CD</span>
                
                <div class="divider my-1"></div>
                
                <div class="flex flex-col gap-2 text-sm">
                    <div class="flex items-center gap-2">
                        <i data-lucide="check" class="w-4 h-4 text-success"></i>
                        <span>10 cours</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span>35 heures</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="trophy" class="w-4 h-4 text-warning"></i>
                        <span>7 badges</span>
                    </div>
                </div>

                <button class="btn btn-outline mt-3">
                    <i data-lucide="lock"></i>
                    Verrouillé
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:shadow-xl transition-all">
                <div class="flex justify-center">
                    <i data-lucide="shield" class="text-red-500 w-20 h-20"></i>
                </div>
                <span class="text-2xl font-bold text-center">Sécurité</span>
                <span class="text-sm text-center">Sécurisez vos systèmes</span>
                
                <div class="divider my-1"></div>
                
                <div class="flex flex-col gap-2 text-sm">
                    <div class="flex items-center gap-2">
                        <i data-lucide="check" class="w-4 h-4 text-success"></i>
                        <span>7 cours</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span>20 heures</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="trophy" class="w-4 h-4 text-warning"></i>
                        <span>4 badges</span>
                    </div>
                </div>

                <button class="btn btn-outline mt-3">
                    <i data-lucide="lock"></i>
                    Verrouillé
                </button>
            </div>
        </div>
    </section>


    <!-- Tous les cours disponibles -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="library" class="text-pink-500 w-12 h-12"></i>
            <span class="font-bold text-3xl">Tous les cours</span>
        </div>

        <!-- Niveau Débutant -->
        <div class="mt-10">
            <div class="flex items-center gap-2 mb-5">
                <i data-lucide="star" class="text-green-500 w-10 h-10"></i>
                <span class="font-bold text-2xl">Niveau Débutant</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="book-open" class="text-blue-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Introduction à Linux</span>
                    <span class="text-sm">Découvrez l'histoire, la philosophie et les concepts fondamentaux de Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">12 leçons</div>
                        <div class="badge badge-outline">2h30</div>
                        <div class="badge badge-outline">Quiz</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>1,234 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="download" class="text-purple-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Installation de Linux</span>
                    <span class="text-sm">Apprenez à installer Linux en dual-boot ou en machine virtuelle.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">8 leçons</div>
                        <div class="badge badge-outline">1h45</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>987 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="folder-tree" class="text-yellow-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Système de fichiers</span>
                    <span class="text-sm">Comprenez la structure des répertoires et la hiérarchie Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">10 leçons</div>
                        <div class="badge badge-outline">2h</div>
                        <div class="badge badge-outline">Quiz</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>856 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="terminal" class="text-green-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Commandes essentielles</span>
                    <span class="text-sm">Maîtrisez les commandes de base pour naviguer et manipuler les fichiers.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">15 leçons</div>
                        <div class="badge badge-outline">3h</div>
                        <div class="badge badge-outline">Interactif</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>1,456 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="file-text" class="text-cyan-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Éditeurs de texte</span>
                    <span class="text-sm">Apprenez à utiliser nano, vim et autres éditeurs en ligne de commande.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">8 leçons</div>
                        <div class="badge badge-outline">2h</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>723 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="package" class="text-orange-400 w-12 h-12"></i>
                        <div class="badge badge-success">Débutant</div>
                    </div>
                    <span class="text-2xl font-bold">Gestion des paquets</span>
                    <span class="text-sm">Installez et gérez des logiciels avec apt, dnf et pacman.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">10 leçons</div>
                        <div class="badge badge-outline">2h15</div>
                        <div class="badge badge-outline">Quiz</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>645 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Niveau Intermédiaire -->
        <div class="mt-20">
            <div class="flex items-center gap-2 mb-5">
                <i data-lucide="zap" class="text-warning w-10 h-10"></i>
                <span class="font-bold text-2xl">Niveau Intermédiaire</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="users" class="text-blue-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Gestion des utilisateurs</span>
                    <span class="text-sm">Créez et gérez les utilisateurs, groupes et permissions avancées.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">12 leçons</div>
                        <div class="badge badge-outline">3h</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>534 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="cpu" class="text-purple-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Processus et services</span>
                    <span class="text-sm">Gérez les processus, services systemd et tâches planifiées.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">14 leçons</div>
                        <div class="badge badge-outline">3h30</div>
                        <div class="badge badge-outline">Quiz</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>467 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="network" class="text-cyan-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Configuration réseau</span>
                    <span class="text-sm">Configurez les interfaces réseau, DNS et routage sous Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">16 leçons</div>
                        <div class="badge badge-outline">4h</div>
                        <div class="badge badge-outline">Interactif</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>398 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="code" class="text-green-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Scripts Bash</span>
                    <span class="text-sm">Créez des scripts pour automatiser vos tâches quotidiennes.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">18 leçons</div>
                        <div class="badge badge-outline">4h30</div>
                        <div class="badge badge-outline">Projets</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>612 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="file-search" class="text-yellow-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Logs et monitoring</span>
                    <span class="text-sm">Analysez les logs système et surveillez les performances.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">10 leçons</div>
                        <div class="badge badge-outline">2h45</div>
                        <div class="badge badge-outline">Quiz</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>345 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="hard-drive" class="text-red-400 w-12 h-12"></i>
                        <div class="badge badge-warning">Intermédiaire</div>
                    </div>
                    <span class="text-2xl font-bold">Gestion du stockage</span>
                    <span class="text-sm">Partitions, LVM, RAID et systèmes de fichiers avancés.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">13 leçons</div>
                        <div class="badge badge-outline">3h15</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>289 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Niveau Avancé -->
        <div class="mt-20">
            <div class="flex items-center gap-2 mb-5">
                <i data-lucide="flame" class="text-error w-10 h-10"></i>
                <span class="font-bold text-2xl">Niveau Avancé</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="shield" class="text-red-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Sécurité Linux</span>
                    <span class="text-sm">Hardening, SELinux, AppArmor et bonnes pratiques de sécurité.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">20 leçons</div>
                        <div class="badge badge-outline">5h</div>
                        <div class="badge badge-outline">Certification</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>234 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="shield-check" class="text-blue-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Firewall et iptables</span>
                    <span class="text-sm">Maîtrisez iptables, nftables et la configuration de pare-feu.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">15 leçons</div>
                        <div class="badge badge-outline">4h</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>198 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="container" class="text-purple-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Conteneurs et Docker</span>
                    <span class="text-sm">Créez et gérez des conteneurs Docker sous Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">18 leçons</div>
                        <div class="badge badge-outline">4h30</div>
                        <div class="badge badge-outline">Projets</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>312 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="git-branch" class="text-orange-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Kernel Linux</span>
                    <span class="text-sm">Comprenez le fonctionnement interne du noyau Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">22 leçons</div>
                        <div class="badge badge-outline">6h</div>
                        <div class="badge badge-outline">Expert</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>156 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="cloud" class="text-cyan-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Infrastructure as Code</span>
                    <span class="text-sm">Ansible, Terraform et automatisation d'infrastructure.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">16 leçons</div>
                        <div class="badge badge-outline">4h15</div>
                        <div class="badge badge-outline">DevOps</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>267 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                    <div class="flex justify-between items-start">
                        <i data-lucide="gauge" class="text-green-400 w-12 h-12"></i>
                        <div class="badge badge-error">Avancé</div>
                    </div>
                    <span class="text-2xl font-bold">Performance tuning</span>
                    <span class="text-sm">Optimisez les performances de vos systèmes Linux.</span>
                    
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">14 leçons</div>
                        <div class="badge badge-outline">3h45</div>
                        <div class="badge badge-outline">Pratique</div>
                    </div>

                    <div class="flex items-center gap-2 text-sm mt-2">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>189 étudiants</span>
                    </div>

                    <div class="flex gap-2 mt-3">
                        <button class="btn btn-outline btn-sm flex-1">
                            <i data-lucide="info"></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm flex-1">
                            <i data-lucide="play"></i>
                            Commencer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Badges et certifications -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="award" class="text-warning w-12 h-12"></i>
            <span class="font-bold text-3xl">Badges et certifications</span>
        </div>
        <span class="text-lg ml-2">Débloquez des badges en complétant les cours et parcours</span>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5 mt-10">
            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 hover:scale-110 transition-all">
                <i data-lucide="trophy" class="text-warning w-16 h-16"></i>
                <span class="font-bold text-center">Premier pas</span>
                <span class="text-xs text-center">Complétez votre premier cours</span>
                <div class="badge badge-success">Obtenu</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 hover:scale-110 transition-all">
                <i data-lucide="zap" class="text-yellow-400 w-16 h-16"></i>
                <span class="font-bold text-center">Rapide</span>
                <span class="text-xs text-center">Complétez 3 cours en une semaine</span>
                <div class="badge badge-success">Obtenu</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 hover:scale-110 transition-all">
                <i data-lucide="flame" class="text-orange-400 w-16 h-16"></i>
                <span class="font-bold text-center">Streak 7j</span>
                <span class="text-xs text-center">7 jours consécutifs</span>
                <div class="badge badge-success">Obtenu</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 hover:scale-110 transition-all">
                <i data-lucide="book-open" class="text-blue-400 w-16 h-16"></i>
                <span class="font-bold text-center">Lecteur</span>
                <span class="text-xs text-center">Complétez 5 cours</span>
                <div class="badge badge-success">Obtenu</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="star" class="text-purple-400 w-16 h-16"></i>
                <span class="font-bold text-center">Expert</span>
                <span class="text-xs text-center">Complétez 10 cours</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="crown" class="text-yellow-500 w-16 h-16"></i>
                <span class="font-bold text-center">Maître</span>
                <span class="text-xs text-center">Complétez tous les cours</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="shield" class="text-red-400 w-16 h-16"></i>
                <span class="font-bold text-center">Sécurité</span>
                <span class="text-xs text-center">Parcours sécurité complet</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="server" class="text-blue-500 w-16 h-16"></i>
                <span class="font-bold text-center">Admin</span>
                <span class="text-xs text-center">Parcours admin complet</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="cloud-cog" class="text-purple-500 w-16 h-16"></i>
                <span class="font-bold text-center">DevOps</span>
                <span class="text-xs text-center">Parcours DevOps complet</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="target" class="text-green-500 w-16 h-16"></i>
                <span class="font-bold text-center">Perfectionniste</span>
                <span class="text-xs text-center">100% dans tous les quiz</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="users" class="text-cyan-400 w-16 h-16"></i>
                <span class="font-bold text-center">Communauté</span>
                <span class="text-xs text-center">Aidez 10 personnes</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>

            <div class="card bg-base-100 p-6 flex flex-col items-center gap-3 opacity-50">
                <i data-lucide="rocket" class="text-pink-400 w-16 h-16"></i>
                <span class="font-bold text-center">Pionnier</span>
                <span class="text-xs text-center">Terminez un cours en beta</span>
                <div class="badge badge-outline">Verrouillé</div>
            </div>
        </div>
    </section>

    <!-- Terminal interactif -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="terminal-square" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Terminal interactif</span>
        </div>
        <span class="text-lg ml-2">Pratiquez vos commandes directement dans le navigateur</span>

        <div class="card bg-base-200 p-8 mt-10 max-w-4xl mx-auto">
            <div class="bg-zinc-900 rounded-xl overflow-hidden shadow-2xl">
                <div class="flex items-center gap-2 bg-zinc-800 px-4 py-3">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <span class="text-zinc-400 text-sm ml-4">Terminal - Sandbox Linux</span>
                </div>
                
                <div class="p-6 font-mono text-sm">
                    <div class="text-green-400">
                        <span class="text-blue-400">user@richlabs</span>
                        <span class="text-white">:</span>
                        <span class="text-cyan-400">~</span>
                        <span class="text-white">$ </span>
                        <span class="text-white">ls -la</span>
                    </div>
                    <div class="text-zinc-300 mt-2">
                        <div>total 32</div>
                        <div>drwxr-xr-x 5 user user 4096 Apr 2 10:30 .</div>
                        <div>drwxr-xr-x 3 root root 4096 Apr 1 09:15 ..</div>
                        <div>-rw-r--r-- 1 user user  220 Apr 1 09:15 .bash_logout</div>
                        <div>-rw-r--r-- 1 user user 3526 Apr 1 09:15 .bashrc</div>
                        <div>drwxr-xr-x 2 user user 4096 Apr 2 10:30 Documents</div>
                        <div>drwxr-xr-x 2 user user 4096 Apr 2 10:30 Downloads</div>
                    </div>
                    <div class="text-green-400 mt-4">
                        <span class="text-blue-400">user@richlabs</span>
                        <span class="text-white">:</span>
                        <span class="text-cyan-400">~</span>
                        <span class="text-white">$ </span>
                        <span class="animate-pulse">_</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button class="btn btn-primary btn-lg">
                    <i data-lucide="play"></i>
                    Lancer le terminal interactif
                </button>
            </div>
        </div>
    </section>

    <!-- Cours populaires -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="trending-up" class="text-success w-12 h-12"></i>
            <span class="font-bold text-3xl">Cours populaires</span>
        </div>
        <span class="text-lg ml-2">Les cours les plus suivis par la communauté</span>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">
            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2 transition-all border-2 border-primary">
                <div class="badge badge-primary">Top 1</div>
                <div class="flex justify-between items-start">
                    <i data-lucide="terminal" class="text-green-400 w-12 h-12"></i>
                    <div class="badge badge-success">Débutant</div>
                </div>
                <span class="text-2xl font-bold">Commandes essentielles</span>
                <span class="text-sm">Le cours le plus populaire pour débuter avec Linux.</span>
                
                <div class="flex items-center gap-4 text-sm mt-2">
                    <div class="flex items-center gap-1">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>1,456</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-warning"></i>
                        <span>4.9/5</span>
                    </div>
                </div>

                <button class="btn btn-primary mt-2">
                    <i data-lucide="play"></i>
                    Commencer
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2 transition-all border-2 border-secondary">
                <div class="badge badge-secondary">Top 2</div>
                <div class="flex justify-between items-start">
                    <i data-lucide="code" class="text-green-400 w-12 h-12"></i>
                    <div class="badge badge-warning">Intermédiaire</div>
                </div>
                <span class="text-2xl font-bold">Scripts Bash</span>
                <span class="text-sm">Automatisez vos tâches avec des scripts puissants.</span>
                
                <div class="flex items-center gap-4 text-sm mt-2">
                    <div class="flex items-center gap-1">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>612</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-warning"></i>
                        <span>4.8/5</span>
                    </div>
                </div>

                <button class="btn btn-primary mt-2">
                    <i data-lucide="play"></i>
                    Commencer
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2 transition-all border-2 border-accent">
                <div class="badge badge-accent">Top 3</div>
                <div class="flex justify-between items-start">
                    <i data-lucide="shield" class="text-red-400 w-12 h-12"></i>
                    <div class="badge badge-error">Avancé</div>
                </div>
                <span class="text-2xl font-bold">Sécurité Linux</span>
                <span class="text-sm">Protégez vos systèmes contre les menaces.</span>
                
                <div class="flex items-center gap-4 text-sm mt-2">
                    <div class="flex items-center gap-1">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>234</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-warning"></i>
                        <span>4.9/5</span>
                    </div>
                </div>

                <button class="btn btn-primary mt-2">
                    <i data-lucide="play"></i>
                    Commencer
                </button>
            </div>
        </div>
    </section>


    <!-- Statistiques d'apprentissage -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="bar-chart-3" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Vos statistiques</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-10">
            <div class="card bg-base-200 p-8">
                <span class="font-bold text-xl mb-5">Progression par niveau</span>
                
                <div class="flex flex-col gap-4">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-semibold">Débutant</span>
                            <span class="text-sm font-bold">50%</span>
                        </div>
                        <progress class="progress progress-success w-full" value="50" max="100"></progress>
                        <span class="text-xs text-zinc-500">3/6 cours complétés</span>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-semibold">Intermédiaire</span>
                            <span class="text-sm font-bold">0%</span>
                        </div>
                        <progress class="progress progress-warning w-full" value="0" max="100"></progress>
                        <span class="text-xs text-zinc-500">0/6 cours complétés</span>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-sm font-semibold">Avancé</span>
                            <span class="text-sm font-bold">0%</span>
                        </div>
                        <progress class="progress progress-error w-full" value="0" max="100"></progress>
                        <span class="text-xs text-zinc-500">0/6 cours complétés</span>
                    </div>
                </div>
            </div>

            <div class="card bg-base-200 p-8">
                <span class="font-bold text-xl mb-5">Activité récente</span>
                
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-success p-2">
                            <i data-lucide="check" class="w-5 h-5 text-success-content"></i>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-sm">Cours complété</div>
                            <div class="text-xs text-zinc-500">Commandes essentielles - Il y a 2 jours</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-warning p-2">
                            <i data-lucide="trophy" class="w-5 h-5 text-warning-content"></i>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-sm">Badge obtenu</div>
                            <div class="text-xs text-zinc-500">Streak 7 jours - Il y a 3 jours</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-info p-2">
                            <i data-lucide="play" class="w-5 h-5 text-info-content"></i>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-sm">Cours démarré</div>
                            <div class="text-xs text-zinc-500">Gestion des utilisateurs - Il y a 5 jours</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="rounded-full bg-success p-2">
                            <i data-lucide="check" class="w-5 h-5 text-success-content"></i>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold text-sm">Quiz réussi</div>
                            <div class="text-xs text-zinc-500">Système de fichiers - 95% - Il y a 1 semaine</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-5">
            <i data-lucide="help-circle" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Questions fréquentes</span>
        </div>

        <div class="max-w-4xl mx-auto mt-10">
            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" checked />
                <div class="collapse-title font-semibold">
                    Les cours sont-ils vraiment gratuits ?
                </div>
                <div class="collapse-content text-sm">
                    Oui, tous nos cours sont 100% gratuits. Notre mission est de rendre l'apprentissage de Linux accessible à tous.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" />
                <div class="collapse-title font-semibold">
                    Ai-je besoin d'installer Linux pour suivre les cours ?
                </div>
                <div class="collapse-content text-sm">
                    Non, vous pouvez utiliser notre terminal interactif directement dans le navigateur. Cependant, nous recommandons d'installer Linux en machine virtuelle pour une expérience complète.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" />
                <div class="collapse-title font-semibold">
                    Puis-je obtenir un certificat ?
                </div>
                <div class="collapse-content text-sm">
                    Oui, vous recevez un certificat numérique après avoir complété chaque parcours. Ces certificats peuvent être partagés sur LinkedIn et votre CV.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" />
                <div class="collapse-title font-semibold">
                    Combien de temps faut-il pour compléter un parcours ?
                </div>
                <div class="collapse-content text-sm">
                    Cela dépend de votre rythme. Le parcours débutant prend environ 15 heures, mais vous pouvez le suivre à votre propre vitesse.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" />
                <div class="collapse-title font-semibold">
                    Y a-t-il un support si je suis bloqué ?
                </div>
                <div class="collapse-content text-sm">
                    Absolument ! Chaque cours dispose d'un forum de discussion où vous pouvez poser vos questions. Notre communauté et nos instructeurs sont là pour vous aider.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-100 mb-3">
                <input type="radio" name="faq-accordion" />
                <div class="collapse-title font-semibold">
                    Les cours sont-ils mis à jour régulièrement ?
                </div>
                <div class="collapse-content text-sm">
                    Oui, nous mettons à jour nos cours régulièrement pour refléter les dernières versions de Linux et les meilleures pratiques actuelles.
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="lg:px-65 px-4 py-20">
        <div class="card bg-gradient-to-r from-primary to-secondary p-12 text-primary-content text-center">
            <div class="flex flex-col items-center gap-5">
                <i data-lucide="rocket" class="w-20 h-20"></i>
                <span class="text-4xl font-bold">Prêt à commencer votre aventure Linux ?</span>
                <span class="text-xl max-w-2xl">
                    Rejoignez plus de 5,000 étudiants qui apprennent Linux avec RichLabs
                </span>
                <div class="flex gap-3 mt-5">
                    <button class="btn btn-lg bg-white text-primary hover:bg-zinc-100">
                        <i data-lucide="play"></i>
                        Commencer maintenant
                    </button>
                    <button class="btn btn-lg btn-outline text-white border-white hover:bg-white hover:text-primary">
                        <i data-lucide="book-open"></i>
                        Voir les parcours
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
