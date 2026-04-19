<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


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
    <header class="hidden lg:flex justify-between sticky top-0 z-50 bg-base-100 shadow-lg p-4">
        <div class="bg-neutral-500 font-bold text-xl p-2 rounded-xl cursor-pointer">
            >__
            <span class="text-blue-500">RichLabs</span>
        </div>


        <div class=" hidden md:flex md:justify-between lg:flex lg:justify-between">
            <ul class="flex justify-between items-center gap-7">
                <li class="flex gap-1 items-center">
                    <i data-lucide="house" class="w-4 h-4"></i>
                    <a href="index.php">Accueil</a>
                </li>
                <li class="flex gap-2 items-center">
                    <i data-lucide="inbox" class="w-4 h-4"></i>
                    <a href="distributions.php">Distribution</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="book-open" class="w-4 h-4"></i>
                    <a href="cours.php">Cours</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="library" class="w-4 h-4"></i>
                    <a href="ressources.php">Ressources</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="info" class="h-4 w-4"></i>
                    <a href="about.php">A propos</a>
                </li>
            </ul>
        </div>

        <div class="hidden md:flex md:items-center gap-2 lg:flex lg:items-center">
            <?php
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true):
                ?>

                <!-- affiché si l'utilisateur est connecter!-->
                <a href="profile.php" class="btn btn-ghost gap-2">

                    <div class="avatar placeholder">
                        <div class="bg-neutral text-neutral-content rounded-full w-8">
                            <span class="text-xl">
                                <?php echo substr($_SESSION["username"], 0, 1); ?>
                            </span>
                        </div>
                    </div>

                    Mon Profil
                </a>

                <a href="auth/logout.php" class="btn btn-error btn-outline">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                    Se deconnecter
                </a>

            <?php else: ?>
                <!-- affiché si l'utilisateur n'est pas connecté !-->


                <button class="btn" onClick="window.location.href='/auth/login.php'">
                    <i data-lucide="log-in" class="w-5 h-4"></i>
                    Se connecter
                </button>

                <button class="btn btn-primary" onClick="window.location.href='/auth/register.php'">
                    <i data-lucide="user-plus"></i>
                    S'inscrire
                </button>

            <?php endif; ?>

        </div>
    </header>

    <div class="navbar bg-base-100 shadow-sm lg:hidden p-2 sticky top-0 z-[100]">
        <div class="flex-1">
            <a class="text-xl bg-neutral-500 p-3 rounded-md" href="index.php">
                >_
                <span class="text-blue-500 font-bold">RichLabs</span>
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-15">
                <li>
                    <details>
                        <summary>
                            <i data-lucide="menu"></i>
                        </summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li>
                                <a href="index.php">
                                    <i data-lucide="house"></i>
                                    Accueil
                                </a>
                            </li>

                            <li>
                                <a href="distributions.php">
                                    <i data-lucide="inbox"></i>
                                    Distro
                                </a>
                            </li>
                            <li>
                                <a href="cours.php">
                                    <i data-lucide="book-open"></i>
                                    Cours
                                </a>
                            </li>

                            <li>
                                <a href="ressources.php">
                                    <i data-lucide="library"></i>
                                    Ressources
                                </a>
                            </li>
                            <li>
                                <a href="about.php">
                                    <i data-lucide="info"></i>
                                    A propos
                                </a>
                            </li>

                            <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                                <li>
                                    <a href="profile.php" class="text-primary font-bold">
                                        <i data-lucide="user"></i> Mon Profil
                                    </a>
                                </li>
                                <li>
                                    <a href="auth/logout.php" class="text-error">
                                        <i data-lucide="log-out"></i> Se déconnecter
                                    </a>
                                </li>
                            <?php else: ?>

                                <li>
                                    <button class="btn btn-outline btn-sm mr-5"
                                        onClick="window.location.href='/auth/login.php'">
                                        <i data-lucide="log-in" class="w-4 h-4"></i>
                                        Se connecter
                                    </button>
                                    <button class="btn btn-primary btn-sm mr-5 mt-2"
                                        onClick="window.location.href='/auth/register.php'">
                                        <i data-lucide="user-plus" class="w-4 h-4"></i>
                                        S'inscrire
                                    </button>
                                </li>

                            <?php endif; ?>

                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>