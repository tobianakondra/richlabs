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

    <!-- Hero Section -->
    <section class="flex flex-col justify-center items-center min-h-screen px-4 py-8">
        <div class="flex flex-col items-center gap-4 md:gap-6 max-w-6xl w-full">
            <span class="text-3xl md:text-4xl lg:text-5xl font-bold text-center">
                Explorer les Distributions Linux
            </span>
            <span class="text-center text-base md:text-lg lg:text-xl">
                Trouvez la distribution parfaite pour vos besoins
            </span>
            
            <div class="flex items-center gap-2 md:gap-3 mt-4">
                <i data-lucide="circle-question-mark" class="text-pink-500 w-5 h-5 md:w-6 md:h-6"></i>
                <span class="font-bold text-sm md:text-base">
                    Quelle distribution est faite pour vous ?
                </span>
            </div>
            
            <!-- Search Bar -->
            <div class="flex justify-center mt-4 items-center join w-full max-w-2xl">
                <input 
                    type="text"
                    class="input join-item flex-1"
                    placeholder="rechercher une distribution..."
                >
                <button class="btn btn-primary join-item">
                    <i data-lucide="search"></i>
                </button>
            </div>

            <!-- Filter Buttons -->
            <div class="grid grid-cols-2 md:flex justify-center mt-5 gap-2 md:gap-3 w-full max-w-2xl">
                <button class="btn btn-outline btn-sm md:btn-md">
                    <i data-lucide="funnel" class="w-4 h-4"></i>
                    Niveau
                </button>
                <button class="btn btn-outline btn-sm md:btn-md">
                    <i data-lucide="target" class="w-4 h-4"></i>
                    Usage
                </button>
                <button class="btn btn-outline btn-sm md:btn-md">
                    <i data-lucide="package" class="w-4 h-4"></i>
                    Gestionnaire
                </button>
                <button class="btn btn-outline btn-sm md:btn-md">
                    <i data-lucide="laptop-minimal" class="w-4 h-4"></i>
                    Bureau
                </button>
            </div>

            <!-- Stats -->
            <div class="stats stats-vertical lg:stats-horizontal shadow mt-8 w-full max-w-4xl">
                <div class="stat place-items-center">
                    <div class="stat-figure text-primary">
                        <i data-lucide="box" class="w-8 h-8 md:w-10 md:h-10"></i>
                    </div>
                    <div class="stat-title text-sm md:text-base">Distributions</div>
                    <div class="stat-value text-primary text-2xl md:text-4xl">+25</div>
                    <div class="stat-desc text-xs md:text-sm">Documentées</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-figure text-secondary">
                        <i data-lucide="users" class="w-8 h-8 md:w-10 md:h-10"></i>
                    </div>
                    <div class="stat-title text-sm md:text-base">utilisateurs</div>
                    <div class="stat-value text-secondary text-2xl md:text-4xl">50M+</div>
                    <div class="stat-desc text-xs md:text-sm">Dans le monde</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-figure text-secondary">
                        <div class="avatar avatar-online">
                            <div class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                                <img src="face.jpeg" alt="Richard" />
                            </div>
                        </div>
                    </div>
                    <div class="stat-value text-2xl md:text-4xl">90%</div>
                    <div class="stat-title text-xs md:text-sm">"users are satisfied"</div>
                    <div class="stat-desc text-secondary text-xs">Richard Founder of Richlabs</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pour débuter -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="star" class="text-green-500 w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour débuter</span>
        </div>

        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions idéales pour les nouveaux utilisateurs Linux
            </span>
        </div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
                <div class="card bg-base-200 p-6 gap-3">
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
                    <div class="flex justify-end gap-2">
                        <button class="btn btn-outline btn-sm">
                            <i
                                data-lucide="info"
                                class="h-5 w-5"
                            ></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm">
                            <i 
                                data-lucide="download"
                                class="h-5 w-5"
                            ></i>
                            Télécharger
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3">
                    <img 
                        src="https://cdn.simpleicons.org/linuxmint/87CF3E" 
                        alt="linux-miny-logo"
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
                    <div class="flex justify-end gap-2">
                        <button class="btn btn-outline btn-sm">
                            <i 
                                data-lucide="info"
                                class="h-5 w-5"
                            ></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm">
                            <i 
                                data-lucide="download"
                                class="h-5 w-5"
                            ></i>
                            Télécharger
                        </button>
                    </div>
                </div>

                <div class="card bg-base-200 p-6 gap-3">
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
                    <   span>Design élégant inspiré de macOS. Interface épurée et expérience utilisateur soignée.</span>
                    <div class="divider my-2"></div>
                    <div class="flex flex-col">
                        <span>Sortie: 2011</span>
                        <span>Paquets: APT (deb)</span>
                        <span>Bureau: Pantheon</span>
                    </div>
                    <div class="flex justify-end gap-2">
                        <button class="btn btn-outline btn-sm">
                            <i 
                                data-lucide="info"
                                class="h-5 w-5"
                            ></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm">
                            <i 
                                data-lucide="download"
                                class="h-5 w-5"
                            ></i>
                            Télécharger
                        </button>
                    </div>
                </div>
            </article>
    </section>  

    <!-- Pour les développeurs -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-200">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="code" class="text-primary w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour les développeurs</span>
        </div>

        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions optimisées pour le développement logiciel
            </span>
        </div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
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
                <div class="flex justify-end gap-2">
                        <button class="btn btn-outline btn-sm">
                            <i 
                                data-lucide="info"
                                class="h-5 w-5"
                            ></i>
                            Détails
                        </button>
                        <button class="btn btn-primary btn-sm">
                            <i 
                                data-lucide="download"
                                class="h-5 w-5"
                            ></i>
                            Télécharger
                        </button>
                </div>
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
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
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
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

        </article>
    </section>

    <!-- Pour la sécurité -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-100">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="shield" class="text-red-500 w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour la sécurité</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions spécialisées en cybersécurité et tests de pénétration
            </span>
        </div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transistion-all">
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
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="https://cdn.simpleicons.org/parrotsecurity/00D9FF" 
                    alt="kali-linux-logo"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Parrot OS</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Sécurité</div>
                    <div class="badge badge-neutral badge-xl">Pentest</div>
                </div>
                <span>Alternative à Kali, légère et performante. Orientée sécurité et vie privée avec de nombreux outils.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2013</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: MATE</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

        </article>
            
    </section>

    <!-- Pour l'OSINT -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-200">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="search" class="text-blue-500 w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour l'OSINT</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions spécialisées en renseignement open source et investigation
            </span>
        </div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="csi.png" 
                    alt="kali-linux-logo"
                    class="w-20 h-20 rounded-full"
                >
                <span class="text-2xl font-bold">CSI Linux</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermédiaire</div>
                    <div class="badge badge-neutral badge-xl">Sécurité</div>
                    <div class="badge badge-neutral badge-xl">Pentest</div>
                </div>
                <span>Distribution spécialisée en investigation numérique et OSINT avec outils préinstallés.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2019</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Xcfe</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

             <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="tracelabs.jpeg" 
                    alt="traceLabs"
                    class="w-20 h-20 rounded-full"
                >
                <span class="text-2xl font-bold">Trace Labs OSINT</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">Sécurité</div>
                    <div class="badge badge-neutral badge-xl">Pentest</div>
                </div>
                <span>VM spécialisée pour les enquêtes OSINT et la recherche de personnes disparues.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2020</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: Xcfe</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>
        </article>
    </section>

    <!-- Pour le gaming -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-100">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="gamepad-2" class="text-green-500 w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour le gaming</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions optimisées pour les jeux vidéo avec support GPU avancé.
            </span>
        </div>
        
        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="https://cdn.simpleicons.org/popos/48B9C7" 
                    alt="pop!_os"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Pop!_OS</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-success badge-xl">Débutant</div>
                    <div class="badge badge-neutral badge-xl">Gaming</div>
                    <div class="badge badge-neutral badge-xl">GPU</div>
                </div>
                <span>Excellent support GPU NVIDIA et AMD. Optimisée pour le gaming avec Steam et Proton.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2017</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: COSMIC</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="nobara.jpeg" 
                    alt="pop!_os"
                    class="w-20 h-20 rounded-full"
                >
                <span class="text-2xl font-bold">Nobara</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermédiaire</div>
                    <div class="badge badge-neutral badge-xl">Gaming</div>
                    <div class="badge badge-neutral badge-xl">GPU</div>
                </div>
                <span>Basée sur Fedora, optimisée pour le gaming et le streaming avec codecs préinstallés.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2022</span>
                    <span>Paquets: DNF (rpm)</span>
                    <span>Bureau: KDE/GNOME</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="https://cdn.simpleicons.org/garudalinux/0080FF" 
                    alt="pop!_os"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Garuda Linux</span>
                <div class="flex items-center gap-2">
                    <div class="badge badge-warning badge-2sm">Intermédiaire</div>
                    <div class="badge badge-neutral badge-2sm">Gaming</div>
                    <div class="badge badge-neutral badge-2sm">Performance</div>
                </div>
                <span>Basée sur Arch, avec optimisations gaming et interface moderne. Très performante.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2020</span>
                    <span>Paquets: DNF Pacman</span>
                    <span>Bureau: KDE/GNOME</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>
        </article>
    </section>

    <!-- Pour la sécurité défensive -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-200">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="shield-check" class="text-success w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Pour la sécurité défensive</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Distributions pour la défense, le monitoring et l'analyse de sécurité.
            </span>
        </div>
        
        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
            <div class="card bg-base-100 p-6 gap-3 shadow-xl hover:shadow-2xl hover:-translate-y-2">
                <img 
                    src="logo-so-onion-light.svg" 
                    alt="Security Onion"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Security Onion</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-error badge-xl">Avancé</div>
                    <div class="badge badge-neutral badge-xl">IDS/IPS</div>
                    <div class="badge badge-neutral badge-xl">Monitoring</div>
                </div>
                <span>Plateforme complète pour la détection d'intrusions et le monitoring réseau.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2008</span>
                    <span>Paquets: APT (deb)</span>
                    <span>Bureau: XFCE</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>

            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="https://cdn.simpleicons.org/linux/FCC624" 
                    alt="Wazuh"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Wazuh</span>
                <div class="flex items-center gap-3">
                    <div class="badge badge-warning badge-xl">Intermédiaire</div>
                    <div class="badge badge-neutral badge-xl">SIEM</div>
                    <div class="badge badge-neutral badge-xl">XDR</div>
                </div>
                <span>Plateforme de sécurité unifiée pour la détection de menaces et conformité.</span>
                <div class="divider my-2"></div>
                <div class="flex flex-col">
                    <span>Sortie: 2015</span>
                    <span>Paquets: APT/YUM</span>
                    <span>Bureau: Server</span>
                </div>
                <div class="flex justify-end gap-2">
                    <button class="btn btn-outline btn-sm">
                        <i 
                            data-lucide="info"
                            class="h-5 w-5"
                        ></i>
                        Détails
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i 
                            data-lucide="download"
                            class="h-5 w-5"
                        ></i>
                        Télécharger
                    </button>
                </div>
            </div>
        </article>
    </section>

    <!-- Histoire des distributions -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="clock-3" class="text-primary w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Histoire des distributions</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                L'évolution de l'écosystème Linux à travers le temps
            </span>
        </div>

        <div class="max-w-4xl mx-auto">
                <ul class="timeline timeline-vertical">
                    <li>
                        <div class="timeline-start timeline-box">
                            <div class="text-xs md:text-sm">
                                <span class="font-bold text-base md:text-xl">
                                    1993 - Debian <br>
                                </span>
                                Ian Murdock crée Debian, l'une des plus anciennes distributions encore actives.
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full bg-primary w-6 h-6 md:w-7 md:h-7 flex justify-center"></div>
                        <hr class="bg-primary" />
                    </li>
                    
                    <li>
                        <hr class="bg-primary" />
                        <div class="timeline-middle rounded-full bg-primary w-6 h-6 md:w-7 md:h-7 flex justify-center"></div>
                        <div class="timeline-end timeline-box">
                            <div class="text-xs md:text-sm">
                                <span class="font-bold text-base md:text-xl">
                                    2002 - Arch Linux <br>
                                </span>
                                Judd Vinet lance Arch Linux, basée sur le principe KISS (Keep It Simple, Stupid).
                            </div>
                        </div>
                        <hr class="bg-primary" />
                    </li>
                    
                    <li>
                        <hr class="bg-primary" />
                        <div class="timeline-start timeline-box">
                            <div class="text-xs md:text-sm">
                                <span class="text-base md:text-xl font-bold">
                                    2004 - Ubuntu <br>
                                </span>
                                Mark Shuttleworth fonde Ubuntu, rendant Linux accessible au grand public.
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full bg-primary w-6 h-6 md:w-7 md:h-7"></div>
                        <hr class="bg-primary" />
                    </li>
                    
                    <li>
                        <hr class="bg-primary" />
                        <div class="timeline-end timeline-box">
                            <div>
                                <span class="text-base md:text-xl font-bold">
                                    2006 - Linux Mint <br>
                                </span> 
                                <span class="text-xs md:text-sm">
                                    Création de Linux Mint, basée sur Ubuntu avec une interface plus traditionnelle.
                                </span>
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full w-6 h-6 md:w-7 md:h-7 bg-primary"></div>
                        <hr class="bg-primary" />
                    </li>
                    
                    <li>
                        <hr class="bg-primary" />
                        <div class="timeline-start timeline-box">
                            <div class="text-xs md:text-sm">
                                <span class="text-base md:text-xl font-bold">
                                    2013 - Kali Linux <br>
                                </span>
                                Offensive Security lance Kali Linux, successeur de BackTrack pour la sécurité.
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full bg-primary w-6 h-6 md:w-7 md:h-7"></div>
                        <hr class="bg-primary" />
                    </li>
                    
                    <li>
                        <hr class="bg-primary" />
                        <div class="timeline-end timeline-box">
                            <div>
                                <span class="text-base md:text-xl font-bold">
                                    2017 - Pop!_OS <br>
                                </span> 
                                <span class="text-xs md:text-sm">
                                    System76 développe Pop!_OS, optimisée pour les créateurs et développeurs.
                                </span>
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full w-6 h-6 md:w-7 md:h-7 bg-primary"></div>
                    </li>
                </ul>
            </div>
    </section>

    <!-- Arbre généalogique -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-200">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="git-branch" class="text-primary w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Arbre généalogique</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Les relations entre les principales distributions Linux
            </span>
        </div>

        <div class="bg-base-100 card p-4 md:p-6 lg:p-8">
            <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-12">
                <!-- Debian Family -->
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-4">
                        <img 
                            src="https://cdn.simpleicons.org/debian/A81D33" 
                            alt="debian-logo"
                            class="w-10 h-10 md:w-12 md:h-12"
                        >
                        <span class="text-lg md:text-xl font-bold">Debian</span>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/ubuntu/E95420" 
                                alt="ubuntu"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Ubuntu</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-8 md:ml-12 mt-3">
                        <i data-lucide="corner-down-right" class="text-purple-400 w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/linuxmint/87CF3E" 
                                alt="mint"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Linux Mint</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-8 md:ml-12 mt-3">
                        <i data-lucide="corner-down-right" class="text-purple-400 w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/popos/48B9C7" 
                                alt="popos"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Pop!_OS</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-8 md:ml-12 mt-3">
                        <i data-lucide="corner-down-right" class="text-purple-400 w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/elementary/64BAFF" 
                                alt="elementary"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Elementary OS</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/kalilinux/557C94" 
                                alt="kali"
                                class="w-5 h-5 md:w-6 md:h-6"
                            >
                            <span class="text-sm md:text-base">Kali Linux</span>
                        </div>
                    </div>
                </div>

                <!-- Red Hat Family -->
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-4">
                        <img 
                            src="https://cdn.simpleicons.org/redhat/EE0000" 
                            alt="redhat"
                            class="w-8 h-8 md:w-10 md:h-10"
                        >
                        <span class="text-lg md:text-xl font-bold">Red Hat</span>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/fedora/51A2DA" 
                                alt="fedora"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Fedora</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/centos/262577" 
                                alt="centos"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">CentOS</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/rockylinux/10B981" 
                                alt="rocky"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Rocky Linux</span>
                        </div>
                    </div>
                </div>

                <!-- Arch Family -->
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-4">
                        <img 
                            src="https://cdn.simpleicons.org/archlinux/1793D1" 
                            alt="arch"
                            class="w-8 h-8 md:w-10 md:h-10"
                        >
                        <span class="text-lg md:text-xl font-bold">Arch Linux</span>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/manjaro/35BF5C" 
                                alt="manjaro"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Manjaro</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 ml-4 md:ml-6 mt-3">
                        <i data-lucide="corner-down-right" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/endeavouros/7F7FFF" 
                                alt="endeavour"
                                class="w-4 h-4 md:w-5 md:h-5"
                            >
                            <span class="text-sm md:text-base">Endeavour OS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques et popularité -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-100">
        <div class="flex items-center gap-2 mb-4">
            <i data-lucide="chart-no-axes-column-increasing" class="text-primary w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Statistiques et popularité</span>
        </div>
        
        <div class="mb-6 md:mb-8">
            <span class="text-sm md:text-base">
                Les distributions les plus utilisées en 2026
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 max-w-6xl mx-auto">
            <!-- Top 10 -->
            <div class="card bg-base-200 p-4 md:p-6 gap-4 md:gap-5">
                <span class="font-bold text-lg md:text-xl">Top 10 des distributions</span>
                
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Ubuntu</span>
                        <span class="font-bold text-xs md:text-sm">35%</span>
                    </div>
                    <progress class="progress progress-primary w-full" value="35" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Debian</span>
                        <span class="font-bold text-xs md:text-sm">18%</span>
                    </div>
                    <progress class="progress progress-secondary w-full" value="18" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Fedora</span>
                        <span class="font-bold text-xs md:text-sm">12%</span>
                    </div>
                    <progress class="progress progress-warning w-full" value="12" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Arch Linux</span>
                        <span class="font-bold text-xs md:text-sm">10%</span>
                    </div>
                    <progress class="progress progress-info w-full" value="10" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Linux Mint</span>
                        <span class="font-bold text-xs md:text-sm">8%</span>
                    </div>
                    <progress class="progress progress-success w-full" value="8" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Manjaro</span>
                        <span class="font-bold text-xs md:text-sm">6%</span>
                    </div>
                    <progress class="progress progress-error w-full" value="6" max="100"></progress>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="font-bold text-xs md:text-sm">Autres</span>
                        <span class="font-bold text-xs md:text-sm">11%</span>
                    </div>
                    <progress class="progress progress-neutral w-full" value="11" max="100"></progress>
                </div>
            </div>

            <!-- Utilisation par secteurs -->
            <div class="card bg-base-200 p-4 md:p-6 gap-4 md:gap-5">
                <span class="font-bold text-lg md:text-xl">Utilisation par secteurs</span>
                
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-2 justify-between items-center">
                            <div class="flex gap-2 items-center">
                                <i data-lucide="server" class="text-primary w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="font-bold text-xs md:text-sm">Server</span>
                            </div>
                            <span class="font-bold text-xs md:text-sm">78%</span>
                        </div>
                        <progress class="progress progress-primary w-full" value="78" max="100"></progress>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex gap-2 justify-between items-center">
                            <div class="flex gap-2 items-center">
                                <i data-lucide="cloud" class="text-secondary w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="font-bold text-xs md:text-sm">Cloud</span>
                            </div>
                            <span class="font-bold text-xs md:text-sm">92%</span>
                        </div>
                        <progress class="progress progress-secondary w-full" value="92" max="100"></progress>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex gap-2 justify-between items-center">
                            <div class="flex gap-2 items-center">
                                <i data-lucide="laptop-minimal" class="text-warning w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="font-bold text-xs md:text-sm">Desktop</span>
                            </div>
                            <span class="font-bold text-xs md:text-sm">3%</span>
                        </div>
                        <progress class="progress progress-warning w-full" value="3" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Questions fréquentes -->
    <section class="px-4 md:px-8 lg:px-16 py-8 md:py-12 lg:py-16 bg-base-200">
        <div class="flex items-center gap-2 mb-6 md:mb-8">
            <i data-lucide="circle-question-mark" class="text-primary w-10 h-10 md:w-12 md:h-12"></i>
            <span class="font-bold text-2xl md:text-3xl">Questions fréquentes</span>
        </div>

        <div class="max-w-4xl mx-auto space-y-3">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">
                Quelle distribution choisir pour débuter ?
            </div>
            <div class="collapse-content text-sm">
                Pour débuter, nous recommandons Ubuntu ou Linux Mint. Ces distributions sont conviviales, bien documentées et disposent d'une grande communauté pour vous aider.
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">
                Quelle est la difference entre Ubuntu et Linux Mint
            </div>
            <div class="collapse-content text-sm">
                Ubuntu est basée sur Debian mais propose des versions plus récentes des logiciels et un cycle de release fixe (tous les 6 mois). Debian privilégie la stabilité avec des versions moins fréquentes.
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">
                Puis je installer Linux à coté de Windows ?
            </div>
            <div class="collapse-content text-sm">
                Oui, c'est ce qu'on appelle le dual-boot. Vous pourrez choisir au démarrage quel système utiliser. La plupart des distributions proposent cette option lors de l'installation.
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">
                Qu'est-ce qu'une distribution rolling release ?
            </div>
            <div class="collapse-content text-sm">
                Une rolling release (comme Arch Linux) reçoit des mises à jour continues sans versions majeures. Vous avez toujours les derniers logiciels, mais cela peut être moins stable.
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">
                Linux est-il vraiment gratuit ?
            </div>
            <div class="collapse-content text-sm">
                Oui, Linux est libre et gratuit. Vous pouvez télécharger, installer et utiliser n'importe quelle distribution sans payer. Certaines entreprises proposent du support payant, mais le système reste gratuit.
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
            <input 
                type="radio"
                name="my-accordion-3"
            />
            <div class="collapse-title font-semibold">               
                Mes jeux Windows fonctionneront-ils sur Linux ?
            </div>
            <div class="collapse-content text-sm">
                Grâce à Steam Proton et Wine, de nombreux jeux Windows fonctionnent sur Linux. Pop!_OS et Manjaro sont particulièrement optimisées pour le gaming.
            </div>
        </div>
    </section>

    <section class="flex justify-center p-8">
        <div class="grid grid-cols gap-2">
            <span class="font-bold text-3xl text-center">
                Prêt à essayer Linux ?
            </span>
            <span class="mt-3">
                Téléchargez votre distribution et commencez votre aventure Linux aujourd'hui
            </span>
            <div class="grid grid-cols md:flex lg:flex md:gap-3 lg:gap-5 mt-4 ">
                <button 
                    class="btn btn-neutral btn-lg"
                >
                    <i data-lucide="download"></i>
                    Télécharger Ubuntu
                </button>
                <button 
                    class="btn btn-outline hover:text-pink-500 hover:bg-white btn-lg"
                >
                    <i data-lucide="book-open"></i>
                    Guide d'installation
                </button>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script>
            lucide.createIcons();
    </script>
</body>
</html>