<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressources - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
   <header class="flex justify-between sticky top-0 z-50 bg-base-100 shadow-lg p-4">
        <div class="bg-neutral-500 font-bold text-xl p-2 rounded-xl cursor-pointer">
            >__
            <span class="text-blue-500">RichLabs</span>
        </div>

        <div class="flex justify-between">
            <ul class="flex justify-between items-center gap-7">
                <li class="flex gap-1 items-center">
                    <i data-lucide="house" class="w-4 h-4"></i>
                    <a href="index.php">Accueil</a>
                </li>
                <li class="flex gap-2 items-center">
                    <i data-lucide="inbox" class="w-4 h-4"></i>
                    <a href="">Distribution</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="book-open" class="w-4 h-4"></i>
                    <a href="">Cours</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="library" class="w-4 h-4"></i>
                    <a href="ressources.php" class="text-primary">Ressources</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="info" class="h-4 w-4"></i>
                    <a href="">A propos</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-2">
            <button class="btn">
                <i data-lucide="log-in" class="w-5 h-4"></i>
                Se connecter
            </button>
            <button class="btn btn-primary">
                <i data-lucide="user-plus"></i>
                S'inscrire
            </button>
        </div>
   </header>

   <!-- Hero Section -->
   <section class="bg-gradient-to-br from-base-200 to-base-300 py-20 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Ressources Linux</h1>
            <p class="text-xl text-base-content/70 mb-8">Tout ce dont vous avez besoin pour maîtriser Linux</p>
            
            <!-- Barre de recherche -->
            <div class="max-w-2xl mx-auto">
                <div class="join w-full">
                    <input type="text" placeholder="Rechercher une ressource..." class="input input-bordered join-item w-full" />
                    <button class="btn btn-primary join-item">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Filtres -->
            <div class="flex gap-2 justify-center mt-6 flex-wrap">
                <button class="btn btn-sm btn-primary">Tous</button>
                <button class="btn btn-sm btn-outline">Débutant</button>
                <button class="btn btn-sm btn-outline">Intermédiaire</button>
                <button class="btn btn-sm btn-outline">Avancé</button>
            </div>
        </div>
   </section>

   <!-- Documentation et Guides -->
   <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="book-open" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Documentation et Guides</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="file-text" class="w-12 h-12 text-blue-400"></i>
                            <div class="badge badge-success">Débutant</div>
                        </div>
                        <h3 class="card-title mt-4">Guide de démarrage Linux</h3>
                        <p class="text-sm">Introduction complète pour débuter avec Linux, de l'installation aux commandes de base.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">50 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="terminal" class="w-12 h-12 text-green-400"></i>
                            <div class="badge badge-warning">Intermédiaire</div>
                        </div>
                        <h3 class="card-title mt-4">Cheat Sheet Commandes</h3>
                        <p class="text-sm">Aide-mémoire des commandes Linux les plus utilisées avec exemples pratiques.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">10 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="shield" class="w-12 h-12 text-red-400"></i>
                            <div class="badge badge-error">Avancé</div>
                        </div>
                        <h3 class="card-title mt-4">Sécurité Linux</h3>
                        <p class="text-sm">Guide complet sur la sécurisation de vos systèmes Linux et bonnes pratiques.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">120 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="code" class="w-12 h-12 text-purple-400"></i>
                            <div class="badge badge-warning">Intermédiaire</div>
                        </div>
                        <h3 class="card-title mt-4">Scripts Bash</h3>
                        <p class="text-sm">Apprenez à créer des scripts Bash pour automatiser vos tâches quotidiennes.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">80 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="network" class="w-12 h-12 text-cyan-400"></i>
                            <div class="badge badge-error">Avancé</div>
                        </div>
                        <h3 class="card-title mt-4">Réseau sous Linux</h3>
                        <p class="text-sm">Configuration réseau, firewall, VPN et diagnostic des problèmes réseau.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">95 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between">
                            <i data-lucide="book" class="w-12 h-12 text-yellow-400"></i>
                            <div class="badge badge-success">Débutant</div>
                        </div>
                        <h3 class="card-title mt-4">Glossaire Linux</h3>
                        <p class="text-sm">Dictionnaire complet des termes et concepts essentiels de l'univers Linux.</p>
                        <div class="flex gap-2 mt-2">
                            <div class="badge badge-outline badge-sm">PDF</div>
                            <div class="badge badge-outline badge-sm">30 pages</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- Outils et Téléchargements -->
   <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="wrench" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Outils et Téléchargements</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="disc" class="w-16 h-16 text-orange-400 mb-4"></i>
                        <h3 class="card-title">Images ISO</h3>
                        <p class="text-sm">Téléchargez les ISO des distributions populaires</p>
                        <button class="btn btn-primary btn-sm mt-4">
                            <i data-lucide="external-link" class="w-4 h-4"></i>
                            Accéder
                        </button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="box" class="w-16 h-16 text-blue-400 mb-4"></i>
                        <h3 class="card-title">VirtualBox</h3>
                        <p class="text-sm">Logiciel de virtualisation gratuit et open source</p>
                        <button class="btn btn-primary btn-sm mt-4">
                            <i data-lucide="external-link" class="w-4 h-4"></i>
                            Télécharger
                        </button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="file-code" class="w-16 h-16 text-green-400 mb-4"></i>
                        <h3 class="card-title">Scripts Utiles</h3>
                        <p class="text-sm">Collection de scripts pour automatiser vos tâches</p>
                        <button class="btn btn-primary btn-sm mt-4">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            Télécharger
                        </button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="settings" class="w-16 h-16 text-purple-400 mb-4"></i>
                        <h3 class="card-title">Dotfiles</h3>
                        <p class="text-sm">Fichiers de configuration optimisés (.bashrc, .vimrc)</p>
                        <button class="btn btn-primary btn-sm mt-4">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            Télécharger
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- Ressources d'apprentissage -->
   <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="graduation-cap" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Ressources d'apprentissage</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-start gap-4">
                            <i data-lucide="book-open" class="w-12 h-12 text-pink-400 flex-shrink-0"></i>
                            <div class="flex-1">
                                <h3 class="card-title mb-2">Livres recommandés</h3>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>The Linux Command Line (William Shotts) - Gratuit</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Linux Bible (Christopher Negus)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>How Linux Works (Brian Ward)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>UNIX and Linux System Administration Handbook</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm mt-4">Voir plus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-start gap-4">
                            <i data-lucide="video" class="w-12 h-12 text-red-400 flex-shrink-0"></i>
                            <div class="flex-1">
                                <h3 class="card-title mb-2">Vidéos et Podcasts</h3>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Linux Academy - Cours vidéo complets</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>The Linux Experiment - Chaîne YouTube</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Linux Unplugged - Podcast hebdomadaire</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>DistroTube - Tutoriels et reviews</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm mt-4">Voir plus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-start gap-4">
                            <i data-lucide="globe" class="w-12 h-12 text-blue-400 flex-shrink-0"></i>
                            <div class="flex-1">
                                <h3 class="card-title mb-2">Sites web de référence</h3>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>ArchWiki - Documentation exhaustive</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Linux.org - Communauté et ressources</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>DistroWatch - Actualités distributions</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>LinuxQuestions.org - Forum d'entraide</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm mt-4">Voir plus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-start gap-4">
                            <i data-lucide="users" class="w-12 h-12 text-green-400 flex-shrink-0"></i>
                            <div class="flex-1">
                                <h3 class="card-title mb-2">Communautés</h3>
                                <ul class="space-y-2 text-sm">
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>r/linux - Subreddit actif et bienveillant</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Discord Linux FR - Communauté francophone</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>Stack Overflow - Questions techniques</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-lucide="check" class="w-4 h-4 text-success mt-1 flex-shrink-0"></i>
                                        <span>IRC Freenode - Canaux par distribution</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-sm mt-4">Rejoindre</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- Références techniques -->
   <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="database" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Références techniques</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="file-text" class="w-12 h-12 text-cyan-400 mb-4"></i>
                        <h3 class="card-title">Pages Man</h3>
                        <p class="text-sm mb-4">Accédez aux manuels complets de toutes les commandes Linux en ligne.</p>
                        <div class="mockup-code text-xs mb-4">
                            <pre data-prefix="$"><code>man ls</code></pre>
                            <pre data-prefix="$"><code>man grep</code></pre>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="package" class="w-12 h-12 text-orange-400 mb-4"></i>
                        <h3 class="card-title">Gestionnaires de paquets</h3>
                        <p class="text-sm mb-4">Documentation complète pour APT, DNF, Pacman et autres.</p>
                        <div class="flex gap-2 mb-4 flex-wrap">
                            <div class="badge badge-outline">APT</div>
                            <div class="badge badge-outline">DNF</div>
                            <div class="badge badge-outline">Pacman</div>
                            <div class="badge badge-outline">Zypper</div>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="server" class="w-12 h-12 text-purple-400 mb-4"></i>
                        <h3 class="card-title">Administration système</h3>
                        <p class="text-sm mb-4">Guides sur systemd, cron, logs, utilisateurs et permissions.</p>
                        <div class="flex gap-2 mb-4 flex-wrap">
                            <div class="badge badge-outline">systemd</div>
                            <div class="badge badge-outline">cron</div>
                            <div class="badge badge-outline">logs</div>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="shield-check" class="w-12 h-12 text-red-400 mb-4"></i>
                        <h3 class="card-title">Sécurité</h3>
                        <p class="text-sm mb-4">Bonnes pratiques, firewall, SELinux, AppArmor et chiffrement.</p>
                        <div class="flex gap-2 mb-4 flex-wrap">
                            <div class="badge badge-outline">iptables</div>
                            <div class="badge badge-outline">SELinux</div>
                            <div class="badge badge-outline">SSH</div>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="git-branch" class="w-12 h-12 text-yellow-400 mb-4"></i>
                        <h3 class="card-title">Kernel Linux</h3>
                        <p class="text-sm mb-4">Documentation du noyau, modules et compilation personnalisée.</p>
                        <div class="flex gap-2 mb-4 flex-wrap">
                            <div class="badge badge-outline">Modules</div>
                            <div class="badge badge-outline">Compilation</div>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <i data-lucide="hard-drive" class="w-12 h-12 text-green-400 mb-4"></i>
                        <h3 class="card-title">Systèmes de fichiers</h3>
                        <p class="text-sm mb-4">ext4, Btrfs, XFS, ZFS - Gestion et optimisation du stockage.</p>
                        <div class="flex gap-2 mb-4 flex-wrap">
                            <div class="badge badge-outline">ext4</div>
                            <div class="badge badge-outline">Btrfs</div>
                            <div class="badge badge-outline">ZFS</div>
                        </div>
                        <button class="btn btn-primary btn-sm">Consulter</button>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- Outils interactifs -->
   <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="play-circle" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Outils interactifs</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <i data-lucide="terminal" class="w-16 h-16 text-green-400"></i>
                            <div>
                                <h3 class="card-title">Terminal en ligne</h3>
                                <p class="text-sm">Testez vos commandes dans un environnement sécurisé</p>
                            </div>
                        </div>
                        <div class="mockup-code bg-neutral">
                            <pre data-prefix="$" class="text-success"><code>ls -la</code></pre>
                            <pre data-prefix=">" class="text-warning"><code>total 48</code></pre>
                            <pre data-prefix=">" class="text-warning"><code>drwxr-xr-x 5 user user 4096 Jan 15 10:30 .</code></pre>
                            <pre data-prefix="$" class="text-primary animate-pulse"><code>_</code></pre>
                        </div>
                        <button class="btn btn-primary mt-4">
                            <i data-lucide="play" class="w-4 h-4"></i>
                            Lancer le terminal
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <i data-lucide="box" class="w-16 h-16 text-blue-400"></i>
                            <div>
                                <h3 class="card-title">Sandbox Linux</h3>
                                <p class="text-sm">Environnement virtuel pour expérimenter sans risque</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-success"></i>
                                <span class="text-sm">Accès root complet</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-success"></i>
                                <span class="text-sm">Réinitialisation instantanée</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-success"></i>
                                <span class="text-sm">Plusieurs distributions disponibles</span>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4">
                            <i data-lucide="rocket" class="w-4 h-4"></i>
                            Démarrer une sandbox
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <i data-lucide="git-compare" class="w-16 h-16 text-purple-400"></i>
                            <div>
                                <h3 class="card-title">Comparateur de distros</h3>
                                <p class="text-sm">Comparez les distributions pour trouver la vôtre</p>
                            </div>
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Sélectionnez 2 distributions</span>
                            </label>
                            <div class="flex gap-2">
                                <select class="select select-bordered flex-1">
                                    <option>Ubuntu</option>
                                    <option>Fedora</option>
                                    <option>Arch Linux</option>
                                </select>
                                <select class="select select-bordered flex-1">
                                    <option>Debian</option>
                                    <option>Manjaro</option>
                                    <option>Pop!_OS</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4">
                            <i data-lucide="git-compare" class="w-4 h-4"></i>
                            Comparer
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <i data-lucide="file-code" class="w-16 h-16 text-orange-400"></i>
                            <div>
                                <h3 class="card-title">Générateur de scripts</h3>
                                <p class="text-sm">Créez des scripts Bash facilement avec notre assistant</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <i data-lucide="zap" class="w-5 h-5 text-warning"></i>
                                <span class="text-sm">Templates prêts à l'emploi</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="zap" class="w-5 h-5 text-warning"></i>
                                <span class="text-sm">Validation syntaxique</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="zap" class="w-5 h-5 text-warning"></i>
                                <span class="text-sm">Export et partage</span>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4">
                            <i data-lucide="wand" class="w-4 h-4"></i>
                            Créer un script
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- CTA Section -->
   <section class="py-20 px-4 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4 text-white">Prêt à devenir un expert Linux ?</h2>
            <p class="text-xl mb-8 text-white/90">Rejoignez notre communauté et accédez à toutes les ressources</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <button class="btn btn-neutral btn-lg">
                    <i data-lucide="user-plus" class="w-5 h-5"></i>
                    Créer un compte gratuit
                </button>
                <button class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    Nous contacter
                </button>
            </div>
        </div>
   </section>

   <!-- Footer -->
   <footer class="footer footer-center p-10 bg-base-200 text-base-content">
        <div>
            <div class="bg-neutral-500 font-bold text-xl p-2 rounded-xl mb-4">
                >__
                <span class="text-blue-500">RichLabs</span>
            </div>
            <p class="font-bold">
                RichLabs - Plateforme d'apprentissage Linux
            </p>
            <p>Copyright © 2024 - Tous droits réservés</p>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><i data-lucide="twitter" class="w-6 h-6"></i></a>
                <a><i data-lucide="youtube" class="w-6 h-6"></i></a>
                <a><i data-lucide="github" class="w-6 h-6"></i></a>
            </div>
        </div>
   </footer>

   <script>
        lucide.createIcons();
   </script>
</body>
</html>
