<?php
require_once 'data/distros.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if (!isset($distros[$id])) {
    header("Location: distributions.php");
    exit;
}

$distro = $distros[$id];
?>

<!DOCTYPE html>
<html lang="fr" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $distro['name']; ?> - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide"></script>
</head>
<body class="bg-base-300 min-h-screen">

    <?php include 'header.php'; ?>

    <!-- Hero Section with Dynamic Banner -->
    <div class="hero min-h-[40vh] bg-gradient-to-br <?php echo $distro['banner_color']; ?> relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
        <div class="hero-content text-center text-white z-10">
            <div class="max-w-md flex flex-col items-center gap-6">
                <div class="avatar shadow-2xl p-4 bg-white/10 backdrop-blur-md rounded-2xl">
                    <div class="w-24 md:w-32">
                        <img src="<?php echo $distro['logo']; ?>" alt="<?php echo $distro['name']; ?> logo" />
                    </div>
                </div>
                <div>
                    <h1 class="text-4xl md:text-6xl font-black mb-2 uppercase tracking-tighter"><?php echo $distro['name']; ?></h1>
                    <p class="text-xl md:text-2xl font-light italic opacity-90">"<?php echo $distro['tagline']; ?>"</p>
                    <div class="badge <?php echo $distro['difficulty_color']; ?> mt-4 badge-lg p-4 font-bold"><?php echo $distro['difficulty']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-4 py-12 -mt-10 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Column: Specs & Info -->
            <div class="lg:col-span-1 flex flex-col gap-6">
                <div class="card bg-base-100 shadow-xl border border-white/5">
                    <div class="card-body gap-4">
                        <h3 class="card-title text-primary border-b border-primary/20 pb-2">Spécifications</h3>
                        
                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-base-200 rounded-lg"><i data-lucide="layers" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs opacity-50 uppercase font-bold">Base</p>
                                <p class="font-semibold"><?php echo $distro['base']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-base-200 rounded-lg"><i data-lucide="calendar" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs opacity-50 uppercase font-bold">Sortie initiale</p>
                                <p class="font-semibold"><?php echo $distro['release_year']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-base-200 rounded-lg"><i data-lucide="package" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs opacity-50 uppercase font-bold">Gestionnaire</p>
                                <p class="font-semibold"><?php echo $distro['pkg_manager']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-base-200 rounded-lg"><i data-lucide="cpu" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs opacity-50 uppercase font-bold">Init System</p>
                                <p class="font-semibold"><?php echo $distro['init_system']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="p-2 bg-base-200 rounded-lg"><i data-lucide="layout" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs opacity-50 uppercase font-bold">Bureau par défaut</p>
                                <p class="font-semibold"><?php echo $distro['desktop']; ?></p>
                            </div>
                        </div>

                        <div class="card-actions mt-4">
                            <a href="<?php echo $distro['website']; ?>" target="_blank" class="btn btn-primary w-full">
                                <i data-lucide="external-link"></i> Site officiel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl border border-white/5">
                    <div class="card-body">
                        <h3 class="card-title text-secondary border-b border-secondary/20 pb-2">Philosophie</h3>
                        <p class="text-sm italic opacity-80 leading-relaxed">
                            <?php echo $distro['philosophy']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Description & Terminal -->
            <div class="lg:col-span-2 flex flex-col gap-8">
                
                <!-- About Section -->
                <div class="bg-base-100 p-8 rounded-2xl shadow-xl border border-white/5">
                    <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="info" class="text-primary"></i> À propos de <?php echo $distro['name']; ?>
                    </h2>
                    <p class="text-lg leading-relaxed opacity-90 mb-6">
                        <?php echo $distro['description']; ?>
                    </p>
                </div>

                <!-- Terminal Mockup -->
                <div class="mockup-code bg-zinc-900 border border-white/10 shadow-2xl">
                    <pre data-prefix="$"><code># Installer neofetch sur <?php echo $distro['name']; ?></code></pre> 
                    <pre data-prefix=">"><code><?php echo $distro['install_cmd']; ?></code></pre>
                    <pre data-prefix=" " class="text-success"><code>Fetching packages... [DONE]</code></pre>
                    <pre data-prefix=" " class="text-warning"><code>Installation complete!</code></pre>
                </div>

                <!-- Quick Tips -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="alert bg-base-100 shadow-lg border border-white/5">
                        <i data-lucide="lightbulb" class="text-yellow-500"></i>
                        <div>
                            <h3 class="font-bold">Le saviez-vous ?</h3>
                            <div class="text-xs opacity-70">Le nom de cette distribution reflète sa philosophie centrale.</div>
                        </div>
                    </div>
                    <div class="alert bg-base-100 shadow-lg border border-white/5">
                        <i data-lucide="command" class="text-blue-500"></i>
                        <div>
                            <h3 class="font-bold">Commande utile</h3>
                            <div class="text-xs opacity-70">Utilisez <code>man</code> pour obtenir de l'aide sur n'importe quel outil.</div>
                        </div>
                    </div>
                </div>

                <!-- Action Bar -->
                <div class="flex justify-between items-center bg-base-200 p-6 rounded-2xl">
                    <a href="distributions.php" class="btn btn-ghost gap-2">
                        <i data-lucide="arrow-left"></i> Retour
                    </a>
                    <a href="<?php echo $distro['download_url']; ?>" target="_blank" class="btn btn-primary btn-lg gap-3">
                        <i data-lucide="download"></i> Télécharger l'ISO
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
