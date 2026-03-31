<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributions - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="min-h-screen bg-gradient-to-br from-base-200 to-base-300 py-20 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Explorez les Distributions Linux</h1>
            <p class="text-xl text-base-content/70 mb-8">Trouvez la distribution parfaite pour vos besoins</p>
            
            <!-- Quiz interactif -->
            <div class="card bg-base-100 shadow-xl max-w-2xl mx-auto mb-8">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <i data-lucide="help-circle" class="w-8 h-8 text-primary"></i>
                        <h2 class="card-title">Quelle distribution est faite pour vous ?</h2>
                    </div>
                    <p class="text-sm mb-4">Répondez à quelques questions pour découvrir la distribution idéale</p>
                    <button class="btn btn-primary">
                        <i data-lucide="play"></i>
                        Démarrer le quiz
                    </button>
                </div>
            </div>

            <!-- Barre de recherche -->
            <div class="max-w-2xl mx-auto mb-6">
                <div class="join w-full">
                    <input type="text" placeholder="Rechercher une distribution..." class="input input-bordered join-item w-full" />
                    <button class="btn btn-primary join-item">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Filtres -->
            <div class="flex flex-wrap gap-2 justify-center mb-8">
                <div class="dropdown">
                    <button class="btn btn-outline btn-sm">
                        <i data-lucide="filter" class="w-4 h-4"></i>
                        Niveau
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline btn-sm">
                        <i data-lucide="target" class="w-4 h-4"></i>
                        Usage
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline btn-sm">
                        <i data-lucide="package" class="w-4 h-4"></i>
                        Gestionnaire
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline btn-sm">
                        <i data-lucide="monitor" class="w-4 h-4"></i>
                        Bureau
                    </button>
                </div>
            </div>

            <!-- Stats rapides -->
            <div class="stats stats-vertical lg:stats-horizontal shadow bg-base-100">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i data-lucide="box" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-title">Distributions</div>
                    <div class="stat-value text-primary">25+</div>
                    <div class="stat-desc">Documentées</div>
                </div>
                
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-title">Utilisateurs</div>
                    <div class="stat-value text-secondary">500M+</div>
                    <div class="stat-desc">Dans le monde</div>
                </div>
                
                <div class="stat">
                    <div class="stat-figure text-accent">
                        <i data-lucide="download" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-title">Téléchargements</div>
                    <div class="stat-value">1M+</div>
                    <div class="stat-desc">Par mois</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pour débuter -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="star" class="w-8 h-8 text-success"></i>
                <h2 class="text-4xl font-bold">Pour débuter</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions idéales pour les nouveaux utilisateurs Linux</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Pour les développeurs -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="code" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Pour les développeurs</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions optimisées pour le développement logiciel</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Pour la sécurité -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="shield" class="w-8 h-8 text-error"></i>
                <h2 class="text-4xl font-bold">Pour la sécurité</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions spécialisées en cybersécurité et tests de pénétration</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
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
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/parrotsecurity/00D9FF" alt="Parrot OS" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Parrot OS</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-error">Avancé</div>
                            <div class="badge badge-outline">Sécurité</div>
                            <div class="badge badge-outline">Pentest</div>
                        </div>
                        <p class="text-sm mb-4">Alternative à Kali, légère et performante. Orientée sécurité et vie privée avec de nombreux outils.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2013</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> MATE</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Pour OSINT -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="search" class="w-8 h-8 text-info"></i>
                <h2 class="text-4xl font-bold">Pour l'OSINT</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions spécialisées en renseignement open source et investigation</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/linux/FCC624" alt="CSI Linux" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">CSI Linux</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">OSINT</div>
                            <div class="badge badge-outline">Investigation</div>
                        </div>
                        <p class="text-sm mb-4">Distribution spécialisée en investigation numérique et OSINT avec outils préinstallés.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2019</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> XFCE</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="Trace Labs" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Trace Labs OSINT</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">OSINT</div>
                            <div class="badge badge-outline">Recherche</div>
                        </div>
                        <p class="text-sm mb-4">VM spécialisée pour les enquêtes OSINT et la recherche de personnes disparues.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2020</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> XFCE</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Pour le Gaming -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="gamepad-2" class="w-8 h-8 text-success"></i>
                <h2 class="text-4xl font-bold">Pour le Gaming</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions optimisées pour les jeux vidéo avec support GPU avancé</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/popos/48B9C7" alt="Pop!_OS" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Pop!_OS</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-success">Débutant</div>
                            <div class="badge badge-outline">Gaming</div>
                            <div class="badge badge-outline">GPU</div>
                        </div>
                        <p class="text-sm mb-4">Excellent support GPU NVIDIA et AMD. Optimisée pour le gaming avec Steam et Proton.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2017</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> COSMIC</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/nobara/FF6384" alt="Nobara" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Nobara</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">Gaming</div>
                            <div class="badge badge-outline">Streaming</div>
                        </div>
                        <p class="text-sm mb-4">Basée sur Fedora, optimisée pour le gaming et le streaming avec codecs préinstallés.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2022</p>
                            <p><span class="font-semibold">Paquets:</span> DNF (rpm)</p>
                            <p><span class="font-semibold">Bureau:</span> KDE/GNOME</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/garudalinux/0080FF" alt="Garuda Linux" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Garuda Linux</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">Gaming</div>
                            <div class="badge badge-outline">Performance</div>
                        </div>
                        <p class="text-sm mb-4">Basée sur Arch, avec optimisations gaming et interface moderne. Très performante.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2020</p>
                            <p><span class="font-semibold">Paquets:</span> Pacman</p>
                            <p><span class="font-semibold">Bureau:</span> KDE/GNOME</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Pour la sécurité défensive -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="shield-check" class="w-8 h-8 text-success"></i>
                <h2 class="text-4xl font-bold">Pour la sécurité défensive</h2>
            </div>
            <p class="text-base-content/70 mb-8">Distributions pour la défense, le monitoring et l'analyse de sécurité</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="logo-so-onion-light.svg" alt="Security Onion" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Security Onion</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-error">Avancé</div>
                            <div class="badge badge-outline">IDS/IPS</div>
                            <div class="badge badge-outline">Monitoring</div>
                        </div>
                        <p class="text-sm mb-4">Plateforme complète pour la détection d'intrusions et le monitoring réseau.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2008</p>
                            <p><span class="font-semibold">Paquets:</span> APT (deb)</p>
                            <p><span class="font-semibold">Bureau:</span> XFCE</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i data-lucide="download" class="w-4 h-4"></i>
                                Télécharger
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-2">
                    <div class="card-body">
                        <div class="flex items-start justify-between mb-4">
                            <img src="https://cdn.simpleicons.org/linux/000000" alt="Wazuh" class="w-16 h-16">
                            <div class="flex gap-1">
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-warning text-warning"></i>
                                <i data-lucide="star" class="w-4 h-4 text-base-300"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-2xl mb-2">Wazuh</h3>
                        <div class="flex gap-2 mb-3 flex-wrap">
                            <div class="badge badge-warning">Intermédiaire</div>
                            <div class="badge badge-outline">SIEM</div>
                            <div class="badge badge-outline">XDR</div>
                        </div>
                        <p class="text-sm mb-4">Plateforme de sécurité unifiée pour la détection de menaces et conformité.</p>
                        <div class="divider my-2"></div>
                        <div class="text-xs space-y-1">
                            <p><span class="font-semibold">Sortie:</span> 2015</p>
                            <p><span class="font-semibold">Paquets:</span> APT/YUM</p>
                            <p><span class="font-semibold">Bureau:</span> Server</p>
                        </div>
                        <div class="card-actions justify-end mt-4 gap-2">
                            <button class="btn btn-outline btn-sm">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                Détails
                            </button>
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

    <!-- Timeline -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="clock" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Histoire des distributions</h2>
            </div>
            <p class="text-base-content/70 mb-8">L'évolution de l'écosystème Linux à travers le temps</p>
            
            <ul class="timeline timeline-vertical">
                <li>
                    <div class="timeline-start timeline-box">
                        <div class="font-bold text-lg mb-2">1993 - Debian</div>
                        <p class="text-sm">Ian Murdock crée Debian, l'une des plus anciennes distributions encore actives.</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <hr class="bg-primary" />
                </li>
                
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="font-bold text-lg mb-2">2002 - Arch Linux</div>
                        <p class="text-sm">Judd Vinet lance Arch Linux, basée sur le principe KISS (Keep It Simple, Stupid).</p>
                    </div>
                    <hr class="bg-primary" />
                </li>
                
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-start timeline-box">
                        <div class="font-bold text-lg mb-2">2004 - Ubuntu</div>
                        <p class="text-sm">Mark Shuttleworth fonde Ubuntu, rendant Linux accessible au grand public.</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <hr class="bg-primary" />
                </li>
                
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="font-bold text-lg mb-2">2006 - Linux Mint</div>
                        <p class="text-sm">Création de Linux Mint, basée sur Ubuntu avec une interface plus traditionnelle.</p>
                    </div>
                    <hr class="bg-primary" />
                </li>
                
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-start timeline-box">
                        <div class="font-bold text-lg mb-2">2013 - Kali Linux</div>
                        <p class="text-sm">Offensive Security lance Kali Linux, successeur de BackTrack pour la sécurité.</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <hr class="bg-primary" />
                </li>
                
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-middle">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <div class="timeline-end timeline-box">
                        <div class="font-bold text-lg mb-2">2017 - Pop!_OS</div>
                        <p class="text-sm">System76 développe Pop!_OS, optimisée pour les créateurs et développeurs.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Arbre généalogique -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="git-branch" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Arbre généalogique</h2>
            </div>
            <p class="text-base-content/70 mb-8">Les relations entre les principales distributions Linux</p>
            
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Branche Debian -->
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <img src="https://cdn.simpleicons.org/debian/A81D33" alt="Debian" class="w-8 h-8">
                                <h3 class="text-xl font-bold">Debian</h3>
                            </div>
                            <div class="ml-8 space-y-2">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" class="w-6 h-6">
                                    <span>Ubuntu</span>
                                </div>
                                <div class="ml-8 space-y-2">
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="corner-down-right" class="w-4 h-4 text-secondary"></i>
                                        <img src="https://cdn.simpleicons.org/linuxmint/87CF3E" alt="Mint" class="w-6 h-6">
                                        <span>Linux Mint</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="corner-down-right" class="w-4 h-4 text-secondary"></i>
                                        <img src="https://cdn.simpleicons.org/popos/48B9C7" alt="Pop!_OS" class="w-6 h-6">
                                        <span>Pop!_OS</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="corner-down-right" class="w-4 h-4 text-secondary"></i>
                                        <img src="https://cdn.simpleicons.org/elementary/64BAFF" alt="Elementary" class="w-6 h-6">
                                        <span>Elementary OS</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="Kali" class="w-6 h-6">
                                    <span>Kali Linux</span>
                                </div>
                            </div>
                        </div>

                        <!-- Branche Red Hat -->
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <img src="https://cdn.simpleicons.org/redhat/EE0000" alt="Red Hat" class="w-8 h-8">
                                <h3 class="text-xl font-bold">Red Hat</h3>
                            </div>
                            <div class="ml-8 space-y-2">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <img src="https://cdn.simpleicons.org/fedora/51A2DA" alt="Fedora" class="w-6 h-6">
                                    <span>Fedora</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <span>CentOS</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <img src="https://cdn.simpleicons.org/rockylinux/10B981" alt="Rocky" class="w-6 h-6">
                                    <span>Rocky Linux</span>
                                </div>
                            </div>
                        </div>

                        <!-- Branche Arch -->
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <img src="https://cdn.simpleicons.org/archlinux/1793D1" alt="Arch" class="w-8 h-8">
                                <h3 class="text-xl font-bold">Arch Linux</h3>
                            </div>
                            <div class="ml-8 space-y-2">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <img src="https://cdn.simpleicons.org/manjaro/35BF5C" alt="Manjaro" class="w-6 h-6">
                                    <span>Manjaro</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="corner-down-right" class="w-4 h-4 text-primary"></i>
                                    <span>EndeavourOS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="py-20 px-4 bg-base-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="bar-chart" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Statistiques et popularité</h2>
            </div>
            <p class="text-base-content/70 mb-8">Les distributions les plus utilisées en 2024</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Top 10 des distributions</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Ubuntu</span>
                                    <span class="text-sm">35%</span>
                                </div>
                                <progress class="progress progress-primary" value="35" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Debian</span>
                                    <span class="text-sm">18%</span>
                                </div>
                                <progress class="progress progress-secondary" value="18" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Fedora</span>
                                    <span class="text-sm">12%</span>
                                </div>
                                <progress class="progress progress-accent" value="12" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Arch Linux</span>
                                    <span class="text-sm">10%</span>
                                </div>
                                <progress class="progress progress-info" value="10" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Linux Mint</span>
                                    <span class="text-sm">8%</span>
                                </div>
                                <progress class="progress progress-success" value="8" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Manjaro</span>
                                    <span class="text-sm">6%</span>
                                </div>
                                <progress class="progress progress-warning" value="6" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-semibold">Autres</span>
                                    <span class="text-sm">11%</span>
                                </div>
                                <progress class="progress" value="11" max="100"></progress>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Utilisation par secteur</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <i data-lucide="server" class="w-8 h-8 text-primary"></i>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-semibold">Serveurs</span>
                                        <span class="text-sm">78%</span>
                                    </div>
                                    <progress class="progress progress-primary" value="78" max="100"></progress>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <i data-lucide="cloud" class="w-8 h-8 text-secondary"></i>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-semibold">Cloud</span>
                                        <span class="text-sm">92%</span>
                                    </div>
                                    <progress class="progress progress-secondary" value="92" max="100"></progress>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <i data-lucide="monitor" class="w-8 h-8 text-accent"></i>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-semibold">Desktop</span>
                                        <span class="text-sm">3%</span>
                                    </div>
                                    <progress class="progress progress-accent" value="3" max="100"></progress>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <i data-lucide="smartphone" class="w-8 h-8 text-info"></i>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-semibold">Mobile (Android)</span>
                                        <span class="text-sm">71%</span>
                                    </div>
                                    <progress class="progress progress-info" value="71" max="100"></progress>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <i data-lucide="cpu" class="w-8 h-8 text-success"></i>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-semibold">Superordinateurs</span>
                                        <span class="text-sm">100%</span>
                                    </div>
                                    <progress class="progress progress-success" value="100" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 px-4 bg-base-200">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <i data-lucide="help-circle" class="w-8 h-8 text-primary"></i>
                <h2 class="text-4xl font-bold">Questions fréquentes</h2>
            </div>
            
            <div class="space-y-4">
                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                        Quelle distribution choisir pour débuter ?
                    </div>
                    <div class="collapse-content">
                        <p>Pour débuter, nous recommandons Ubuntu ou Linux Mint. Ces distributions sont conviviales, bien documentées et disposent d'une grande communauté pour vous aider.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title text-xl font-medium">
                        Quelle est la différence entre Ubuntu et Debian ?
                    </div>
                    <div class="collapse-content">
                        <p>Ubuntu est basée sur Debian mais propose des versions plus récentes des logiciels et un cycle de release fixe (tous les 6 mois). Debian privilégie la stabilité avec des versions moins fréquentes.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title text-xl font-medium">
                        Puis-je installer Linux à côté de Windows ?
                    </div>
                    <div class="collapse-content">
                        <p>Oui, c'est ce qu'on appelle le dual-boot. Vous pourrez choisir au démarrage quel système utiliser. La plupart des distributions proposent cette option lors de l'installation.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title text-xl font-medium">
                        Qu'est-ce qu'une distribution rolling release ?
                    </div>
                    <div class="collapse-content">
                        <p>Une rolling release (comme Arch Linux) reçoit des mises à jour continues sans versions majeures. Vous avez toujours les derniers logiciels, mais cela peut être moins stable.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title text-xl font-medium">
                        Linux est-il vraiment gratuit ?
                    </div>
                    <div class="collapse-content">
                        <p>Oui, Linux est libre et gratuit. Vous pouvez télécharger, installer et utiliser n'importe quelle distribution sans payer. Certaines entreprises proposent du support payant, mais le système reste gratuit.</p>
                    </div>
                </div>

                <div class="collapse collapse-plus bg-base-100">
                    <input type="radio" name="faq-accordion" />
                    <div class="collapse-title text-xl font-medium">
                        Mes jeux Windows fonctionneront-ils sur Linux ?
                    </div>
                    <div class="collapse-content">
                        <p>Grâce à Steam Proton et Wine, de nombreux jeux Windows fonctionnent sur Linux. Pop!_OS et Manjaro sont particulièrement optimisées pour le gaming.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 px-4 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4 text-white">Prêt à essayer Linux ?</h2>
            <p class="text-xl mb-8 text-white/90">Téléchargez votre distribution et commencez votre aventure Linux aujourd'hui</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <button class="btn btn-neutral btn-lg">
                    <i data-lucide="download" class="w-5 h-5"></i>
                    Télécharger Ubuntu
                </button>
                <button class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">
                    <i data-lucide="book-open" class="w-5 h-5"></i>
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
