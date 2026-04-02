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

    <section class="grid justify-center min-h-screen">
        <div class="grid justify-center items-center gap-3">
            <div class="grid gap-3">
                <span class="text-5xl font-bold">
                    Explorer les Distributions Linux
                </span>
                <span class="text-center text-xl">
                    Trouvez la distribution parfaite pour vos besoins
                </span>
                <div class="flex gap-3 mt-4">
                    <i 
                        data-lucide="circle-question-mark"
                        class="text-pink-500"
                    ></i>
                    <span class="font-bold">
                        Quelle distribution est faite pour vous ?
                    </span>
                </div>
                <div class="flex justify-center mt-4 items-center join">
                    <input 
                        type="text"
                        class="input"
                        placeholder="rechercher une distribution..."
                    >
                    <button 
                        class="btn btn-primary join-item"
                    >
                        <i data-lucide="search"></i>
                    </button>
                </div>

                <div class="flex justify-center mt-5 gap-5">
                    <button class="btn btn-outline">
                        <i data-lucide="funnel"></i>
                        Niveau
                    </button>
                    <button class="btn btn-outline">
                        <i data-lucide="target"></i>
                        Usage
                    </button>
                    <button class="btn btn-outline">
                        <i 
                            data-lucide="package"
                        ></i>
                        Gestionnaire
                    </button>
                    <button class="btn btn-outline">
                        <i
                            data-lucide="laptop-minimal"
                        ></i>
                        Bureau
                    </button>
                </div>

                <div class="stats stats-vertical lg:stats-horizontal shadow mt-5">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i data-lucide="box"></i>
                        </div>
                        <div class="stat-title">Distributions</div>
                        <div class="stat-value text-primary">+25</div>
                        <div class="stat-desc">Documentées</div>
                    </div>

                    <div class="stat">
                        <div class="stat-figure text-secondary">
                            <i data-lucide="users"></i>
                        </div>
                        <div class="stat-title">utilisateurs</div>
                        <div class="stat-value text-secondary">50M+</div>
                        <div class="stat-desc">Dans le monde</div>
                    </div>

                    <div class="stat">
                      <div class="stat-figure text-secondary">
                        <div class="avatar avatar-online">
                          <div class="w-16 rounded-full">
                            <img src="face.jpeg"
                                class=""
                            />
                          </div>
                        </div>
                      </div>
                      <div class="stat-value">90%</div>
                      <div class="stat-title">"users are satisfied"</div>
                      <div class="stat-desc text-secondary">Richard Founder of Richlabs</div>
                    </div>
            </div>
            
            
        </div>

    </section>

    <section class="lg:px-65 p-10 md:p-10 gap-5">
            <div class="flex items-center gap-2">
                <i
                    data-lucide="star"
                    class="text-green-500 w-12 h-12"
                ></i>
                <span class="font-bold text-3xl">
                    Pour débuter
                </span>
            </div>

            <div class="mt-5 ml-5">
                <span class="">
                    Distributions idéales pour les nouveaux utilisateurs Linux
                </span>
            </div>

            <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-200">
        <div class="flex items-center gap-2">
            <i
                data-lucide="code"
                class="text-primary w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
                Pour les développeurs
            </span>
        </div>

        <div>
            Distributions optimisées pour le développement logiciel
        </div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-100">
        <div class="flex items-center gap-2">
            <i
                data-lucide="shield"
                class="text-red-500 w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
                Pour la sécurité
            </span>
        </div>
        </div class="mt-4 ml-5">
                Distributions spécialisées en cybersécurité et tests de pénétration
        <div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-200">
         <div class="flex items-center gap-2">
            <i
                data-lucide="search"
                class="text-blue-500 w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
                Pour l'OSINT
            </span>
        </div>
        </div class="mt-4 ml-5">
                Distributions spécialisées en renseignement open source et investigation
        <div>

        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-100">
        <div class="flex items-center gap-2">
            <i
                data-lucide="gamepad-2"
                class="text-green-500 w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
                Pour le gaming
            </span>
        </div>
        </div class="mt-4 ml-5">
            Distributions optimisées pour les jeux vidéo avec support GPU avancé.
        <div>
        
        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-200">
        <div class="flex items-center gap-2">
            <i
                data-lucide="shield-check"
                class="text-success w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
                Pour la sécurité défensive
            </span>
        </div>
        <div class="mt-4 ml-5">
            Distributions pour la défense, le monitoring et l'analyse de sécurité.
        </div>
        
        <article class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

    <section class="lg:px-65 p-10 md:p-10 gap-5">
            <div class="flex items-center gap-2">
                <i
                    data-lucide="clock-3"
                    class="text-primary w-12 h-12"
                ></i>
                <span class="font-bold text-3xl">
                    Histoire des distributions
                </span>
            </div>
            <div class="mt-5">
                L'évolution de l'écosystème Linux à travers le temps
            </div>

            <div class="mt-5">
                <ul class="timeline timeline-vertical">
                    <li>
                        <div class="timeline-start timeline-box">
                            <div class="text-sm">
                                <span class="font-bold text-xl">
                                    1993 - Debian <br>
                                </span>
                                Ian Murdock crée Debian, l'une des plus anciennes distributions encore actives.
                                
                        </div>
                        </div>
                        <div class="timeline-middle rounded-full bg-primary w-7 h-7 flex justify-center">
                            
                        </div>
                        <hr 
                            class="bg-primary"
                        />
                    </li>
                    <li>
                        <hr 
                            class="bg-primary"
                        />
                        <div class="timeline-middle rounded-full bg-primary w-7 h-7 flex justify-center">

                        </div>
                        <div class="timeline-end timeline-box">
                            <div class="text-sm">
                                <span class="font-bold text-xl">
                                    2002 - Arch Linux <br>
                                </span>
                                Judd Vinet lance Arch Linux, basée sur le principe KISS (Keep It Simple, Stupid).
                            </div>
                        </div>
                        <hr 
                            class="bg-primary"
                        />
                    </li>
                    <li>
                        <hr 
                            class="bg-primary"
                        />
                        <div class="timeline-start timeline-box">
                            <div class="text-sm">
                                <span class="text-xl font-bold">
                                    2004 - Ubuntu <br>
                                </span>
                                Mark Shuttleworth fonde Ubuntu, rendant Linux accessible au grand public.
                            </div>
                        </div>

                        <div class="timeline-middle rounded-full bg-primary w-7 h-7">

                        </div>
                        <hr 
                            class="bg-primary"
                        />
                    </li>
                    <li>
                        <hr
                            class="bg-primary"
                        />
                        <div class="timeline-end timeline-box">
                            <div class="">
                                <span class="text-xl font-bold">
                                    2006 - Linux Mint <br>
                                </span> 
                                <span class="text-sm">
                                     Création de Linux Mint, basée sur Ubuntu avec une interface plus traditionnelle.
                                </span>
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full w-7 h-7 bg-primary"></div>
                        <hr 
                            class="bg-primary"
                        />
                    </li>
                    <li>
                        <hr 
                            class="bg-primary"
                        />
                        <div class="timeline-start timeline-box">
                            <div class="text-sm">
                                <span class="text-xl font-bold">
                                    2013 - Kali Linux <br>
                                </span>
                                Offensive Security lance Kali Linux, successeur de BackTrack pour la sécurité.
                            </div>
                        </div>

                        <div class="timeline-middle rounded-full bg-primary w-7 h-7">

                        </div>
                        <hr 
                            class="bg-primary"
                        />
                    </li>
                    <li>
                        <hr
                            class="bg-primary"
                        />
                        <div class="timeline-end timeline-box">
                            <div class="">
                                <span class="text-xl font-bold">
                                    2017 - Pop!_OS <br>
                                </span> 
                                <span class="text-sm">
                                    System76 développe Pop!_OS, optimisée pour les créateurs et développeurs.
                                </span>
                            </div>
                        </div>
                        <div class="timeline-middle rounded-full w-7 h-7 bg-primary"></div>
                    </li>
                </ul>
            </div>
    </section>

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-200 mt-6">
        <div class="flex items-center gap-2">
            <i
                data-lucide="git-branch"
                class="text-primary w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
               Arbre généalogique
            </span>
        </div>
        <div class="mt-4 ml-5">
            Les relations entre les principales distributions Linux
        </div>

        <div class="bg-base-100 card p-4 mt-5">
            <div class="flex justify-between">
                <div class="">
                    <div class="flex items-center">
                        <img 
                            src="https://cdn.simpleicons.org/debian/A81D33" 
                            alt="debian-logo"
                            class="w-12 h-12"
                        >
                        <span class="text-xl font-bold">
                            Debian
                        </span>
                    </div>
                    <div class="flex ml-15 gap-1 mt-3">
                        <i
                            data-lucide="corner-down-right"
                            class="text-primary"
                        ></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/ubuntu/E95420" 
                                alt=""
                                class="w-5 h-5"
                            >
                            <span>Ubuntu</span>
                        </div>
                    </div>
                    <div class="flex ml-25 gap-1 mt-3">
                        <i
                            data-lucide="corner-down-right"
                            class="text-purple-400"
                        ></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/linuxmint/87CF3E" 
                                alt=""
                                class="w-5 h-5"
                            >
                            <span>Linux Mint</span>
                        </div>
                    </div>
                    <div class="flex ml-25 gap-1 mt-3">
                        <i
                            data-lucide="corner-down-right"
                            class="text-purple-400"
                        ></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/popos/48B9C7" 
                                alt=""
                                class="w-5 h-5"
                            >
                            <span>Pop!_OS</span>
                        </div>
                    </div>
                    <div class="flex ml-25 gap-1 mt-3">
                        <i
                            data-lucide="corner-down-right"
                            class="text-purple-400"
                        ></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/elementary/64BAFF" 
                                alt=""
                                class="w-5 h-5"
                            >
                            <span>Elementary OS</span>
                        </div>
                    </div>
                    <div class="flex ml-15 gap-1 mt-3">
                        <i
                            data-lucide="corner-down-right"
                            class="text-primary"
                        ></i>
                        <div class="flex items-center gap-2">
                            <img 
                                src="https://cdn.simpleicons.org/kalilinux/557C94" 
                                alt=""
                                class="w-6 h-6"
                            >
                            <span>Kali Linux</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="flex items-center">
                           <img 
                                src="https://cdn.simpleicons.org/redhat/EE0000" alt=""
                                class="w-10 h-10"
                            >
                            <span class="text-xl font-bold">
                                Red Hat
                            </span>
                        </div>
                        <div class="flex ml-15 gap-1 mt-3">
                            <i
                                data-lucide="corner-down-right"
                                class="text-primary"
                            ></i>
                            <div class="flex items-center gap-2">
                                <img 
                                    src="https://cdn.simpleicons.org/fedora/51A2DA" 
                                    alt=""
                                    class="w-5 h-5"
                                >
                                <span>Fedora</span>
                            </div>
                        </div>
                        <div class="flex ml-15 gap-1 mt-3">
                            <i
                                data-lucide="corner-down-right"
                                class="text-primary"
                            ></i>
                            <div class="flex items-center gap-2">
                                <img 
                                    src="https://cdn.simpleicons.org/centos/262577" 
                                    alt=""
                                    class="w-5 h-5"
                                >
                                <span>CentOS</span>
                            </div>
                        </div>

                        <div class="flex ml-15 gap-1 mt-3">
                            <i
                                data-lucide="corner-down-right"
                                class="text-primary"
                            ></i>
                            <div class="flex items-center gap-2">
                                <img 
                                    src="https://cdn.simpleicons.org/rockylinux/10B981" 
                                    alt=""
                                    class="w-5 h-5"
                                >
                                <span>Rocky Linux</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <div>
                        <div class="flex items-center">
                           <img 
                                src="https://cdn.simpleicons.org/archlinux/1793D1" alt=""
                                class="w-10 h-10"
                            >
                            <span class="text-xl font-bold">
                                Arch Linux
                            </span>
                        </div>
                        <div class="flex ml-15 gap-1 mt-3">
                            <i
                                data-lucide="corner-down-right"
                                class="text-primary"
                            ></i>
                            <div class="flex items-center gap-2">
                                <img 
                                    src="https://cdn.simpleicons.org/manjaro/35BF5C" 
                                    alt=""
                                    class="w-5 h-5"
                                >
                                <span>Manjaro</span>
                            </div>
                        </div>
                        <div class="flex ml-15 gap-1 mt-3">
                            <i
                                data-lucide="corner-down-right"
                                class="text-primary"
                            ></i>
                            <div class="flex items-center gap-2">
                                <img 
                                    src="https://cdn.simpleicons.org/endeavouros/7F7FFF" 
                                    alt=""
                                    class="w-5 h-5"
                                >
                                <span>Andeavour OS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-100 mt-5">
        <div class="flex items-center gap-2">
            <i
                data-lucide="chart-no-axes-column-increasing"
                class="text-primary w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
               Statistiques et popularité
            </span>
        </div>
        <div class="">
            <div>
                Les distributions les plus utilisées en 2026
                <div class="grid grid-cols-1 md:flex lg:flex md:justify-center md:gap-4 lg:justify-center lg:gap-4">
                    <div>
                        <div class="card mt-5 bg-base-200 p-6 gap-5 lg:w-130">
                            <span class="font-bold">Top 10 des distributions</span>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Ubuntu
                                    </span>
                                    <span class="font-bold text-sm">35%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-primary w-65 lg:w-120"
                                        value="35" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Debian
                                    </span>
                                    <span class="font-bold text-sm">18%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-secondary w-65 lg:w-120"
                                        value="18" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Fedora
                                    </span>
                                    <span class="font-bold text-sm">12%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-warning w-65 lg:w-120"
                                        value="12" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Arch Linux
                                    </span>
                                    <span class="font-bold text-sm">10%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-info w-65 lg:w-120"
                                        value="10" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Linux Mint
                                    </span>
                                    <span class="font-bold text-sm">8%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-success w-65 lg:w-120"
                                        value="8" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Manjaro
                                    </span>
                                    <span class="font-bold text-sm">6%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-error w-65 lg:w-120"
                                        value="6" max="100"
                                    ></progress>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between">
                                    <span class="font-bold text-sm">
                                        Autres
                                    </span>
                                    <span class="font-bold text-sm">11%</span>
                                </div>
                                <div class="flex items-center gap-1"> 
                                    <progress 
                                        class="progress progress-neutral w-65 lg:w-120"
                                        value="11" max="100"
                                    ></progress>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-5 bg-base-200 p-6 gap-3 lg:w-130">
                        <span class="font-bold">Utilisation par secteurs</span>
                        <div class="flex flex-col gap-2">
                            
                                <div>
                                    <div class="flex flex-col gap-2">
                                        <div class="">
                                            <div class="flex gap-2 justify-between">
                                                <div class="flex gap-2">
                                                    <i
                                                        data-lucide="server"
                                                        class="text-primary"
                                                    ></i>
                                                    <span class="font-bold">
                                                            Server
                                                    </span>
                                                </div>
                                                <span class="font-bold flex">
                                                    78%
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <progress 
                                            class="progress progress-primary w-65 lg:w-120"
                                            value="78" max="100"
                                        ></progress>
                                    </div>

                                    <div class="flex flex-col gap-2 mt-4">
                                        <div class="">
                                            <div class="flex gap-2 justify-between">
                                                <div class="flex gap-2">
                                                    <i
                                                        data-lucide="cloud"
                                                        class="text-secondary"
                                                    ></i>
                                                    <span class="font-bold">
                                                            Cloud
                                                    </span>
                                                </div>
                                                <span class="font-bold flex">
                                                    92%
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <progress 
                                            class="progress progress-secondary w-65 lg:w-120"
                                            value="92" max="100"
                                        ></progress>
                                    </div>

                                    <div class="flex flex-col gap-2 mt-4">
                                        <div class="">
                                            <div class="flex gap-2 justify-between">
                                                <div class="flex gap-2">
                                                    <i
                                                        data-lucide="laptop-minimal"
                                                        class="text-warning"
                                                    ></i>
                                                    <span class="font-bold">
                                                            Desktop
                                                    </span>
                                                </div>
                                                <span class="font-bold flex">
                                                    3%
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <progress 
                                            class="progress progress-warning w-65 lg:w-120"
                                            value="3" max="100"
                                        ></progress>
                                    </div>
                                </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:px-65 p-10 md:p-10 gap-5 bg-base-200 mt-5">
         <div class="flex items-center gap-2">
            <i
                data-lucide="circle-question-mark"
                class="text-primary w-12 h-12"
            ></i>
            <span class="font-bold text-3xl">
               Questions fréquentes
            </span>
        </div>

        <div class="collapse collapse-plus bg-base-100 border border-base-300 mt-4">
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