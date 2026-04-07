<!DOCTYPE html>
<html lang="en" data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
    <!-- Hero Section with Form -->
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-base-200 to-base-300 px-4 py-12">
        <div class="w-full max-w-md">
            <!-- Logo and Title -->
            <div class="text-center mb-8">
                <a href="../index.php" class="inline-flex items-center gap-2 mb-4 hover:opacity-80 transition-opacity">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    <span>Retour à l'accueil</span>
                </a>
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center">
                        <i data-lucide="log-in" class="w-8 h-8 text-primary-content"></i>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Bon retour!</h1>
                <p class="text-base md:text-lg opacity-70">Connectez-vous pour continuer votre apprentissage</p>
            </div>

            <!-- Login Card -->
            <div class="card bg-base-100 shadow-2xl">
                <div class="card-body p-6 md:p-8">
                    <!-- Alert Example (hidden by default) -->
                    <div class="alert alert-error hidden mb-4">
                        <i data-lucide="alert-circle" class="w-5 h-5"></i>
                        <span>Email ou mot de passe incorrect</span>
                    </div>

                    <form class="flex flex-col gap-4">
                        <!-- Email or Username -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-semibold">Email ou nom d'utilisateur</span>
                            </label>
                            <div class="input input-bordered flex items-center gap-2">
                                <i data-lucide="user" class="w-4 h-4 opacity-70"></i>
                                <input type="text" name="login" placeholder="john@example.com" class="grow" required />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-semibold">Mot de passe</span>
                            </label>
                            <div class="input input-bordered flex items-center gap-2">
                                <i data-lucide="lock" class="w-4 h-4 opacity-70"></i>
                                <input type="password" name="password" placeholder="••••••••" class="grow" required />
                            </div>
                            <label class="label">
                                <a href="#" class="label-text-alt link link-primary">Mot de passe oublié?</a>
                            </label>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-control">
                            <label class="label cursor-pointer justify-start gap-3">
                                <input type="checkbox" class="checkbox checkbox-primary" name="remember" />
                                <span class="label-text">Se souvenir de moi</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg w-full mt-2">
                            <i data-lucide="log-in"></i>
                            Se connecter
                        </button>
                    </form>

                    <!-- Divider -->
                    <div class="divider">OU</div>

                    <!-- Social Login -->
                    <div class="flex flex-col gap-3">
                        <button class="btn btn-outline w-full">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            Continuer avec Google
                        </button>
                        <button class="btn btn-outline w-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Continuer avec GitHub
                        </button>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-6">
                        <span class="opacity-70">Pas encore de compte?</span>
                        <a href="register.php" class="link link-primary font-semibold ml-1">S'inscrire gratuitement</a>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats stats-vertical lg:stats-horizontal shadow-xl mt-8 w-full">
                <div class="stat place-items-center">
                    <div class="stat-figure text-primary">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-value text-primary text-2xl">5,000+</div>
                    <div class="stat-title">Étudiants actifs</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-figure text-secondary">
                        <i data-lucide="book-open" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-value text-secondary text-2xl">150+</div>
                    <div class="stat-title">Heures de cours</div>
                </div>

                <div class="stat place-items-center">
                    <div class="stat-figure text-success">
                        <i data-lucide="star" class="w-8 h-8"></i>
                    </div>
                    <div class="stat-value text-success text-2xl">4.9/5</div>
                    <div class="stat-title">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
