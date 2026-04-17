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
    <?php
    session_start();
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: /auth/login.php");
        exit;
    }
    ?>

    <?php include 'header.php'; ?>

    <div class="flex flex-col items-center justify-center min-h-screen px-4">
        <!-- Terminal -->
        <div
            class="flex flex-col bg-zinc-500 border border-zinc-700 p-3 rounded-xl gap-2 mt-10 md:mt-20 lg:mt-32 w-full max-w-2xl">
            <div class="flex gap-2">
                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                <span class="w-3 h-3 rounded-full bg-green-500"></span>
            </div>
            <div class="flex ml-2 md:ml-4 mt-3">
                <span class="font-mono font-bold text-sm md:text-base lg:text-xl">~user@richlabs:~</span>
            </div>
            <div class="flex flex-col ml-2 md:ml-4 p-2 pb-5 overflow-x-auto">
                <div class="flex flex-wrap items-center">
                    <span class="text-green-500 font-mono text-sm md:text-base mr-2">$</span>
                    <span class="text-green-400 font-mono text-sm md:text-base lg:text-xl">sudo apt update</span>
                </div>
                <div class="flex flex-wrap items-center">
                    <span class="text-yellow-400 font-mono text-xs md:text-sm mr-2">></span>
                    <span class="font-mono text-yellow-400 text-xs md:text-sm break-all">Hit:1
                        http://archive.ubuntu.com/ubuntu jammy InRelease</span>
                </div>
                <div class="flex flex-wrap items-center">
                    <span class="text-yellow-300 font-mono text-xs md:text-sm mr-2">></span>
                    <span class="font-mono text-yellow-300 text-xs md:text-sm break-all">Get:2
                        http://security.ubuntu.com/ubuntu jammy-security InRelease</span>
                </div>
                <div class="flex flex-wrap items-center">
                    <span class="text-blue-400 font-mono text-xs md:text-sm mr-2">></span>
                    <span class="font-mono text-blue-300 text-xs md:text-sm">Reading package lists... Done</span>
                </div>
                <div class="flex items-center">
                    <span class="text-red-300 font-mono animate-pulse text-sm md:text-base mr-2">$</span>
                    <span class="font-mono text-red-300">_</span>
                </div>
            </div>
        </div>

        <!-- Hero Text -->
        <div class="flex flex-col mt-8 md:mt-16 lg:mt-20 text-center px-4 gap-2 max-w-4xl">
            <span class="text-base md:text-lg lg:text-xl">
                Maîtrisez les distributions Linux avec des cours pratiques, des tutoriels interactifs et une communauté
                passionnée
            </span>

            <!-- Buttons -->
            <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-4 mt-6">
                <button class="btn btn-primary w-full md:w-auto text-base md:text-lg">
                    <i data-lucide="rocket"></i>
                    Commencer gratuitement
                </button>
                <button class="btn btn-neutral w-full md:w-auto text-base md:text-lg">
                    <i data-lucide="play"></i>
                    Voir la démo
                </button>
            </div>
        </div>

        <!-- Why Linux -->
        <div class="flex flex-col mt-12 md:mt-20 lg:mt-32 gap-3 text-center px-4">
            <span class="text-2xl md:text-3xl lg:text-4xl font-bold">
                Pourquoi apprendre Linux ?
            </span>
            <span class="text-base md:text-lg lg:text-xl max-w-3xl mx-auto">
                Linux est partout : serveurs, cloud, IoT, smartphones. Développez des compétences recherchées
            </span>
        </div>
    </div>

    <!-- Features Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4 mt-8 max-w-7xl mx-auto">
        <div
            class="flex flex-col justify-center items-center p-6 gap-3 bg-base-200 rounded-xl hover:-translate-y-2 transition-all">
            <i data-lucide="lock-open" class="w-16 h-16 md:w-20 md:h-20 text-pink-400"></i>
            <span class="text-center text-lg md:text-xl font-bold mt-2">Open Source</span>
            <span class="text-center text-sm md:text-base">Gratuit, libre et personnalisable à l'infini</span>
        </div>

        <div
            class="flex flex-col justify-center items-center p-6 gap-3 bg-base-200 rounded-xl hover:-translate-y-2 transition-all">
            <i data-lucide="shield-check" class="w-16 h-16 md:w-20 md:h-20 text-green-300"></i>
            <span class="text-center text-lg md:text-xl font-bold mt-2">Sécurité</span>
            <span class="text-center text-sm md:text-base">Architecture robuste et mises à jour régulières</span>
        </div>

        <div
            class="flex flex-col justify-center items-center p-6 gap-3 bg-base-200 rounded-xl hover:-translate-y-2 transition-all">
            <i data-lucide="zap" class="w-16 h-16 md:w-20 md:h-20 text-yellow-400"></i>
            <span class="text-center text-lg md:text-xl font-bold mt-2">Performance</span>
            <span class="text-center text-sm md:text-base">Rapide, léger et optimisé pour tous les usages</span>
        </div>

        <div
            class="flex flex-col justify-center items-center p-6 gap-3 bg-base-200 rounded-xl hover:-translate-y-2 transition-all">
            <i data-lucide="briefcase" class="w-16 h-16 md:w-20 md:h-20 text-green-400"></i>
            <span class="text-center text-lg md:text-xl font-bold mt-2">Carrière</span>
            <span class="text-center text-sm md:text-base">Compétences très demandées sur le marché</span>
        </div>
    </div>

    <!-- Distributions Section -->
    <section class="bg-base-200 mt-12 md:mt-20 lg:mt-32 p-4 md:p-8 lg:p-12">
        <span class="text-3xl md:text-4xl lg:text-5xl flex justify-center font-bold text-center">
            Distributions populaires
        </span>
        <span class="flex justify-center mt-3 text-center text-sm md:text-base lg:text-lg px-4">
            Découvrez les distributions Linux les plus utilisées et trouvez celle qui vous correspond
        </span>

        <article
            class="px-4 py-8 md:py-12 lg:py-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-7xl mx-auto">
            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="ubuntu-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Ubuntu</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-success badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Serveur</div>
                </div>
                <span>La distribution la plus populaire, idéale pour débuter avec Linux. Interface intuitive et grande
                    communauté.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2004</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: GNOME</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/fedora/51A2DA" alt="fedora-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Fedora</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermediare</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">Dev</div>
                </div>
                <span>Distribution innovante sponsorisée par Red Hat. Toujours à la pointe des dernières technologies
                    Linux.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2003</span>
                    <span>Paquets: DNF (rpm)</span>
                    <span>Bureau: GNOME</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/debian/A81D33" alt="debian-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Debian</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-info badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Serveur</div>
                    <div class="badge badge-neutral badge-xl">Stable</div>
                </div>
                <span>La distribution universelle. Extrêmement stable et fiable, base de nombreuses autres
                    distributions.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 1993</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Multiple</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/archlinux/1793D1" alt="arch-linux-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Arch Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                    <div class="badge badge-neutral badge-xl">DIY</div>
                </div>
                <span>Pour les utilisateurs expérimentés. Rolling release avec contrôle total et documentation
                    exceptionnelle.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2002</span>
                    <span>Paquets: Pacman</span>
                    <span>Bureau: A choisir</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/linuxmint/87CF3E" alt="linux-mint-logo" class="w-20 h-20">
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
                <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="kali-linux-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Kali Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Sécurité</div>
                    <div class="badge badge-neutral badge-xl">Pentest</div>
                </div>
                <span>Spécialisée en sécurité informatique et tests de pénétration. Plus de 600 outils
                    préinstallés.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2013</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Xcfe</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/popos/48B9C7" alt="pop-os-logo" class="w-20 h-20">
                <span class="text-2xl font-bold">Pop!_OS</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-secondary badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Design</div>
                    <div class="badge badge-neutral badge-xl">Desktop</div>
                </div>
                <span>Créée par System76. Optimisée pour le gaming et le développement avec support GPU
                    excellent.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2011</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Cosmic</span>
                </div>
                <button class="btn btn-primary">Découvrir</button>
            </div>

            <div class="card bg-base-100 p-6 gap-3">
                <img src="https://cdn.simpleicons.org/manjaro/35BF5C" alt="manjaro-logo" class="w-20 h-20">
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
                <img src="https://cdn.simpleicons.org/elementary/64BAFF" alt="elementary-os-logo" class="w-20 h-20">
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
                <img src="https://cdn.simpleicons.org/rockylinux/10B981" alt="rocky-linux-logo" class="w-20 h-20">
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

    <!-- How it works -->
    <main class="bg-base-100 py-12 md:py-16 lg:py-20 px-4 md:px-8 lg:px-16">
        <h1 class="text-3xl md:text-4xl lg:text-5xl text-center mb-2 font-bold">Comment ça marche</h1>
        <p class="text-base md:text-lg lg:text-xl text-center">Un parcours simple et progressif pour devenir expert
            Linux</p>

        <!-- Timeline - Vertical on mobile, horizontal on desktop -->
        <ul class="timeline timeline-vertical lg:timeline-horizontal mt-8 md:mt-10 max-w-6xl mx-auto overflow-x-auto">
            <li>
                <div class="timeline-start timeline-box gap-1 max-w-xs">
                    <div class="flex gap-1 items-center">
                        <i data-lucide="search" class="text-pink-500 w-5 h-5"></i>
                        <span class="font-bold text-base md:text-lg lg:text-xl">Choisir une distro</span>
                    </div>
                    <span class="text-xs md:text-sm lg:text-base">Explorez et sélectionnez la distribution adaptée à vos
                        besoins</span>
                </div>
                <div class="timeline-middle">
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-primary flex items-center justify-center text-sm md:text-base">
                        1</div>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div
                    class="timeline-middle rounded-full bg-primary flex justify-center items-center w-8 h-8 md:w-10 md:h-10 text-sm md:text-base">
                    2</div>
                <div class="timeline-end timeline-box max-w-xs">
                    <div class="flex gap-1 items-center">
                        <i data-lucide="graduation-cap" class="text-pink-300 w-5 h-5"></i>
                        <span class="font-bold text-base md:text-lg lg:text-xl">Suivre les cours</span>
                    </div>
                    <span class="text-xs md:text-sm lg:text-base">Apprenez avec des tutoriels vidéo et des exercices
                        pratiques</span>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div
                    class="flex justify-center items-center rounded-full bg-primary timeline-middle w-8 h-8 md:w-10 md:h-10 text-sm md:text-base">
                    3</div>
                <div class="timeline-start timeline-box max-w-xs">
                    <div class="flex gap-1 items-center">
                        <i data-lucide="code" class="text-pink-300 w-5 h-5"></i>
                        <span class="font-bold text-base md:text-lg lg:text-xl">Pratiquer</span>
                    </div>
                    <span class="text-xs md:text-sm lg:text-base">Mettez en pratique dans des environnements virtuels
                        sécurisés</span>
                </div>
                <hr class="bg-primary">
            </li>
            <li>
                <hr class="bg-primary">
                <div
                    class="timeline-middle flex items-center justify-center rounded-full w-8 h-8 md:w-10 md:h-10 bg-primary text-sm md:text-base">
                    4</div>
                <div class="timeline-end timeline-box max-w-xs">
                    <div class="flex gap-1 items-center">
                        <i data-lucide="award" class="text-pink-400 w-5 h-5"></i>
                        <span class="font-bold text-base md:text-lg lg:text-xl">Certifier</span>
                    </div>
                    <span class="text-xs md:text-sm lg:text-base">Obtenez des certificats reconnus pour valoriser vos
                        compétences</span>
                </div>
            </li>
        </ul>
    </main>

    <!-- Courses Section -->
    <section class="py-12 md:py-16 lg:py-20 bg-base-200 px-4">
        <div class="flex flex-col gap-3 md:gap-5 max-w-7xl mx-auto">
            <div class="flex flex-col gap-3 text-center">
                <h1 class="text-3xl md:text-4xl font-bold">Cours disponibles</h1>
                <span class="text-base md:text-lg lg:text-xl">Des formations complètes pour tous les niveaux</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">
                <div class="card bg-base-100 p-6 md:p-8 w-full">
                    <article class="flex flex-col gap-2">
                        <i data-lucide="book-open-check" class="text-pink-300 w-16 h-16 md:w-20 md:h-20 mb-4"></i>
                        <span class="font-bold text-lg md:text-xl">Introduction à Linux</span>
                        <span class="text-sm md:text-base">Les bases essentielles pour débuter</span>
                        <div class="flex gap-3 mt-2 mb-2 flex-wrap">
                            <div class="badge badge-outline badge-lg md:badge-xl">12 leçons</div>
                            <div class="badge badge-outline badge-lg md:badge-xl">3h</div>
                        </div>
                        <button class="btn btn-primary w-full">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 md:p-8 w-full">
                    <article class="flex flex-col gap-2">
                        <i data-lucide="terminal" class="text-green-300 w-16 h-16 md:w-20 md:h-20 mb-4"></i>
                        <span class="font-bold text-lg md:text-xl">Ligne de Commande</span>
                        <span class="text-sm md:text-base">Maîtrisez le terminal Linux</span>
                        <div class="flex gap-3 mt-2 mb-2 flex-wrap">
                            <div class="badge badge-outline badge-lg md:badge-xl">20 leçons</div>
                            <div class="badge badge-outline badge-lg md:badge-xl">5h</div>
                        </div>
                        <button class="btn btn-primary w-full">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 md:p-8 w-full">
                    <article class="flex flex-col gap-2">
                        <i data-lucide="database" class="text-yellow-300 w-16 h-16 md:w-20 md:h-20 mb-4"></i>
                        <span class="font-bold text-lg md:text-xl">Administration Système</span>
                        <span class="text-sm md:text-base">Gérez serveurs et services</span>
                        <div class="flex gap-3 mt-2 mb-2 flex-wrap">
                            <div class="badge badge-outline badge-lg md:badge-xl">25 leçons</div>
                            <div class="badge badge-outline badge-lg md:badge-xl">8h</div>
                        </div>
                        <button class="btn btn-primary w-full">Commencer</button>
                    </article>
                </div>

                <div class="card bg-base-100 p-6 md:p-8 w-full">
                    <article class="flex flex-col gap-2">
                        <i data-lucide="shield-check" class="text-red-500 w-16 h-16 md:w-20 md:h-20 mb-4"></i>
                        <span class="font-bold text-lg md:text-xl">Sécurité Linux</span>
                        <span class="text-sm md:text-base">Protégez vos systèmes</span>
                        <div class="flex gap-3 mt-2 mb-2 flex-wrap">
                            <div class="badge badge-outline badge-lg md:badge-xl">18 leçons</div>
                            <div class="badge badge-outline badge-lg md:badge-xl">6h</div>
                        </div>
                        <button class="btn btn-primary w-full">Commencer</button>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <div
        class="stats stats-vertical lg:stats-horizontal shadow bg-base-100 w-full max-w-6xl mx-auto my-8 md:my-12 lg:my-20">
        <div class="stat place-items-center">
            <div class="stat-figure text-primary">
                <i data-lucide="users" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div class="stat-title text-sm md:text-base">Utilisateurs Actifs</div>
            <div class="stat-value text-primary text-2xl md:text-4xl">31K+</div>
            <div class="stat-desc text-xs md:text-sm">En constante croissance</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-figure">
                <i data-lucide="book" class="w-10 h-10 md:w-12 md:h-12 text-secondary"></i>
            </div>
            <div class="stat-title text-sm md:text-base">Cours disponibles</div>
            <div class="stat-value text-secondary text-2xl md:text-4xl">120+</div>
            <div class="stat-desc text-xs md:text-sm">Nouveaux chaque mois</div>
        </div>

        <div class="stat place-items-center">
            <div class="stat-figure">
                <i data-lucide="inbox" class="w-10 h-10 md:w-12 md:h-12 text-yellow-300"></i>
            </div>
            <div class="stat-title text-sm md:text-base">Distributions</div>
            <div class="stat-value text-2xl md:text-4xl">25+</div>
            <div class="stat-desc text-xs md:text-sm">Toutes documentées</div>
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
                        "Les tutoriels sur l'administration système sont top. J'ai appris plein de commandes et bonnes
                        pratiques que j'utilise au quotidien."
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
                        "Parfait pour débuter! J'avais peur de Linux mais les explications sont simples. Maintenant
                        j'utilise Ubuntu tous les jours."
                    </span>
                </div>
                <div class="rating">
                    <div class="mask mask-star bg-yellow-300" aria-label="1"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="2 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="3 star"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="4 star" aria-current="true"></div>
                    <div class="mask mask-star bg-yellow-300" aria-label="5 star" aria-current="true"></div>
                </div>
            </div>
        </div>



    </section>

    <!-- CTA Final -->
    <div class="flex flex-col p-4 md:p-8 mt-8 md:mt-12 lg:mt-16 gap-3 md:gap-5 max-w-4xl mx-auto text-center">
        <span class="font-bold text-2xl md:text-3xl lg:text-4xl">
            Prêt à commencer votre aventure Linux ?
        </span>
        <span class="mt-2 md:mt-5 text-base md:text-lg lg:text-xl">
            Rejoignez notre communauté et devenez un expert Linux
        </span>
        <div class="flex flex-col md:flex-row justify-center mt-4 md:mt-6 gap-3 md:gap-5">
            <button class="btn bg-white text-primary text-base md:text-lg lg:text-xl gap-2 w-full md:w-auto">
                <i data-lucide="user-plus"></i>
                S'inscrire gratuitement
            </button>
            <button class="btn btn-outline text-base md:text-lg lg:text-xl w-full md:w-auto">
                <i data-lucide="mail"></i>
                Newsletter
            </button>
        </div>
        <span class="text-center text-xs md:text-sm">Aucune carte bancaire requise • Accès immédiat</span>
    </div>

    <!-- Footer -->
    <footer class="bg-base-200 py-8 md:py-12 lg:py-15 px-4">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 md:gap-4 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-3 md:gap-4 text-center md:text-left">
                <a href="" class="link text-sm md:text-base">A propos</a>
                <a href="" class="link text-sm md:text-base">Contact</a>
                <a href="" class="link text-sm md:text-base">Mentions légales</a>
                <a href="" class="link text-sm md:text-base">Politique de confidentialité</a>
            </div>
            <div class="flex flex-col text-center md:text-right">
                <span class="font-bold text-blue-400 text-sm md:text-base">RichLabs - votre parcours linux</span>
                <span class="text-xs md:text-sm">Copyright &copy; 2026 - Tous droits réservés</span>
            </div>
        </div>
    </footer>
    <script>
        lucide.createIcons();
    </script>

</body>

</html>