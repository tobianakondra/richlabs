<!DOCTYPE html>
<html lang="en" data-theme="dracula">
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
   <header class=" flex justify-between sticky top-0 z-50 bg-base-100 shadow-lg p-4">
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
                    <a href="ressources.php">Ressources</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="info" class="h-4 w-4"></i>
                    <a href="">A propos</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-2">
                <button 
                    class="btn"
                >
                    <i data-lucide="log-in" class="w-5 h-4"></i>
                    Se connecter
                </button>

                <button
                    class="btn btn-primary"
                >
                    <i data-lucide="user-plus"></i>
                    S'inscrire
                </button>
            
        </div>
   </header>

   <div class="flex flex-col items-center justify-center min-h-screen">
    <div class="flex flex-col bg-zinc-500 border border-zinc-700 p-3 rounded-xl gap-2 mt-75">
        <div class="flex gap-2">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>
        <div class="flex ml-15 mt-3">
            <span class="font-mono font-bold text-xl">~user@richlabs:~</span>
        </div>
        <div class="flex flex-col ml-8 mr-8 p-2 pb-5">
            <div>
                <span class="ml-20 mr-5 text-green-500 font-mono">
                    $
                </span>
                <span class="text-green-400 font-mono text-xl">
                    sudo apt update
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-yellow-400 font-mono">
                    >
                </span>
                <span class="font-mono text-yellow-400">
                    Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-yellow-300 font-mono">
                    >
                </span>
                <span class="font-mono text-yellow-300">
                    Get:2 http://security.ubuntu.com/ubuntu jammy-security InRelease
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-blue-400 font-mono">
                    >
                </span>
                <span class="font-mono text-blue-300">
                    Reading package lists... Done
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-red-300 font-mono animate-pulse">
                    $
                </span>
                <span class="font-mono text-red-300">
                    _
                </span>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-30 text-xl p-4 gap-2">
        <span>
            Maîtrisez les distributions Linux avec des cours pratiques, des tutoriels interactifs et une communauté 
        </span>
        <span class="text-center">
            passionnée
        </span>
        <div class="flex">
            <div class="flex justify-center p-5 ml-45 gap-4">
                <button 
                    class="btn btn-primary h-15 font-bold text-xl"
                >
                    <i data-lucide="rocket"></i>
                    Commencer gratuitement
                </button>
                <button 
                    class="btn btn-neutral h-15 font-bold text-xl"
                >
                    <i data-lucide="play"></i>
                    Voir la démo
                </button>
            </div>

        </div>
    </div>

    <div class="flex flex-col mt-75 gap-3">
        <span class="flex justify-center text-3xl font-bold">
            Pourquoi apprendre Linux ?
        </span>
        <span class="text-xl">
            Linux est partout : serveurs, cloud, IoT, smartphones. Développez des compétences
        </span>
        <span class="text-xl text-center">
            recherchées
        </span>
    </div>
   </div>

    <div class="flex p-4 justify-center gap-4 mt-4">
            <div class="flex flex-col justify-center items-center p-5 gap-2 bg-base-200 rounded-xl hover:-translate-y-2">
                <i 
                    data-lucide="lock-open"
                    class="w-30 h-20 text-pink-400"
                ></i>
                <span class="text-center text-xl mt-4">
                    Open Source
                </span>
                <span class="text-center">
                    Gratuit, libre et personnalisable à l'infini
                </span>
            </div>
            <div class="flex flex-col justify-center items-center gap-2 bg-base-200 p-4 rounded-xl p-2 hover:-translate-y-2">
                <i 
                    data-lucide="shield-check"
                    class="w-30 h-20 text-green-300"
                ></i>
                <span 
                    class="text-xl text-center mt-4"
                >
                    Sécurité
                </span>
                <span
                    class="text-center"
                >
                    Architecture robuste et mises à jour régulières
                </span>
            </div>
            <div class="flex flex-col justify-center items-center p-5 gap-2 bg-base-200 rounded-xl hover:-translate-y-2">
                <i 
                    data-lucide="zap"
                    class="w-30 h-20 text-yellow-400"
                ></i>
                <span class="text-center text-xl mt-4">
                    Performance
                </span>
                <span class="text-center">
                    Rapide, léger et optimisé pour tous les usages
                </span>
            </div>
            <div class="flex flex-col justify-center items-center p-5 gap-2 bg-base-200 rounded-xl hover:-translate-y-2">
                <i 
                    data-lucide="briefcase"
                    class="w-30 h-20 text-green-400"
                ></i>
                <span class="text-center text-xl mt-4">
                    Carrière
                </span>
                <span class="text-center">
                    Compétences très demandées sur le marché
                </span>
            </div>
    </div>

   <section class="bg-base-200 mt-35 p-5">
        <span
            class="text-5xl flex justify-center"
        >
            Distributions populaires
        </span>
        <span class="flex justify-center mt-3">
            Découvrez les distributions Linux les plus utilisées et trouvez celle qui vous correspond
        </span>

        <article class="px-4 py-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:mx-10">
            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/ubuntu/E95420" 
                    alt="ubuntu-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Ubuntu</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-success badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Serveur</div>
                </div>
                <span>La distribution la plus populaire, idéale pour débuter avec Linux. Interface intuitive et grande communauté.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2004</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: GNOME</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/fedora/51A2DA" 
                    alt="fedora-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Fedora</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermediare</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Dev</div>
                </div>
                <span>Distribution innovante sponsorisée par Red Hat. Toujours à la pointe des dernières technologies Linux.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2003</span>
                    <span>Paquets: DNF (rpm)</span>
                    <span>Bureau: GNOME</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/debian/A81D33" 
                    alt="debian-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Debian</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-info badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Serveur</div>
                    <div class="badge badge-neutral badge-xl">Stable</div>
                </div>
                <span>La distribution universelle. Extrêmement stable et fiable, base de nombreuses autres distributions.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 1993</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Multiple</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/archlinux/1793D1" 
                    alt="arch-linux-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Arch Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">DIY</div>
                </div>
                <span>Pour les utilisateurs expérimentés. Rolling release avec contrôle total et documentation exceptionnelle.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2002</span>
                    <span>Paquets: Pacman</span>
                    <span>Bureau: A choisir</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/linuxmint/87CF3E" 
                    alt="linux-mint-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Linux Mint</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-success badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Familier</div>
                </div>
                <span>Interface familière pour les utilisateurs Windows. Basée sur Ubuntu, simple et élégante.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2006</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Cinnamon</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

             <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/kalilinux/557C94" 
                    alt="kali-linux-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Kali Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Sécurité</div>
                    <div class="badge badge-neutral badge-xl">Pentest</div>
                </div>
                <span>Spécialisée en sécurité informatique et tests de pénétration. Plus de 600 outils préinstallés.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2013</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Xcfe</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/popos/48B9C7" 
                    alt="pop-os-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Pop!_OS</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-secondary badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Design</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                </div>
                <span>Créée par System76. Optimisée pour le gaming et le développement avec support GPU excellent.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2011</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Cosmic</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/manjaro/35BF5C" 
                    alt="manjaro-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Manjaro</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermédiaire</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Rolling</div>
                </div>
                <span>Arch Linux rendu accessible. Installation facile avec tous les avantages d'Arch.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2011</span>
                    <span>Paquets: Pacman</span>
                    <span>Bureau: Multiple</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/elementary/64BAFF" 
                    alt="elementary-os-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Elementary OS</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-success badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Design</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                </div>
                <span>Design élégant inspiré de macOS. Interface épurée et expérience utilisateur soignée.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2011</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Pantheon</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img 
                    src="https://cdn.simpleicons.org/rockylinux/10B981" 
                    alt="rocky-linux-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Rocky Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermédiaire</div>
                    <div class="badge badge-neutral badge-xl">Entreprise</div>
                    <div class="badge badge-neutral badge-xl">Serveur</div>
                </div>
                <span>Successeur de CentOS. Distribution enterprise-grade stable et fiable pour la production.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2021</span>
                    <span>Paquets: DNF (rpm)</span>
                    <span>Bureau: GNOME</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>
        </article>

   </section>

   <main class="bg-base-100  py-20">
        <h1 class="text-5xl text-center mb-2">Comment ça marche</h1>
        <p class="text-xl text-center">Un parcours simple et progressif pour devenir expert Linux</p>
        <ul class="timeline timeline-vertical lg:timeline-horizontal mt-10 flex justify-center">
            <li>
                <div class="timeline-start timeline-box gap-1">
                    <div class="flex gap-1">
                        <i 
                            data-lucide="search"
                            class="text-pink-500"
                        ></i>
                        <span class="font-bold text-xl">Choisir une distro</span>
                    </div>
                    <span>Explorez et sélectionnez la distribution adaptée à vos besoins</span>
                </div>
                <div class="timeline-middle">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">1</div>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div class="timeline-middle rounded-full bg-primary flex justify-center items-center w-10 h-10">2</div>
                <div class="timeline-end timeline-box">
                    <div class="flex gap-1 items-center">
                        <i 
                            data-lucide="graduation-cap"
                            class="text-pink-300"
                        ></i>
                        <span class="font-bold text-xl">Suivre les cours</span>
                    </div>
                    <span>Apprenez avec des tutoriels vidéo et des exercices pratiques</span>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div class="flex justify-center items-center rounded-full bg-primary timeline-middle w-10 h-10">3</div>
                <div class="timeline-start timeline-box">
                    <div class="flex gap-1 items-center">
                        <i 
                            data-lucide="code"
                            class="text-pink-300"
                        ></i>
                        <span class="font-bold text-xl">Pratiquer</span>
                    </div>
                    <span>Mettez en pratique dans des environnements virtuels sécurisés</span>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div class="timeline-middle flex items-center justify-center rounded-full w-10 h-10 bg-primary">4</div>
                <div class="timeline-end timeline-box">
                    <div class="flex gap-1 items-center">
                        <i 
                            data-lucide="award"
                            class="text-pink-400"
                        ></i>
                        <span class="font-bold text-xl">certifier</span>
                    </div>
                    <span>Obtenez des certificats reconnus pour valoriser vos compétences</span>
                </div>
            </li>
        </ul>
   </main>

   <section class="py-20 flex justify-center  bg-base-200">
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-3">
                <h1 class="text-center text-4xl">Cours disponibles</h1>
                <span class="text-xl text-center">Des formations complètes pour tous les niveaux</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="card bg-base-100 p-8 w-105">
                    <article class="flex flex-col gap-2">
                        <i 
                            data-lucide="book-open-check"
                            class="text-pink-300 w-20 h-20 mb-4"
                        ></i>
                        <span class="font-bold text-xl">Introduction à Linux</span>
                        <span>les bases essentielles pour debuter</span>
                        <div class="flex gap-3 mt-2 mb-2">
                            <div class="badge badge-outline badge-xl">12 leçons</div>
                            <div class="badge badge-outline badge-xl">3h</div>
                        </div>
                        <button class="btn btn-primary">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 w-105">
                    <article class="flex flex-col gap-2">
                        <i 
                            data-lucide="terminal"
                            class="text-green-300 w-20 h-20 mb-4"
                        ></i>
                        <span class="font-bold text-2xl">Ligne de Commande</span>
                        <span class="text-xl">Maîtrisez le terminal Linux</span>
                        <div class="flex gap-3 mt-2 mb-2">
                            <div class="badge badge-outline badge-xl">20 leçons</div>
                            <div class="badge badge-outline badge-xl">5h</div>
                        </div>
                        <button class="btn btn-primary">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 w-105">
                    <article class="flex flex-col gap-2">
                        <i 
                            data-lucide="database"
                            class="text-yellow-300 w-20 h-20 mb-4"
                        ></i>
                        <span class="font-bold text-2xl">Administration Système</span>
                        <span class="text-xl">Gérez serveurs et services</span>
                        <div class="flex gap-3 mt-2 mb-2">
                            <div class="badge badge-outline badge-xl">25 leçons</div>
                            <div class="badge badge-outline badge-xl">8h</div>
                        </div>
                        <button class="btn btn-primary">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 w-105">
                    <article class="flex flex-col gap-2">
                        <i 
                            data-lucide="shield-check"
                            class="text-red-500 w-20 h-20 mb-4"
                        ></i>
                        <span class="font-bold text-2xl">Sécurité Linux</span>
                        <span class="text-xl">Protégez vos systèmes</span>
                        <div class="flex gap-3 mt-2 mb-2">
                            <div class="badge badge-outline badge-xl">18 leçons</div>
                            <div class="badge badge-outline badge-xl">6h</div>
                        </div>
                        <button class="btn btn-primary">Commencer</button>
                    </article>
                </div>
            </div>
        </div>
   </section>

   <div class="stats stats-vertical lg:stats-horizontal md:stats-horizontal shadow bg-base-100 lg:flex justify-center md:mx-30 lg:30 md:py-20">
        
            <div class="stat place-items-center">
                <div class="stat-figure text-primary">
                    <i data-lucide="users" class="w-12 h-12"></i>
                </div>
                <div class="stat-title">Utilisateurs Actifs</div>
                <div class="stat-value text-primary">31K+</div>
                <div class="stat-desc">En constante croissance</div>
            </div>
        

        <div class="stat place-items-center">
            <div class="stat-figure">
                <i data-lucide="book" class="w-12 h-12 text-secondary"></i>
            </div>
            <div class="stat-title">Cours disponibles</div>
            <div class="stat-value text-secondary">120+</div>
            <div class="stat-desc">Nouveaux chaque mois</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-figure">
                <i data-lucide="inbox" class="w-12 h-12 text-yellow-300"></i>
            </div>
            <div class="stat-title">Distributions</div>
            <div class="stat-value">25+</div>
            <div class="stat-desc">Toutes documentées</div>
        </div>
    </div>

    <section class="bg-base-200 py-20 px-5">
        <span class="flex justify-center text-4xl mb-1 font-bold">Ce qu'ils en disent</span>
        <span class="flex justify-center mb-5">Rejoignez des milliers d'apprenants satisfaits</span>
        <div class=" grid md:grid-cols-3 lg:grid-cols-3 gap-3">

        
            <div class="card bg-base-300 p-4 gap-5">
                <div class="flex gap-4 items-center">
                    <div class="rounded-full flex justify-center items-center bg-primary w-12 h-12 font-bold">AD</div>
                    <div class="flex flex-col">
                        <span class="font-bold">Aladji Mamoudou Talibe Diallo</span>
                        <span class="">Développeur</span>
                    </div>
                </div>
                <div>
                    <span>
                        "Excellente plateforme pour apprendre Linux.
                    </span>
                    <br>
                    <span>
                         Les cours sont clairs et progressifs. <br> J'ai pu passer d'Ubuntu à Arch en quelques mois!"
                    </span>
                </div>
                <div class="rating">
                    <div class="mask mask-star bg-yellow-300" aria-label="1"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="2 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="3 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="4 star" aria-current="true"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="5 star"></div>
                </div>
            </div>

            <div class="card bg-base-300 p-4 gap-5">
                <div class="flex gap-4 items-center">
                    <div class="rounded-full flex justify-center items-center bg-secondary w-12 h-12 font-bold">MT</div>
                    <div class="flex flex-col">
                        <span class="font-bold">Matar Thiam</span>
                        <span class="">Sysadmin</span>
                    </div>
                </div>
                <div>
                   <span class="">
                    "Les tutoriels sur l'administration système sont top. J'ai appris plein de commandes et bonnes pratiques que j'utilise au quotidien."
                   </span>
                </div>
                <div class="rating">
                    <div class="mask mask-star bg-yellow-300" aria-label="1"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="2 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="3 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="4 star" aria-current="true"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="5 star"></div>
                </div>
            </div>

            <div class="card bg-base-300 p-4 gap-5">
                <div class="flex gap-4 items-center">
                    <div class="rounded-full flex justify-center items-center bg-green-300 w-12 h-12 font-bold">MD</div>
                    <div class="flex flex-col">
                        <span class="font-bold">Mohamed Hassim Diatta</span>
                        <span class="">Etudiant</span>
                    </div>
                </div>
                <div>
                   <span class="">
                    "Parfait pour débuter! J'avais peur de Linux mais les explications sont simples. Maintenant j'utilise Ubuntu tous les jours."
                   </span>
                </div>
                <div class="rating">
                    <div class="mask mask-star bg-yellow-300" aria-label="1"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="2 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="3 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="4 star" aria-current="true"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="5 star"  aria-current="true"></div>
                </div>
            </div>
        </div>

        
        
    </section>

    <div class="flex flex-col p-2 mt-10 gap-3">
        <span class="font-bold text-4xl text-center">
            Prêt à commencer votre aventure Linux ?
        </span>
        <span class="text-center mt-5 text-xl">
            Rejoignez notre communauté et devenez un expert Linux
        </span>
        <div class="flex justify-center mt-6 gap-5">
            <button 
                class="btn bg-white text-primary text-xl gap-2 btn-xl"
            > 
                <i data-lucide="user-plus"></i>
                S'inscrire gratuitement
            </button>
            <button
                class="btn btn-outline btn-xl"
            >
                <i data-lucide="mail"></i>
                Newsletter
            </button>
        </div>

        <span class="text-center">Aucune carte bancaire requise • Accès immédiat</span>

    </div>

    <footer class="bg-base-200 py-15 flex justify-between justify-center items-center">
        <div class="mx-5">
            <a href="" class="mr-4 link">A propos</a>
            <a href="" class="mr-4 link">Contact</a>
            <a href="" class="mr-4 link">Mentions légales</a>
            <a href="" class="mr-4 link">Politique de confidentialité</a>
        </div>
        <div class="flex flex-col mx-5">
            <span class="font-bold text-blue-400">RichLabs-votre parcours linux</span>
            <span>Copyright &copy; 2026 - Tous droits réservés</span>
        </div>
    </footer>
    <script>
            lucide.createIcons();
    </script>

</body>
</html>