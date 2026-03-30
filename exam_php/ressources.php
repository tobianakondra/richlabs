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

    <section class="flex flex-col justify-center items-center min-h-screen gap-4">
        <span class="text-5xl">
            Ressources Linux
        </span>
        <span class="md:text-2xl lg:text-2xl text-xl text-center">
            Tout ce dont vous avez besoin pour maîtriser Linux
        </span>

        <div class="join flex justify-center w-full">
            <div class="input validator join-item w-1/3">
                <i 
                    data-lucide="search"
                    class="text-pink-300 w-10 h-10"
                ></i>
                <input 
                    type="search"
                    class="grow rounded-md"
                    placeholder="rechercher une ressource..."
                >
            </div>
            <button class="btn btn-primary rounded-md">rechercher</button>
        </div>
        <div class="flex gap-3 mt-5">
            <button class="btn btn-primary">Tous</button>
            <button class="btn btn-outline">Débutant</button>
            <button class="btn btn-outline">Intermédiare</button>
            <button class="btn btn-outline">Avancé</button>
        </div>

        <div class="flex justify-center mt-30 md:mt-50 lg:mt-65 items-center">
            <div class="flex gap-2 items-center">
                <i 
                    data-lucide="book-open-text"
                    class="text-pink-400 w-10 h-10"
                ></i>
                <span class="md:text-4xl lg:text-5xl text-3xl">
                    Documentation et guides
                </span>
            </div>
        </div>
    </section>


    <script>
            lucide.createIcons();
    </script>
</body>
</html>