<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide"></script>
</head>

<body class="bg-base-200 min-h-screen">

    <?php include 'header.php'; ?>

    <!-- On réduit la marche du haut sur mobile (mt-4) et on l'augmente sur PC (md:mt-10) -->
    <main class="max-w-6xl mx-auto p-2 md:p-8 mt-4 md:mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-8">

            <!-- Colonne Gauche : Carte d'identité -->
            <div class="flex flex-col gap-4 md:gap-6">
                <div class="card bg-base-100 shadow-xl overflow-hidden">
                    <div class="h-24 md:h-32 bg-primary"></div>
                    <div class="card-body items-center text-center -mt-12 md:-mt-16 p-6">
                        <div class="avatar placeholder">
                            <div
                                class="bg-neutral text-neutral-content rounded-full w-20 md:w-24 ring ring-primary ring-offset-base-100 ring-offset-2">
                                <span
                                    class="text-2xl md:text-3xl font-bold"><?php echo substr($_SESSION["username"], 0, 1); ?></span>
                            </div>
                        </div>
                        <h2 class="card-title text-xl md:text-2xl mt-4"><?php echo $_SESSION["nom_complet"]; ?></h2>
                        <div class="badge badge-primary badge-sm md:badge-md">Apprenti Linux</div>

                        <div class="divider my-2"></div>

                        <div class="flex flex-col gap-3 w-full text-left text-sm md:text-base">
                            <div class="flex items-center gap-3 opacity-70">
                                <i data-lucide="user" class="w-4 h-4"></i>
                                <span class="truncate">@<?php echo $_SESSION["username"]; ?></span>
                            </div>
                            <div class="flex items-center gap-3 opacity-70">
                                <i data-lucide="mail" class="w-4 h-4"></i>
                                <span class="truncate"><?php echo $_SESSION["email"]; ?></span>
                            </div>
                        </div>

                        <div class="card-actions w-full mt-6">
                            <a href="auth/logout.php" class="btn btn-outline btn-error btn-sm md:btn-md w-full">
                                <i data-lucide="log-out" class="w-4 h-4"></i>
                                Déconnexion
                            </a>
                        </div>

                        <div class="card-actions w-full mt-6 flex flex-col gap-2">
                            <a href="edit_profile.php" class="btn btn-primary btn-sm md:btn-md w-full">
                                <!-- Bouton Modifier -->
                                <i data-lucide="edit-3" class="w-4 h-4"></i>
                                Modifier mon profil
                            </a>

                            <!-- Bouton Déconnexion existant -->
                            <a href="auth/logout.php" class="btn btn-outline btn-error btn-sm md:btn-md w-full">
                                <i data-lucide="log-out" class="w-4 h-4"></i>
                                Déconnexion
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Stats rapides -->
                <div class="stats shadow bg-base-100 w-full sm:stats-horizontal lg:stats-vertical">
                    <div class="stat p-4 md:p-6">
                        <div class="stat-title text-xs">Cours terminés</div>
                        <div class="stat-value text-primary text-xl md:text-2xl">0</div>
                        <div class="stat-desc text-[10px]">Continuez l'effort !</div>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite : Progression et Activité -->
            <div class="lg:col-span-2 flex flex-col gap-4 md:gap-6">
                <!-- Message de bienvenue -->
                <div
                    class="bg-base-100 p-6 md:p-8 rounded-2xl shadow-xl flex items-center justify-between overflow-hidden relative">
                    <div class="z-10 pr-4">
                        <h1 class="text-xl md:text-3xl font-bold mb-1">Bon retour !</h1>
                        <p class="text-xs md:text-base opacity-70">Besoin d'aide sur une commande Bash ?</p>
                    </div>
                    <i data-lucide="terminal"
                        class="w-20 h-20 md:w-32 md:h-32 absolute -right-4 -bottom-4 opacity-5 text-primary"></i>
                </div>

                <!-- Progression des cours -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body p-6 md:p-8">
                        <h3 class="card-title text-lg md:text-xl mb-4">Ma Progression</h3>
                        <div class="flex flex-col gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-xs md:text-sm">Fondamentaux de Linux</span>
                                    <span class="text-xs opacity-70">10%</span>
                                </div>
                                <progress class="progress progress-primary w-full" value="10" max="100"></progress>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-xs md:text-sm">Gestion des serveurs</span>
                                    <span class="text-xs opacity-70">0%</span>
                                </div>
                                <progress class="progress progress-secondary w-full" value="0" max="100"></progress>
                            </div>
                        </div>
                        <div class="card-actions justify-end mt-6">
                            <a href="cours.php" class="btn btn-primary btn-sm md:btn-md">Voir les cours</a>
                        </div>
                    </div>
                </div>

                <!-- Petit menu mobile de raccourcis -->
                <div class="grid grid-cols-2 gap-4">
                    <div
                        class="card bg-primary text-primary-content shadow-xl cursor-pointer hover:scale-95 transition-transform">
                        <div class="card-body p-4 items-center text-center">
                            <i data-lucide="award" class="w-6 h-6 mb-1"></i>
                            <span class="text-[10px] font-bold uppercase tracking-wider">Défis</span>
                        </div>
                    </div>
                    <div
                        class="card bg-secondary text-secondary-content shadow-xl cursor-pointer hover:scale-95 transition-transform">
                        <div class="card-body p-4 items-center text-center">
                            <i data-lucide="book-open" class="w-6 h-6 mb-1"></i>
                            <span class="text-[10px] font-bold uppercase tracking-wider">Guides</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>