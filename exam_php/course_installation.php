<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation d'Ubuntu - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body class="bg-base-200 min-h-screen">
    <?php include 'header.php'; ?>

    <main class="max-w-5xl mx-auto px-4 py-8">
        <a href="cours.php" class="btn btn-ghost btn-sm mb-4">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Retour aux cours
        </a>

        <div class="hero bg-gradient-to-r from-orange-600 to-red-600 rounded-2xl p-8 text-white mb-8">
            <div class="hero-content text-center">
                <div class="max-w-2xl">
                    <div class="flex justify-center mb-4">
                        <img src="https://cdn.simpleicons.org/ubuntu/white" alt="Ubuntu" class="w-24 h-24">
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Installation d'Ubuntu</h1>
                    <p class="text-xl mb-2">Guide complet pas à pas pour installer Ubuntu sur votre ordinateur</p>
                    <div class="flex flex-wrap justify-center gap-3 mt-4">
                        <span class="badge badge-warning badge-lg">Intermédiaire</span>
                        <span class="badge badge-outline badge-lg">8 étapes</span>
                        <span class="badge badge-outline badge-lg">~45 minutes</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-info mb-8">
            <i data-lucide="info" class="w-6 h-6"></i>
            <div>
                <h3 class="font-bold">Pourquoi Ubuntu ?</h3>
                <p class="text-sm">Ubuntu est la distribution Linux la plus populaire au monde. Elle est idéale pour débuter car elle possède une grande communauté, une documentation abondante et un support matériel excellent. C'est sur Ubuntu que se basent de nombreuses autres distributions comme Linux Mint.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body items-center text-center">
                    <i data-lucide="monitor" class="w-12 h-12 text-blue-400"></i>
                    <h3 class="font-bold text-lg mt-2">Prérequis</h3>
                    <ul class="text-sm text-left mt-2 space-y-1">
                        <li>• 6 Go de RAM minimum</li>
                        <li>• 25 Go d'espace disque</li>
                        <li>• Clé USB 8 Go minimum</li>
                        <li>• Connexion internet</li>
                    </ul>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body items-center text-center">
                    <i data-lucide="cpu" class="w-12 h-12 text-green-400"></i>
                    <h3 class="font-bold text-lg mt-2">Système hôte</h3>
                    <ul class="text-sm text-left mt-2 space-y-1">
                        <li>• Processeur x86_64</li>
                        <li>• UEFI ou BIOS classique</li>
                        <li>• Graphiques intégrés ou dédiés</li>
                        <li>• WiFi ou Ethernet</li>
                    </ul>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body items-center text-center">
                    <i data-lucide="clock" class="w-12 h-12 text-purple-400"></i>
                    <h3 class="font-bold text-lg mt-2">Durée estimée</h3>
                    <ul class="text-sm text-left mt-2 space-y-1">
                        <li>• Téléchargement ISO : ~30 min</li>
                        <li>• Création USB : ~10 min</li>
                        <li>• Installation : ~20 min</li>
                    </ul>
                </div>
            </div>
        </div>

<div class="divider"></div>

<div class="sticky top-20 z-40 bg-base-200/90 backdrop-blur border border-base-300 rounded-xl p-3 mb-10">
    <div class="flex items-center justify-between mb-2">
        <span class="text-xs font-bold uppercase tracking-wider opacity-70">Progression du cours</span>
        <span id="progress-text" class="text-xs font-bold text-primary">0%</span>
    </div>
    <div class="w-full bg-base-300 rounded-full h-2.5 overflow-hidden">
        <div id="progress-bar" class="bg-primary h-2.5 rounded-full transition-all duration-300" style="width: 0%"></div>
    </div>
    <div class="flex justify-between mt-2 text-xs opacity-70">
        <span>Télécharger</span>
        <span>USB bootable</span>
        <span>Boot</span>
        <span>Installation</span>
    </div>
</div>

<div class="mt-10">
            <h2 class="text-3xl font-bold mb-8 flex items-center gap-3">
                <i data-lucide="list-ordered" class="w-8 h-8 text-primary"></i>
                Étapes d'installation
            </h2>

            <ul class="timeline timeline-vertical lg:timeline-horizontal max-w-6xl mx-auto">
                <li>
                    <div class="timeline-start timeline-box bg-base-100 shadow-lg border-l-4 border-primary">
                        <div class="flex items-center gap-2 font-bold text-primary">
                            <i data-lucide="download" class="w-5 h-5"></i>
                            <span>Étape 1</span>
                        </div>
                        <p class="text-sm mt-1">Télécharger Ubuntu</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="rounded-full bg-primary text-primary-content w-8 h-8 flex items-center justify-center font-bold">1</div>
                    </div>
                    <hr class="bg-primary" />
                </li>
                <li>
                    <hr class="bg-primary" />
                    <div class="timeline-middle">
                        <div class="rounded-full bg-primary text-primary-content w-8 h-8 flex items-center justify-center font-bold">2</div>
                    </div>
                    <div class="timeline-end timeline-box bg-base-100 shadow-lg border-l-4 border-secondary">
                        <div class="flex items-center gap-2 font-bold text-secondary">
                            <i data-lucide="usb" class="w-5 h-5"></i>
                            <span>Étape 2</span>
                        </div>
                        <p class="text-sm mt-1">Créer USB bootable</p>
                    </div>
                    <hr class="bg-secondary" />
                </li>
                <li>
                    <hr class="bg-secondary" />
                    <div class="timeline-start timeline-box bg-base-100 shadow-lg border-l-4 border-accent">
                        <div class="flex items-center gap-2 font-bold text-accent">
                            <i data-lucide="power" class="w-5 h-5"></i>
                            <span>Étape 3</span>
                        </div>
                        <p class="text-sm mt-1">Démarrer sur USB</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="rounded-full bg-accent text-accent-content w-8 h-8 flex items-center justify-center font-bold">3</div>
                    </div>
                    <hr class="bg-accent" />
                </li>
                <li>
                    <hr class="bg-accent" />
                    <div class="timeline-middle">
                        <div class="rounded-full bg-accent text-accent-content w-8 h-8 flex items-center justify-center font-bold">4</div>
                    </div>
                    <div class="timeline-end timeline-box bg-base-100 shadow-lg border-l-4 border-warning">
                        <div class="flex items-center gap-2 font-bold text-warning">
                            <i data-lucide="settings" class="w-5 h-5"></i>
                            <span>Étape 4</span>
                        </div>
                        <p class="text-sm mt-1">Installation</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="mt-16 space-y-8">

<div class="card bg-base-100 shadow-xl" id="section-step1">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                                <span class="text-primary-content font-bold text-xl">1</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Télécharger Ubuntu</h3>
                            <p class="text-sm opacity-70">La première étape consiste à obtenir le fichier ISO d'Ubuntu</p>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-6">
                        <i data-lucide="alert-triangle" class="w-6 h-6"></i>
                        <span class="text-sm">Nous allons installer <strong>Ubuntu 24.04 LTS</strong> (Long Term Support). Cette version est suporté jusqu'en 2029, c'est le choix le plus stable pour un débutant.</span>
                    </div>

                    <div class="bg-base-200 rounded-xl p-6 mb-6">
                        <h4 class="font-bold mb-4 flex items-center gap-2">
                            <i data-lucide="hard-drive" class="w-5 h-5"></i>
                            Détails du téléchargement
                        </h4>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="opacity-70">Version :</span>
                                <span class="font-semibold ml-2">Ubuntu 24.04.1 LTS</span>
                            </div>
                            <div>
                                <span class="opacity-70">Taille :</span>
                                <span class="font-semibold ml-2">~4.5 Go</span>
                            </div>
                            <div>
                                <span class="opacity-70">Architecture :</span>
                                <span class="font-semibold ml-2">amd64</span>
                            </div>
                            <div>
                                <span class="opacity-70">Format :</span>
                                <span class="font-semibold ml-2">ISO</span>
                            </div>
                        </div>
                    </div>

                    <a href="https://ubuntu.com/download/desktop" target="_blank" class="btn btn-primary btn-lg w-full md:w-auto">
                        <i data-lucide="download" class="w-5 h-5"></i>
                        Télécharger Ubuntu 24.04 LTS
                    </a>

                    <p class="text-sm opacity-70 mt-4">
                        <i data-lucide="info" class="w-4 h-4 inline"></i>
                       Cliquez sur "Download" vert. Le téléchargement commencera automatiquement.
                    </p>
                </div>
            </div>

<div class="card bg-base-100 shadow-xl" id="section-step2">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center">
                                <span class="text-secondary-content font-bold text-xl">2</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Créer une clé USB bootable</h3>
                            <p class="text-sm opacity-70">Transformez votre clé USB en média d'installation</p>
                        </div>
                    </div>

                    <div class="alert alert-warning mb-6">
                        <i data-lucide="alert-triangle" class="w-6 h-6"></i>
                        <span class="text-sm"><strong>Attention :</strong> Toutes les données de la clé USB seront effacées. Sauvegardez vos fichiers importants avant de continuer.</span>
                    </div>

                    <h4 class="font-bold mb-4 flex items-center gap-2">
                        <i data-lucide="monitor" class="w-5 h-5"></i>
                        Choisissez votre système d'exploitation actuel :
                    </h4>

                    <div class="tabs tabs-boxed bg-base-200 mb-6">
                        <input type="radio" name="os_choice" id="tab-windows" class="tab" checked />
                        <label for="tab-windows" class="tab">Windows</label>

                        <input type="radio" name="os_choice" id="tab-linux" class="tab" />
                        <label for="tab-linux" class="tab">Linux</label>

                        <input type="radio" name="os_choice" id="tab-mac" class="tab" />
                        <label for="tab-mac" class="tab">macOS</label>
                    </div>

                    <div="tab-content">
                        <div id="windows-content" class="space-y-4">
                            <div class="bg-base-200 rounded-xl p-5">
                                <h5 class="font-bold text-lg mb-3 flex items-center gap-2">
                                    <img src="https://cdn.simpleicons.org/windows/0078D4" alt="Windows" class="w-6 h-6">
                                    Méthode recommandée : Rufus (Windows)
                                </h5>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-5">
                                    <div class="relative">
                                        <img src="public/rufus1.png" alt="Rufus" class="w-full rounded-lg border-2 border-primary">
                                        <span class="absolute -top-2 -left-2 bg-primary text-primary-content w-7 h-7 rounded-full flex items-center justify-center font-bold text-sm shadow-lg">①</span>
                                    </div>
                                    <div class="relative">
                                        <img src="public/rufus2.png" alt="Rufus" class="w-full rounded-lg border-2 border-secondary">
                                        <span class="absolute -top-2 -left-2 bg-secondary text-secondary-content w-7 h-7 rounded-full flex items-center justify-center font-bold text-sm shadow-lg">②</span>
                                    </div>
                                    <div class="relative">
                                        <img src="public/rufus3.png" alt="Rufus" class="w-full rounded-lg border-2 border-accent">
                                        <span class="absolute -top-2 -left-2 bg-accent text-accent-content w-7 h-7 rounded-full flex items-center justify-center font-bold text-sm shadow-lg">③</span>
                                    </div>
                                    <div class="relative">
                                        <img src="public/rufus4.png" alt="Rufus - Format exFAT" class="w-full rounded-lg border-2 border-warning">
                                        <span class="absolute -top-2 -left-2 bg-warning text-warning-content w-7 h-7 rounded-full flex items-center justify-center font-bold text-sm shadow-lg">④</span>
                                    </div>
                                    <div class="relative">
                                        <img src="public/rufus5.png" alt="Rufus - Bouton START" class="w-full rounded-lg border-2 border-success">
                                        <span class="absolute -top-2 -left-2 bg-success text-success-content w-7 h-7 rounded-full flex items-center justify-center font-bold text-sm shadow-lg">⑤</span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                    <div class="bg-base-100 p-3 rounded-lg">
                                        <span class="badge badge-primary badge-sm">①</span>
                                        <strong> Sélectionner l'ISO →</strong>
                                        <p class="text-xs mt-1 opacity-80">Cliquez sur le bouton <strong>SELECT</strong> pour choisir le fichier <code class="bg-base-300 px-1 rounded">ubuntu-24.04-desktop-amd64.iso</code> que vous avez téléchargé. Rufus doit charger l'ISO avant toute chose.</p>
                                    </div>
                                    <div class="bg-base-100 p-3 rounded-lg">
                                        <span class="badge badge-secondary badge-sm">②</span>
                                        <strong> Schéma de partition → GPT</strong>
                                        <p class="text-xs mt-1 opacity-80">
                                            <strong>GPT</strong> est le standard moderne (UEFI). Il supporte plus de 2 To, démarre plus vite et gère jusqu'à 128 partitions.
                                            <br><span class="opacity-70">❌ MBR</span> = ancien standard, seulement pour BIOS legacy(<2012).
                                            <br><span class="opacity-70">✅ GPT</span> = quasi tous les PCs de 2012 à aujourd'hui.
                                        </p>
                                    </div>
                                    <div class="bg-base-100 p-3 rounded-lg">
                                        <span class="badge badge-accent badge-sm">③</span>
                                        <strong> Système cible → BIOS ou UEFI</strong>
                                        <p class="text-xs mt-1 opacity-80">
                                            <strong>BIOS ou UEFI</strong> est le plus compatible : fonctionne sur tous les PCs modernes ET anciens.
                                            <br><span class="opacity-70">UEFI seulement</span> = bloque les vieux BIOS.
                                            <br><span class="opacity-70">BIOS seulement</span> = pas de Secure Boot.
                                        </p>
                                    </div>
                                    <div class="bg-base-100 p-3 rounded-lg">
                                        <span class="badge badge-warning badge-sm">④</span>
                                        <strong> Système de fichiers → exFAT</strong>
                                        <p class="text-xs mt-1 opacity-80">
                                            <strong>✅ exFAT</strong> = compatible Windows/macOS/Linux, pas de limite 4 Go.
                                            <br><span class="opacity-70">❌ FAT32</span> = incompatible (fichiers >4 Go).
                                            <br><span class="opacity-70">❌ NTFS</span> = problèmes de boot UEFI.
                                        </p>
                                    </div>
                                    <div class="bg-base-100 p-3 rounded-lg">
                                        <span class="badge badge-success badge-sm">⑤</span>
                                        <strong> État READY → START</strong>
                                        <p class="text-xs mt-1 opacity-80">Quand l'état affiche <strong>READY</strong>, cliquez sur <strong>START</strong>. Confirmez, puis attendez ~5-10 min. Ne retirez pas la clé USB pendant la copie.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="linux-content" class="hidden space-y-4">
                            <div class="bg-base-200 rounded-xl p-5">
                                <h5 class="font-bold text-lg mb-3 flex items-center gap-2">
                                    <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Linux" class="w-6 h-6">
                                    Méthode 1 : balenaEtcher (Recommandée)
                                </h5>
                                <ol class="space-y-3 text-sm">
                                    <li class="flex gap-3">
                                        <span class="bg-secondary text-secondary-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">1</span>
                                        <span>Installez balenaEtcher : <code class="bg-base-300 px-2 py-1 rounded">sudo apt install balena-etcher-electron</code></span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-secondary text-secondary-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">2</span>
                                        <span>Ouvrez balenaEtcher et cliquez sur "Flash from file"</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-secondary text-secondary-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">3</span>
                                        <span>Sélectionnez le fichier .iso Ubuntu</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-secondary text-secondary-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">4</span>
                                        <span>Vérifiez que votre clé USB est sélectionnée</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-secondary text-secondary-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">5</span>
                                        <span>Cliquez sur "Flash!" et attendez la fin</span>
                                    </li>
                                </ol>
                            </div>

                            <div class="bg-base-200 rounded-xl p-5">
                                <h5 class="font-bold text-lg mb-3 flex items-center gap-2">
                                    <i data-lucide="terminal" class="w-6 h-6"></i>
                                    Méthode 2 : Ligne de commande (dd)
                                </h5>
                                <div class="bg-zinc-900 rounded-lg p-4 font-mono text-sm text-green-400">
                                    <p># Identifier votre clé USB (très important !)</p>
                                    <p class="text-white">lsblk</p>
                                    <br>
                                    <p class="text-white"># Exemple : si votre clé est /dev/sdb</p>
                                    <p class="text-yellow-400">sudo dd if=~/Downloads/ubuntu-24.04.iso of=/dev/sdb bs=4M status=progress</p>
                                </div>
                                <p class="text-xs mt-2 opacity-70">
                                    <i data-lucide="alert-triangle" class="w-3 h-3 inline"></i>
                                    Attention : dd efface définitivement les données. Vérifiez bien le chemin du périphérique !
                                </p>
                            </div>
                        </div>

                        <div id="mac-content" class="hidden space-y-4">
                            <div class="bg-base-200 rounded-xl p-5">
                                <h5 class="font-bold text-lg mb-3 flex items-center gap-2">
                                    <img src="https://cdn.simpleicons.org/apple/ffffff" alt="macOS" class="w-6 h-6">
                                    Méthode : balenaEtcher (macOS)
                                </h5>
                                <ol class="space-y-3 text-sm">
                                    <li class="flex gap-3">
                                        <span class="bg-accent text-accent-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">1</span>
                                        <span>Téléchargez <a href="https://etcher.balena.io/" target="_blank" class="link link-primary">balenaEtcher</a> pour macOS</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-accent text-accent-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">2</span>
                                        <span>Ouvrez le .dmg et glissez balenaEtcher dans Applications</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-accent text-accent-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">3</span>
                                        <span>Insérez votre clé USB</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="bg-accent text-accent-content w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">4</span>
                                        <span>Ouvrez balenaEtcher, sélectionnez l'ISO et cliquez sur "Flash!"</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="card bg-base-100 shadow-xl" id="section-step3">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
                                <span class="text-accent-content font-bold text-xl">3</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Démarrer sur la clé USB</h3>
                            <p class="text-sm opacity-70">Configurez votre ordinateur pour booter sur la clé USB</p>
                        </div>
                    </div>

                    <div class="bg-base-200 rounded-xl p-6 mb-6">
                        <h4 class="font-bold mb-4 flex items-center gap-2">
                            <i data-lucide="keyboard" class="w-5 h-5"></i>
                            Comment entrer dans le BIOS/UEFI ?
                        </h4>
                        <p class="text-sm mb-4">Redémarrez votre ordinateur et appuyez rapidement sur la touche correspondant à votre marque :</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-sm">
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">Dell</span>
                                <span class="block text-xs opacity-70">F2 ou F12</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">HP</span>
                                <span class="block text-xs opacity-70">F10 ou Esc</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">Lenovo</span>
                                <span class="block text-xs opacity-70">F1 ou F2</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">ASUS</span>
                                <span class="block text-xs opacity-70">F2 ou Del</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">Acer</span>
                                <span class="block text-xs opacity-70">F2 ou Del</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">MSI</span>
                                <span class="block text-xs opacity-70">Del</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">Samsung</span>
                                <span class="block text-xs opacity-70">F2 ou Esc</span>
                            </div>
                            <div class="bg-base-100 p-3 rounded-lg text-center">
                                <span class="font-bold">Toshiba</span>
                                <span class="block text-xs opacity-70">F2</span>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info mb-6">
                        <i data-lucide="info" class="w-6 h-6"></i>
                        <div class="text-sm">
                            <p>Une fois dans le BIOS/UEFI :</p>
                            <ol class="list-decimal ml-4 mt-2 space-y-1">
                                <li>Allez dans l'onglet <strong>"Boot"</strong> ou <strong>"Démarrage"</strong></li>
                                <li>Changez l'ordre de boot pour mettre votre clé USB en premier</li>
                                <li>Sauvegardez (généralement <strong>F10</strong>) et quittez</li>
                            </ol>
                        </div>
                    </div>

                    <div class="bg-warning/20 border border-warning/50 rounded-xl p-4 text-sm">
                        <p class="font-bold flex items-center gap-2 mb-2">
                            <i data-lucide="lightbulb" class="w-4 h-4"></i>
                            Astuce pour les PC Windows 11 modernes
                        </p>
                        <p>Windows 11 utilise le "Secure Boot" par défaut. Vous pouvez désactiver temporairement le Secure Boot dans le BIOS, ou Ubuntu 24.04 LTS est généralement compatible avec Secure Boot activé.</p>
                    </div>
                </div>
            </div>

<div class="card bg-base-100 shadow-xl" id="section-step4">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-warning flex items-center justify-center">
                                <span class="text-warning-content font-bold text-xl">4</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Installation d'Ubuntu</h3>
                            <p class="text-sm opacity-70">Suivez les étapes de l'assistant d'installation</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="border-l-4 border-primary pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-primary">4.1</span>
                                Langue et connexion réseau
                            </h4>
                            <p class="text-sm mt-2 opacity-80">1. Sélectionnez <strong>"Français"</strong> comme langue</p>
                            <p class="text-sm opacity-80">2. Connectez-vous à votre WiFi (recommandé pour les mises à jour)</p>
                            <p class="text-sm opacity-80">3. Cliquez sur "Continuer"</p>
                        </div>

                        <div class="border-l-4 border-secondary pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-secondary">4.2</span>
                                Mises à jour et logiciels
                            </h4>
                            <p class="text-sm mt-2 opacity-80">Cochez les deux options :</p>
                            <div class="bg-base-200 p-3 rounded-lg mt-2">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" checked class="checkbox checkbox-primary" />
                                    <span>Télécharger les mises à jour lors de l'installation</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer mt-2">
                                    <input type="checkbox" checked class="checkbox checkbox-primary" />
                                    <span>Installer les logiciels tiers pour le graphique et le WiFi</span>
                                </label>
                            </div>
                            <p class="text-xs mt-2 opacity-70">Ces options permettent à Ubuntu de fonctionner parfaitement dès le premier démarrage.</p>
                        </div>

                        <div class="border-l-4 border-accent pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-accent">4.3</span>
                                Type d'installation
                            </h4>
                            <p class="text-sm mt-2 opacity-80">Pour un <strong>débutant</strong>, choisissez :</p>
                            <div class="bg-base-200 p-4 rounded-xl mt-2 border-2 border-primary">
                                <p class="font-bold text-primary">• Installation normale</p>
                                <p class="text-sm opacity-80">Includes LibreOffice, Firefox, Games, etc.</p>
                            </div>
                            <div class="bg-base-200 p-4 rounded-xl mt-2 opacity-60">
                                <p class="font-bold">• Installation minimale</p>
                                <p class="text-sm opacity-80">Browser, utilities uniquement (pour experts)</p>
                            </div>
                            <div class="bg-base-200 p-4 rounded-xl mt-2 opacity-60">
                                <p class="font-bold">• Installation avancée (cryptage)</p>
                                <p class="text-sm opacity-80">Pour utilisateurs avancés</p>
                            </div>
                        </div>

                        <div class="border-l-4 border-warning pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-warning">4.4</span>
                                Partition du disque
                            </h4>
                            <p class="text-sm mt-2 opacity-80">Pour <strong>remplacer complètement Windows</strong> par Ubuntu :</p>
                            <div class="bg-error/20 border border-error/50 p-4 rounded-xl mt-2">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="partition" class="radio radio-error" checked />
                                    <div>
                                        <p class="font-bold">Effacer le disque et installer Ubuntu</p>
                                        <p class="text-sm opacity-80">Cela supprimera Windows et toutes vos données. Utilisez cette option uniquement si vous voulez un dual boot ou remplacer complètement votre OS.</p>
                                    </div>
                                </label>
                            </div>
                            <div class="alert alert-warning mt-3">
                                <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                                <span class="text-sm">Avant de continuer, <strong>sauvegardez vos fichiers importants</strong> !</span>
                            </div>
                        </div>

                        <div class="border-l-4 border-success pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-success">4.5</span>
                                Informations utilisateur
                            </h4>
                            <p class="text-sm mt-2 opacity-80">Remplissez les informations suivantes :</p>
                            <div class="bg-base-200 p-4 rounded-xl mt-2 space-y-3">
                                <div>
                                    <label class="text-sm font-bold">Votre nom :</label>
                                    <input type="text" placeholder="Jean" class="input input-bordered w-full max-w-xs ml-2" />
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Nom de l'ordinateur :</label>
                                    <input type="text" placeholder="jean-ubuntu" class="input input-bordered w-full max-w-xs ml-2" />
                                    <p class="text-xs mt-1 opacity-70">C'est le nom qui apparaîtra sur le réseau</p>
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Nom d'utilisateur :</label>
                                    <input type="text" placeholder="jean" class="input input-bordered w-full max-w-xs ml-2" />
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Mot de passe :</label>
                                    <input type="password" placeholder="********" class="input input-bordered w-full max-w-xs ml-2" />
                                </div>
                                <div class="flex gap-4 mt-2">
                                    <label class="flex items-center gap-2">
                                        <input type="radio" name="login" class="radio radio-sm" checked />
                                        <span class="text-sm">Connexion automatique</span>
                                    </label>
                                    <label class="flex items-center gap-2">
                                        <input type="radio" name="login" class="radio radio-sm" />
                                        <span class="text-sm">Exiger mon mot de passe</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="border-l-4 border-info pl-4">
                            <h4 class="font-bold text-lg flex items-center gap-2">
                                <span class="badge badge-info">4.6</span>
                                Fuseau horaire
                            </h4>
                            <p class="text-sm mt-2 opacity-80">Ubuntu détecte généralement automatiquement votre fuseau horaire. Vous pouvez le modifier en cliquant sur la carte ou en recherchant votre ville.</p>
                            <p class="text-sm mt-2">Ex : <strong>"Dakar"</strong> pour le Sénégal (UTC+0)</p>
                        </div>

                        <div class="bg-base-200 rounded-xl p-5">
                            <h4 class="font-bold text-lg flex items-center gap-2 mb-3">
                                <i data-lucide="loader" class="w-5 h-5 animate-spin text-primary"></i>
                                Lancement de l'installation
                            </h4>
                            <p class="text-sm opacity-80 mb-3">Cliquez sur "Installer" et laissez Ubuntu travailler !</p>
                            <div class="flex items-center gap-3 text-sm">
                                <div class="badge badge-primary">Durée : ~15-20 minutes</div>
                                <div class="badge badge-secondary">Copying files...</div>
                                <div class="badge badge-accent">Installing system...</div>
                            </div>
                            <p class="text-sm mt-3 opacity-70">Vous pouvez continuer à utiliser votre ordinateur pendant l'installation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-gradient-to-r from-green-600 to-emerald-600 text-white shadow-xl">
                <div class="card-body">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center">
                            <i data-lucide="check-circle" class="w-10 h-10"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">Installation terminée !</h3>
                            <p class="opacity-90">Ubuntu est maintenant prêt à être utilisé</p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-xl p-5 mb-4">
                        <h4 class="font-bold mb-3">Prochaines étapes :</h4>
                        <ol class="space-y-2 text-sm">
                            <li class="flex gap-3">
                                <span class="bg-white/20 w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">1</span>
                                <span>Retirez la clé USB quand prompted et appuyez sur Entrée</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="bg-white/20 w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">2</span>
                                <span>Votre ordinateur va redémarrer sur Ubuntu</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="bg-white/20 w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">3</span>
                                <span>Bienvenue ! Complétez les informations de premier démarrage</span>
                            </li>
                            <li class="flex gap-3">
                                <span class="bg-white/20 w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 font-bold">4</span>
                                <span>Vérifiez que le son, le WiFi et les graphiques fonctionnent</span>
                            </li>
                        </ol>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="index.php" class="btn btn-outline border-white text-white hover:bg-white hover:text-green-700">
                            <i data-lucide="home" class="w-4 h-4"></i>
                            Retour à l'accueil
                        </a>
                        <a href="course_view.php?id=commandes_base" class="btn bg-white text-green-700 hover:bg-green-100">
                            <i data-lucide="terminal" class="w-4 h-4"></i>
                            Commencer avec le terminal
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();

        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');
        const sections = [
            { id: 'section-step1', weight: 0.25 },
            { id: 'section-step2', weight: 0.50 },
            { id: 'section-step3', weight: 0.75 },
            { id: 'section-step4', weight: 1.00 }
        ];

        function updateProgress() {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = Math.min(Math.max((scrollTop / docHeight) * 100, 0), 100);

            progressBar.style.width = scrollPercent + '%';
            progressText.textContent = Math.round(scrollPercent) + '%';

            const sectionElements = sections.map(s => ({
                ...s,
                element: document.getElementById(s.id)
            }));

            for (let i = sectionElements.length - 1; i >= 0; i--) {
                const rect = sectionElements[i].element.getBoundingClientRect();
                if (rect.top <= window.innerHeight * 0.4) {
                    const pct = Math.round(sectionElements[i].weight * 100);
                    progressBar.style.width = pct + '%';
                    progressText.textContent = pct + '%';
                    break;
                }
            }
        }

        window.addEventListener('scroll', updateProgress, { passive: true });
        window.addEventListener('resize', updateProgress, { passive: true });
        updateProgress();

        document.querySelectorAll('input[name="os_choice"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.getElementById('windows-content').classList.add('hidden');
                document.getElementById('linux-content').classList.add('hidden');
                document.getElementById('mac-content').classList.add('hidden');

                if (this.id === 'tab-windows') {
                    document.getElementById('windows-content').classList.remove('hidden');
                } else if (this.id === 'tab-linux') {
                    document.getElementById('linux-content').classList.remove('hidden');
                } else if (this.id === 'tab-mac') {
                    document.getElementById('mac-content').classList.remove('hidden');
                }
            });
        });
    </script>
</body>
</html>