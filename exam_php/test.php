<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs - Apprenez Linux</title>
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
                    <a href="home.php">Accueil</a>
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
                    <a href="">Ressources</a>
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
    <section class="hero min-h-screen bg-gradient-to-br from-base-200 to-base-300 relative overflow-hidden">
        <!-- Logos en arrière-plan flou -->
        <div class="absolute inset-0 opacity-10 blur-sm">
            <div class="absolute top-10 left-10 animate-float">
                <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" class="w-20 h-20">
            </div>
            <div class="absolute top-20 right-20 animate-float-delay-1">
                <img src="https://cdn.simpleicons.org/fedora/51A2DA" alt="Fedora" class="w-24 h-24">
            </div>
            <div class="absolute bottom-32 left-32 animate-float-delay-2">
                <img src="https://cdn.simpleicons.org/debian/A81D33" alt="Debian" class="w-20 h-20">
            </div>
            <div class="absolute top-1/3 right-10 animate-float">
                <img src="https://cdn.simpleicons.org/archlinux/1793D1" alt="Arch" class="w-20 h-20">
            </div>
            <div class="absolute bottom-20 right-40 animate-float-delay-1">
                <img src="https://cdn.simpleicons.org/linuxmint/87CF3E" alt="Mint" class="w-24 h-24">
            </div>
            <div class="absolute top-40 left-1/4 animate-float-delay-2">
                <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="Kali" class="w-20 h-20">
            </div>
            <div class="absolute bottom-40 left-20 animate-float">
                <img src="https://cdn.simpleicons.org/manjaro/35BF5C" alt="Manjaro" class="w-20 h-20">
            </div>
            <div class="absolute top-1/2 left-1/2 animate-float-delay-1">
                <img src="https://cdn.simpleicons.org/popos/48B9C7" alt="Pop!_OS" class="w-24 h-24">
            </div>
        </div>

        <div class="hero-content text-center relative z-10">
            <div class="max-w-5xl">
                <!-- Terminal stylisé -->
                <div class="mockup-code bg-neutral shadow-2xl mb-8 text-left max-w-2xl mx-auto">
                    <div class="px-6 py-4">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-3 h-3 rounded-full bg-error"></div>
                            <div class="w-3 h-3 rounded-full bg-warning"></div>
                            <div class="w-3 h-3 rounded-full bg-success"></div>
                            <span class="ml-2 text-xs text-base-content/50">user@richlabs:~</span>
                        </div>
                        <pre data-prefix="$" class="text-success"><code>sudo apt update</code></pre>
                        <pre data-prefix=">" class="text-warning"><code>Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease</code></pre>
                        <pre data-prefix=">" class="text-warning"><code>Get:2 http://security.ubuntu.com/ubuntu jammy-security InRelease</code></pre>
                        <pre data-prefix=">" class="text-info"><code>Reading package lists... Done</code></pre>
                        <pre data-prefix=">" class="text-success"><code>Building dependency tree... Done</code></pre>
                        <pre data-prefix="$" class="text-primary animate-pulse"><code>_</code></pre>
                    </div>
                </div>

                <h1 class="text-6xl font-bold mb-6 bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                    Apprenez Linux de A à Z
                </h1>
                <p class="text-xl mb-8 text-base-content/80">
                    Maîtrisez les distributions Linux avec des cours pratiques, des tutoriels interactifs et une communauté passionnée
                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <button class="btn btn-primary btn-lg gap-2">
                        <i data-lucide="rocket" class="w-5 h-5"></i>
                        Commencer gratuitement
                    </button>
                    <button class="btn btn-outline btn-lg gap-2">
                        <i data-lucide="play-circle" class="w-5 h-5"></i>
                        Voir la démo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delay-1 {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }

        .animate-float-delay-2 {
            animation: float 6s ease-in-out infinite;
            animation-delay: 4s;
        }
    </style>

    <!-- Pourquoi Linux Section -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Pourquoi apprendre Linux ?</h2>
            <p class="text-center text-base-content/70 mb-12 max-w-2xl mx-auto">
                Linux est partout : serveurs, cloud, IoT, smartphones. Développez des compétences recherchées
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="unlock" class="w-16 h-16 text-primary mb-4"></i>
                        <h3 class="card-title">Open Source</h3>
                        <p>Gratuit, libre et personnalisable à l'infini</p>
                    </div>
                </div>
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="shield-check" class="w-16 h-16 text-success mb-4"></i>
                        <h3 class="card-title">Sécurité</h3>
                        <p>Architecture robuste et mises à jour régulières</p>
                    </div>
                </div>
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="zap" class="w-16 h-16 text-warning mb-4"></i>
                        <h3 class="card-title">Performance</h3>
                        <p>Rapide, léger et optimisé pour tous les usages</p>
                    </div>
                </div>
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body items-center text-center">
                        <i data-lucide="briefcase" class="w-16 h-16 text-secondary mb-4"></i>
                        <h3 class="card-title">Carrière</h3>
                        <p>Compétences très demandées sur le marché</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Distributions Populaires -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Distributions populaires</h2>
            <p class="text-center text-base-content/70 mb-12">
                Découvrez les distributions Linux les plus utilisées et trouvez celle qui vous correspond
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Ubuntu -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Ubuntu</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-success">Débutant</div>
                            <div class="badge badge-outline">Desktop</div>
                            <div class="badge badge-outline">Serveur</div>
                        </div>
                        <p class="text-sm mb-4">La distribution la plus populaire, idéale pour débuter avec Linux. Interface intuitive et grande communauté.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2004</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> GNOME</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Fedora -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/fedora/51A2DA" alt="Fedora" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Fedora</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">Desktop</div>
                            <div class="badge badge-outline">Dev</div>
                        </div>
                        <p class="text-sm mb-4">Distribution innovante sponsorisée par Red Hat. Toujours à la pointe des dernières technologies Linux.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2003</p>
                            <p><span class="font-semibold">Paquets:</span> DNF (rpm)</p>
                            <p><span class="font-semibold">Bureau:</span> GNOME</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Debian -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/debian/A81D33" alt="Debian" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Debian</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-info">Débutant</div>
                            <div class="badge badge-outline">Serveur</div>
                            <div class="badge badge-outline">Stable</div>
                        </div>
                        <p class="text-sm mb-4">La distribution universelle. Extrêmement stable et fiable, base de nombreuses autres distributions.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 1993</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> Multiple</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Arch Linux -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/archlinux/1793D1" alt="Arch Linux" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Arch Linux</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-error">Avancé</div>
                            <div class="badge badge-outline">Desktop</div>
                            <div class="badge badge-outline">DIY</div>
                        </div>
                        <p class="text-sm mb-4">Pour les utilisateurs expérimentés. Rolling release avec contrôle total et documentation exceptionnelle.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2002</p>
                            <p><span class="font-semibold">Paquets:</span> Pacman</p>
                            <p><span class="font-semibold">Bureau:</span> À choisir</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Linux Mint -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/linuxmint/87CF3E" alt="Linux Mint" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Linux Mint</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-success">Débutant</div>
                            <div class="badge badge-outline">Desktop</div>
                            <div class="badge badge-outline">Familier</div>
                        </div>
                        <p class="text-sm mb-4">Interface familière pour les utilisateurs Windows. Basée sur Ubuntu, simple et élégante.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2006</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> Cinnamon</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Kali Linux -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="Kali Linux" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Kali Linux</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-error">Avancé</div>
                            <div class="badge badge-outline">Sécurité</div>
                            <div class="badge badge-outline">Pentest</div>
                        </div>
                        <p class="text-sm mb-4">Spécialisée en sécurité informatique et tests de pénétration. Plus de 600 outils préinstallés.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2013</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> Xfce</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Pop!_OS -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/popos/48B9C7" alt="Pop!_OS" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Pop!_OS</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-success">Débutant</div>
                            <div class="badge badge-outline">Gaming</div>
                            <div class="badge badge-outline">Dev</div>
                        </div>
                        <p class="text-sm mb-4">Créée par System76. Optimisée pour le gaming et le développement avec support GPU excellent.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2017</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> COSMIC</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Manjaro -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/manjaro/35BF5C" alt="Manjaro" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Manjaro</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">Desktop</div>
                            <div class="badge badge-outline">Rolling</div>
                        </div>
                        <p class="text-sm mb-4">Arch Linux rendu accessible. Installation facile avec tous les avantages d'Arch.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2011</p>
                            <p><span class="font-semibold">Paquets:</span> Pacman</p>
                            <p><span class="font-semibold">Bureau:</span> Multiple</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Elementary OS -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/elementary/64BAFF" alt="Elementary OS" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Elementary OS</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-success">Débutant</div>
                            <div class="badge badge-outline">Design</div>
                            <div class="badge badge-outline">Desktop</div>
                        </div>
                        <p class="text-sm mb-4">Design élégant inspiré de macOS. Interface épurée et expérience utilisateur soignée.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2011</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> Pantheon</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

                <!-- Rocky Linux -->
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/rockylinux/10B981" alt="Rocky Linux" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Rocky Linux</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">Entreprise</div>
                            <div class="badge badge-outline">Serveur</div>
                        </div>
                        <p class="text-sm mb-4">Successeur de CentOS. Distribution enterprise-grade stable et fiable pour la production.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2021</p>
                            <p><span class="font-semibold">Paquets:</span> DNF (rpm)</p>
                            <p><span class="font-semibold">Bureau:</span> GNOME</p>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Découvrir</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Comment ça marche -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Comment ça marche ?</h2>
            <p class="text-center text-base-content/70 mb-12">
                Un parcours simple et progressif pour devenir expert Linux
            </p>
            <ul class="timeline timeline-vertical lg:timeline-horizontal">
                <li>
                    <div class="timeline-start timeline-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="search" class="w-5 h-5 text-primary"></i>
                            <h3 class="font-bold">Choisir une distro</h3>
                        </div>
                        <p class="text-sm">Explorez et sélectionnez la distribution adaptée à vos besoins</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">1</div>
                    </div>
                    <hr class="bg-primary"/>
                </li>
                <li>
                    <hr class="bg-primary"/>
                    <div class="timeline-middle">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">2</div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="graduation-cap" class="w-5 h-5 text-primary"></i>
                            <h3 class="font-bold">Suivre les cours</h3>
                        </div>
                        <p class="text-sm">Apprenez avec des tutoriels vidéo et des exercices pratiques</p>
                    </div>
                    <hr class="bg-primary"/>
                </li>
                <li>
                    <hr class="bg-primary"/>
                    <div class="timeline-start timeline-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="code" class="w-5 h-5 text-primary"></i>
                            <h3 class="font-bold">Pratiquer</h3>
                        </div>
                        <p class="text-sm">Mettez en pratique dans des environnements virtuels sécurisés</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">3</div>
                    </div>
                    <hr class="bg-primary"/>
                </li>
                <li>
                    <hr class="bg-primary"/>
                    <div class="timeline-middle">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">4</div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="award" class="w-5 h-5 text-primary"></i>
                            <h3 class="font-bold">Certifier</h3>
                        </div>
                        <p class="text-sm">Obtenez des certificats reconnus pour valoriser vos compétences</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Cours disponibles -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Cours disponibles</h2>
            <p class="text-center text-base-content/70 mb-12">
                Des formations complètes pour tous les niveaux
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <i data-lucide="book-open" class="w-12 h-12 text-primary mb-2"></i>
                        <h3 class="card-title text-lg">Introduction à Linux</h3>
                        <p class="text-sm text-base-content/70">Les bases essentielles pour débuter</p>
                        <div class="flex gap-2 mt-4">
                            <div class="badge badge-outline">12 leçons</div>
                            <div class="badge badge-outline">3h</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Commencer</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <i data-lucide="terminal" class="w-12 h-12 text-success mb-2"></i>
                        <h3 class="card-title text-lg">Ligne de commande</h3>
                        <p class="text-sm text-base-content/70">Maîtrisez le terminal Linux</p>
                        <div class="flex gap-2 mt-4">
                            <div class="badge badge-outline">20 leçons</div>
                            <div class="badge badge-outline">5h</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Commencer</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <i data-lucide="server" class="w-12 h-12 text-warning mb-2"></i>
                        <h3 class="card-title text-lg">Administration système</h3>
                        <p class="text-sm text-base-content/70">Gérez serveurs et services</p>
                        <div class="flex gap-2 mt-4">
                            <div class="badge badge-outline">25 leçons</div>
                            <div class="badge badge-outline">8h</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Commencer</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all">
                    <div class="card-body">
                        <i data-lucide="shield" class="w-12 h-12 text-error mb-2"></i>
                        <h3 class="card-title text-lg">Sécurité Linux</h3>
                        <p class="text-sm text-base-content/70">Protégez vos systèmes</p>
                        <div class="flex gap-2 mt-4">
                            <div class="badge badge-outline">18 leçons</div>
                            <div class="badge badge-outline">6h</div>
                        </div>
                        <div class="card-actions justify-end mt-4">
                            <button class="btn btn-primary btn-sm btn-block">Commencer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-6xl mx-auto">
            <div class="stats stats-vertical lg:stats-horizontal shadow w-full">
                <div class="stat place-items-center">
                    <div class="stat-figure text-primary">
                        <i data-lucide="users" class="w-12 h-12"></i>
                    </div>
                    <div class="stat-title">Utilisateurs actifs</div>
                    <div class="stat-value text-primary">15K+</div>
                    <div class="stat-desc">En constante croissance</div>
                </div>
                <div class="stat place-items-center">
                    <div class="stat-figure text-secondary">
                        <i data-lucide="book-open" class="w-12 h-12"></i>
                    </div>
                    <div class="stat-title">Cours disponibles</div>
                    <div class="stat-value text-secondary">120+</div>
                    <div class="stat-desc">Nouveaux chaque mois</div>
                </div>
                <div class="stat place-items-center">
                    <div class="stat-figure text-accent">
                        <i data-lucide="hard-drive" class="w-12 h-12"></i>
                    </div>
                    <div class="stat-title">Distributions</div>
                    <div class="stat-value text-accent">25+</div>
                    <div class="stat-desc">Toutes documentées</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4">Ce qu'ils en disent</h2>
            <p class="text-center text-base-content/70 mb-12">
                Rejoignez des milliers d'apprenants satisfaits
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar placeholder">
                                <div class="bg-primary text-neutral-content rounded-full w-12">
                                    <span class="text-xl">SA</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold">Sarah A.</h3>
                                <p class="text-sm text-base-content/70">Développeuse</p>
                            </div>
                        </div>
                        <p class="text-sm">"Excellente plateforme pour apprendre Linux. Les cours sont clairs et progressifs. J'ai pu passer d'Ubuntu à Arch en quelques mois!"</p>
                        <div class="rating rating-sm mt-4">
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar placeholder">
                                <div class="bg-secondary text-neutral-content rounded-full w-12">
                                    <span class="text-xl">MB</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold">Marc B.</h3>
                                <p class="text-sm text-base-content/70">Sysadmin</p>
                            </div>
                        </div>
                        <p class="text-sm">"Les tutoriels sur l'administration système sont top. J'ai appris plein de commandes et bonnes pratiques que j'utilise au quotidien."</p>
                        <div class="rating rating-sm mt-4">
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar placeholder">
                                <div class="bg-accent text-neutral-content rounded-full w-12">
                                    <span class="text-xl">LK</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold">Lisa K.</h3>
                                <p class="text-sm text-base-content/70">Étudiante</p>
                            </div>
                        </div>
                        <p class="text-sm">"Parfait pour débuter! J'avais peur de Linux mais les explications sont simples. Maintenant j'utilise Ubuntu tous les jours."</p>
                        <div class="rating rating-sm mt-4">
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                            <input type="radio" class="mask mask-star-2 bg-warning" checked />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-20 px-4 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 text-white">Prêt à commencer votre aventure Linux ?</h2>
            <p class="text-xl mb-8 text-white/90">
                Rejoignez notre communauté et devenez un expert Linux
            </p>
            <div class="flex gap-4 justify-center flex-wrap mb-8">
                <button class="btn btn-lg bg-white text-primary hover:bg-white/90 gap-2">
                    <i data-lucide="user-plus" class="w-5 h-5"></i>
                    S'inscrire gratuitement
                </button>
                <button class="btn btn-lg btn-outline text-white border-white hover:bg-white hover:text-primary gap-2">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    Newsletter
                </button>
            </div>
            <p class="text-white/80 text-sm">Aucune carte bancaire requise • Accès immédiat</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">À propos</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Blog</a>
            <a class="link link-hover">Mentions légales</a>
            <a class="link link-hover">Politique de confidentialité</a>
        </nav>
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a class="cursor-pointer hover:text-primary transition-colors">
                    <i data-lucide="twitter" class="w-6 h-6"></i>
                </a>
                <a class="cursor-pointer hover:text-primary transition-colors">
                    <i data-lucide="youtube" class="w-6 h-6"></i>
                </a>
                <a class="cursor-pointer hover:text-primary transition-colors">
                    <i data-lucide="github" class="w-6 h-6"></i>
                </a>
                <a class="cursor-pointer hover:text-primary transition-colors">
                    <i data-lucide="linkedin" class="w-6 h-6"></i>
                </a>
            </div>
        </nav>
        <aside>
            <p class="font-bold">
                <span class="text-blue-500">RichLabs</span> - Votre parcours Linux
            </p>
            <p>Copyright © 2026 - Tous droits réservés</p>
        </aside>
    </footer>

    <script>
        lucide.createIcons();
    </script>

</body>
</html>
