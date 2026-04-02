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
    <section class="flex justify-center">
        <div class="grid">
            <div class="grid">
                <span class="text-center font-bold text-3xl">
                    Apprenez Linux
                </span>
                <span class="text-center font-bold">
                    Votre Parcours d'apprentissage personalisé
                </span>
            </div>
            <div class="stats shadow md:stats-vertical lg:stats-horizontal">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i data-lucide="chart-line"></i>
                    </div>
                    <div class="stat-title">Cours Complétés</div>
                    <div class="stat-value text-primary">3/35</div>
                    <div class="stat-desc">12% de progression</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i data-lucide="trophy"></i>
                    </div>
                    <div class="stat-title">Badge gagnés</div>
                    <div class="stat-value text-secondary">7</div>
                    <div class="stat-desc">Nouveau Apprenti</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                      <div class="avatar avatar-online">
                        <div class="w-16 rounded-full">
                          <img src="https://img.daisyui.com/images/profile/demo/anakeen@192.webp" />
                        </div>
                      </div>
                    </div>
                    <div class="stat-value">86%</div>
                    <div class="stat-title">Tasks done</div>
                    <div class="stat-desc text-secondary">31 tasks remaining</div>
                </div>
            </div>
        </div>
    </section>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>