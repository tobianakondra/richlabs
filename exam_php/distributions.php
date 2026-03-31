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

            <article class="grid grid-cols-1 md:grid-cols-2 lg: grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

        <article class="grid grid-cols-1 md:grid-cols-2 lg: grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

        <article class="grid grid-cols-1 md:grid-cols-2 lg: grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
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

        <article class="grid grid-cols-1 md:grid-cols-2 lg: grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
            <div class="card bg-base-100 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="csi.png" 
                    alt="kali-linux-logo"
                    class="w-20 h-20"
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
                    class="w-20 h-20"
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
        
        <article class="grid grid-cols-1 md:grid-cols-2 lg: grid-cols-3 px-5 py-5 lg:px-15 lg:py-10 gap-3">
            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2">
                <img 
                    src="https://cdn.simpleicons.org/popos/48B9C7" 
                    alt="pop!_os"
                    class="w-20 h-20"
                >
                <span class="text-2xl font-bold">Pop!_OS</span>
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
        </article>
    </section>
    <script>
            lucide.createIcons();
    </script>
</body>
</html>