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
    <header class=" flex justify-between sticky top-0 z-50 bg-base-100 shadow-lg p-4">
        <div class="bg-neutral-500 font-bold text-xl p-2 rounded-xl cursor-pointer">
            >__
            <span class="text-blue-500">RichLabs</span>
        </div>

        
        <div class="flex justify-between">
            <ul class="flex justify-between items-center gap-7">
                <li class="flex gap-1 items-center">
                    <i data-lucide="house" class="w-4 h-4"></i>
                    <a href="index.php">Accueil</a>
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
                    <a href="ressources.php">Ressources</a>
                </li>
                <li class="flex items-center gap-2">
                    <i data-lucide="info" class="h-4 w-4"></i>
                    <a href="">A propos</a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-2">
                <button 
                    class="btn"
                >
                    <i data-lucide="log-in" class="w-5 h-4"></i>
                    Se connecter
                </button>

                <button
                    class="btn btn-primary"
                >
                    <i data-lucide="user-plus"></i>
                    S'inscrire
                </button>
            
        </div>
   </header>

   <script>
            lucide.createIcons();
    </script>
</body>
</html>