<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="gap-1 lg:px-65">
        <div class="flex flex-col justify-center items-center min-h-screen gap-3">
            <span class="text-5xl">
                Ressources Linux
            </span>
            <span class="md:text-2xl lg:text-2xl text-xl text-center">
                Tout ce dont vous avez besoin pour maîtriser Linux
            </span>

            <div class="join flex justify-center w-full">
                <div class="input validator join-item w-1/3">
                    <i 
                        data-lucide="search"
                        class="text-pink-300 w-10 h-10"
                    ></i>
                    <input 
                        type="search"
                        class="grow rounded-md"
                        placeholder="rechercher une ressource..."
                    >
                </div>
                <button class="btn btn-primary rounded-md">rechercher</button>
            </div>
            <div class="flex gap-3 mt-5">
                <button class="btn btn-primary">Tous</button>
                <button class="btn btn-outline">Débutant</button>
                <button class="btn btn-outline">Intermédiare</button>
                <button class="btn btn-outline">Avancé</button>
            </div>

            <div class="flex flex-col mt-30 md:mt-50 lg:mt-65 items-center">
                <div class="flex gap-2 justify-center items-center">
                    <i 
                        data-lucide="book-open-text"
                        class="text-pink-400 w-10 h-10"
                    ></i>
                    <span class="md:text-4xl lg:text-5xl text-3xl">
                        Documentation et guides
                    </span>
                </div>
            </div>
        </div>

        <div class="gap-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-5 lg:px-25">
            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="file-text"
                        class="text-blue-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-success">Débutant</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Guide de démarrage Linux
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Introduction complète pour débuter avec Linux, de l'installation aux commandes de base.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>

            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="terminal"
                        class="text-green-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-warning">Intermédiare</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Cheat Sheet Commandes
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Aide-mémoire des commandes Linux les plus utilisées avec exemples pratiques.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                            <div class="badge badge-outline badge-xl">Quiz</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>

            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="shield"
                        class="text-red-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-error">Avancé</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Sécurité Linux
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Guide complet sur la sécurisation de vos systèmes Linux et bonnes pratiques.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                            <div class="badge badge-outline badge-xl">Quiz</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>

            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="code"
                        class="text-purple-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-warning">Intermédiare</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Scripts Bash
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Apprenez à créer des scripts Bash pour automatiser vos tâches quotidiennes.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                            <div class="badge badge-outline badge-xl">Quiz</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>

            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="network"
                        class="text-cyan-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-error">Avancé</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Réseau sous Linux
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Configuration réseau, firewall, VPN et diagnostic des problèmes réseau.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                            <div class="badge badge-outline badge-xl">Quiz</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>

            <div class="card flex gap-2 bg-base-200 p-5">
                <div class="flex justify-between gap-20">
                    <i 
                        data-lucide="book"
                        class="text-yellow-400 w-15 h-15"
                    ></i>
                    <div class="badge badge-2xs badge-success">Débutant</div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="text-2xl">
                            Glossaire Linux
                        </span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-3">
                        <span>
                            Dictionnaire complet des termes et concepts essentiels de l'univers Linux.
                        </span>
                        <div class="flex gap-2">
                            <div class="badge badge-outline badge-xl">Interactif</div>
                            <div class="badge badge-outline badge-xl">PDF</div>
                        </div>
                    </div>

                    <div 
                        class="flex justify-end w-full"
                    >
                        <button
                            class="btn btn-primary mt-5"
                        >
                            <i data-lucide="eye"></i>
                            Voir
                        </button>
                    </div>
                </div>
            </div>
        </div>
        

        
    </section>

    <section class="bg-base-200 mt-20 py-15 px-15 lg:px-65">
        <span class="flex items-center px-25">
            <i 
                data-lucide="wrench"
                class="text-pink-400 h-12 w-12"
            ></i>
            <span class="font-bold text-4xl">
                Outils et Téléchargements
            </span>
        </span>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5 gap-5 lg:px-25">
            <div class="card bg-base-100 p-6 hover:-translate-y-2">
                <div class="grid justify-center items-center gap-3">
                    <i 
                        data-lucide="disc"
                        class="text-orange-300 w-15 h-15 ml-8"
                    ></i>
                    <span class="font-bold text-2xl">
                        Images ISO
                    </span>
                </div>
                <p class="text-center mt-2 mb-2">Téléchargez les ISO des distributions populaires</p>
                <div class="flex justify-center">
                    <button class="btn btn-primary mt-4 w-45 flex">
                        <i 
                            data-lucide="square-arrow-out-up-right"
                        ></i>
                        Accéder
                    </button>
                </div>
            </div>

            <div class="card bg-base-100 p-6 hover:-translate-y-2">
                <div class="grid justify-center items-center gap-3">
                    <i 
                        data-lucide="box"
                        class="text-blue-400 w-15 h-15 ml-8"
                    ></i>
                    <span class="font-bold text-2xl">
                        VirtualBox
                    </span>
                </div>
                <p class="text-center mt-2 mb-2">Logiciel de virtualisation gratuit et open source</p>
                <div class="flex justify-center">
                    <button class="btn btn-primary mt-4 w-45 flex">
                        <i 
                            data-lucide="square-arrow-out-up-right"
                        ></i>
                        Accéder
                    </button>
                </div>
            </div>

            <div class="card bg-base-100 p-6 hover:-translate-y-2">
                <div class="grid justify-center items-center gap-3">
                    <i 
                        data-lucide="file-code"
                        class="text-green-400 w-15 h-15 ml-8"
                    ></i>
                    <span class="font-bold text-2xl">
                        Scripts Utiles
                    </span>
                </div>
                <p class="text-center mt-2 mb-2">Collection de scripts pour automatiser vos tâches</p>
                <div class="flex justify-center">
                    <button class="btn btn-primary mt-4 w-45 flex">
                        <i 
                            data-lucide="square-arrow-out-up-right"
                        ></i>
                        Accéder
                    </button>
                </div>
            </div>

             <div class="card bg-base-100 p-6 hover:-translate-y-2">
                <div class="grid justify-center items-center gap-3">
                    <i 
                        data-lucide="settings"
                        class="text-purple-400 w-15 h-15 ml-8"
                    ></i>
                    <span class="font-bold text-2xl">
                        Dotfiles
                    </span>
                </div>
                <p class="text-center mt-2 mb-2">Fichiers de configuration optimisés (.bashrc, .vimrc)</p>
                <div class="flex justify-center">
                    <button class="btn btn-primary mt-4 w-45 flex">
                        <i 
                            data-lucide="square-arrow-out-up-right"
                        ></i>
                        Accéder
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 px-4 lg:px-65">
        <div class="flex items-center gap-2">
            <i 
                data-lucide="graduation-cap"
                class="text-pink-500 w-12 h-12"
            ></i>
            <span class="text-4xl font-bold">
                Ressources d'apprentissage
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="card p-5 bg-base-200 mt-5">
                <div class="flex gap-2">
                    <i 
                        data-lucide="book-open"
                        class="text-pink-300 w-15 h-15"
                    ></i>
                    <div>
                        <span class="text-2xl font-bold">
                            Livres recommandés
                        </span>

                        <div class="mt-3 gap-4">
                            <span class="flex gap-1 text-justify">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                The Linux Command Line (William Shotts) - Gratuit
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Linux Bible (Christopher Negus)
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                How Linux Works (Brian Ward)
                            </span>

                            <span class="flex gap-1 text-2xs">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                UNIX and Linux System Administration Handbook
                            </span>
                            <button 
                                class="btn btn-primary mt-5 btn-sm"
                            >
                                voir plus
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-5 bg-base-200 mt-5">
                <div class="flex gap-2">
                    <i 
                        data-lucide="video"
                        class="text-red-500 w-15 h-15"
                    ></i>
                    <div>
                        <span class="text-2xl font-bold">
                            Vidéos et Podcasts
                        </span>

                        <div class="mt-3 gap-4">
                            <span class="flex gap-1 text-justify">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Linux Academy - Cours vidéo complets
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                The Linux Experiment - Chaîne YouTube
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Linux Unplugged - Podcast hebdomadaire
                            </span>

                            <span class="flex gap-1 text-2xs">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                DistroTube - Tutoriels et reviews
                            </span>
                            <button 
                                class="btn btn-primary mt-5 btn-sm"
                            >
                                voir plus
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-5 bg-base-200 mt-5">
                <div class="flex gap-2">
                    <i 
                        data-lucide="globe"
                        class="text-blue-500 w-15 h-15"
                    ></i>
                    <div>
                        <span class="text-2xl font-bold">
                            Sites web de référence
                        </span>

                        <div class="mt-3 gap-4">
                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                ArchWiki - Documentation exhaustive
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Linux.org - Communauté et ressources
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                DistroWatch - Actualités distributions
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                LinuxQuestions.org - Forum d'entraide
                            </span>
                            <button 
                                class="btn btn-primary mt-5 btn-sm"
                            >
                                voir plus
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-5 bg-base-200 mt-5">
                <div class="flex gap-2">
                    <i 
                        data-lucide="users"
                        class="text-green-500 w-15 h-15"
                    ></i>
                    <div>
                        <span class="text-2xl font-bold">
                            Communauté
                        </span>

                        <div class="mt-3 gap-4">
                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                r/linux - Subreddit actif et bienveillant
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Discord Linux FR - Communauté francophone
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                Stack Overflow - Questions techniques
                            </span>

                            <span class="flex gap-1">
                                <i 
                                    data-lucide="check"
                                    class="text-green-400"
                                ></i>
                                IRC Freenode - Canaux par distribution
                            </span>
                            <button 
                                class="btn btn-primary mt-5 btn-sm"
                            >
                                Rejoindre
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 px-4 lg:px-65 bg-base-200">
        <div class="flex gap-2">
            <i 
                data-lucide="database"
                class="text-pink-500 h-12 w-12"
            ></i>
            <span class="text-4xl">
                Références techniques
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card bg-base-100 p-5 gap-4 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="book-text"
                        class="text-blue-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Pages Man
                    </span>
                </div>
                <span class="mt-3 text-justify">
                    Accédez aux manuels complets de toutes les commandes Linux en ligne.
                </span>
                <div class="bg-zinc-500 p-3 rounded-xl">
                    <div class="flex gap-1">
                        <div class="bg-red-500 w-3 h-3 rounded-full"></div>
                        <div class="bg-yellow-500 w-3 h-3 rounded-full"></div>
                        <div class="bg-green-500 w-3 h-3 rounded-full"></div>
                    </div>
                    <div class="font-mono mt-4 ml-5">
                        <div>
                            <span>$</span>
                            <span>man ls</span>
                        </div>
                        <span>$</span>
                        <span>man grep</span>
                    </div>
                </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

            <div class="card bg-base-100 p-5 gap-4 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="package"
                        class="text-yellow-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Gestionnaires de Paquets
                    </span>
                </div>
                <span class="mt-3 text-justify">
                    Documentation complète pour APT, DNF, Pacman et autres.
                </span>
                <div class="mt-18">
                    <div class="badge badge-outline">APT</div>
                    <div class="badge badge-outline">DNF</div>
                    <div class="badge badge-outline">Pacman</div>
                </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

            <div class="card bg-base-100 p-5 gap-3 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="server"
                        class="text-purple-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Administration Système
                    </span>
                </div>
                <span class="mt-1 text-justify">
                    Guides sur systemd, cron, logs, utilisateurs et permissions.
                </span>
               <div class="mt-18">
                <div class="badge badge-outline">sytemd</div>
                <div class="badge badge-outline">cron</div>
                <div class="badge badge-outline">logs</div>
               </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

             <div class="card bg-base-100 p-5 gap-3 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="shield-check"
                        class="text-red-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Sécurité
                    </span>
                </div>
                <span class="mt-1 text-justify">
                    Bonnes pratiques, firewall, SELinux, AppArmor et chiffrement.
                </span>
               <div class="mt-18">
                <div class="badge badge-outline">iptables</div>
                <div class="badge badge-outline">SELinux</div>
                <div class="badge badge-outline">SSH</div>
               </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

            <div class="card bg-base-100 p-5 gap-3 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="git-branch"
                        class="text-yellow-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Kernel Linux
                    </span>
                </div>
                <span class="mt-1 text-justify">
                    Documentation du noyau, modules et compilation personnalisée.
                </span>
               <div class="mt-18">
                <div class="badge badge-outline">Modules</div>
                <div class="badge badge-outline">Compilation</div>
               </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

            <div class="card bg-base-100 p-5 gap-3 mt-4">
                <div class="mt-5">
                    <i 
                        data-lucide="hard-drive"
                        class="text-green-500 h-12 w-12 mb-4"
                    ></i>
                    <span class="font-bold text-xl">
                        Systèmes de fichiers
                    </span>
                </div>
                <span class="mt-1 text-justify">
                    ext4, Btrfs, XFS, ZFS - Gestion et optimisation du stockage.
                </span>
               <div class="mt-18">
                <div class="badge badge-outline">ext4</div>
                <div class="badge badge-outline">Btrfs</div>
                <div class="badge badge-outline">ZFS</div>
               </div>
                <button
                    class="btn btn-primary"
                >
                    consulter
                </button>
            </div>

        </div>

    </section>

    <script>
            lucide.createIcons();
    </script>
</body>
</html>