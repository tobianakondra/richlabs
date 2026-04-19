<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>

<body>
    <!-- Hero Section with Form -->
    <section
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-base-200 to-base-300 px-4 py-12">
        <div class="w-full max-w-md">
            <!-- Logo et titre -->
            <div class="text-center mb-8">
                <a href="../index.php" class="inline-flex items-center gap-2 mb-4 hover:opacity-80 transition-opacity">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                    <span>Retour à l'accueil</span>
                </a>
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center">
                        <i data-lucide="user-plus" class="w-8 h-8 text-primary-content"></i>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Rejoignez RichLabs</h1>
                <p class="text-base md:text-lg opacity-70">Commencez votre aventure Linux gratuitement</p>
            </div>

            <!-- Registration Card -->
            <div class="card bg-base-100 shadow-2xl">
                <div class="card-body p-6 md:p-8">
                    <form action="process_register.php" method="POST" class="flex flex-col gap-4">
                        <!-- Username -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-semibold">Nom d'utilisateur</span>
                            </label>
                            <div class="input input-bordered flex items-center gap-2">
                                <i data-lucide="user" class="w-4 h-4 opacity-70"></i>
                                <input type="text" name="username" placeholder="johndoe" class="grow" required />
                            </div>
                        </div>

                        <div class="form-control">
                            <label class="label"><span class="label-text">Prénom</span></label>
                            <input type="text" name="prenom" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label"><span class="label-text">Nom</span></label>
                            <input type="text" name="nom" class="input input-bordered" required />
                        </div>


                        <!-- Email -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-semibold">Email</span>
                            </label>
                            <div class="input input-bordered flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 opacity-70"></i>
                                <input type="email" name="email" placeholder="john@example.com" class="grow" required />
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
                                <span class="label-text-alt opacity-70">Minimum 8 caractères</span>
                            </label>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text font-semibold">Confirmer le mot de passe</span>
                            </label>
                            <div class="input input-bordered flex items-center gap-2">
                                <i data-lucide="lock-keyhole" class="w-4 h-4 opacity-70"></i>
                                <input type="password" name="confirm_password" placeholder="••••••••" class="grow"
                                    required />
                            </div>
                        </div>

                        <!-- Terms -->
                        <div class="form-control">
                            <label class="label cursor-pointer justify-start gap-3">
                                <input type="checkbox" class="checkbox checkbox-primary" required />
                                <span class="label-text">J'accepte les <a href="#" class="link link-primary">conditions
                                        d'utilisation</a></span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg w-full mt-2">
                            <i data-lucide="rocket"></i>
                            Créer mon compte
                        </button>
                    </form>

                    <!-- Divider -->
                    <div class="divider">OU</div>

                    <!-- Social Login -->
                    <div class="flex flex-col gap-3">
                        <button class="btn btn-outline w-full">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4" />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853" />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05" />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335" />
                            </svg>
                            Continuer avec Google
                        </button>
                        <button class="btn btn-outline w-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            Continuer avec GitHub
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center mt-6">
                        <span class="opacity-70">Vous avez déjà un compte?</span>
                        <a href="login.php" class="link link-primary font-semibold ml-1">Se connecter</a>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="grid grid-cols-3 gap-4 mt-8 text-center">
                <div class="flex flex-col items-center gap-2">
                    <i data-lucide="check-circle" class="w-6 h-6 text-success"></i>
                    <span class="text-xs md:text-sm opacity-70">100% Gratuit</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <i data-lucide="shield-check" class="w-6 h-6 text-success"></i>
                    <span class="text-xs md:text-sm opacity-70">Sécurisé</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <i data-lucide="zap" class="w-6 h-6 text-success"></i>
                    <span class="text-xs md:text-sm opacity-70">Instantané</span>
                </div>
            </div>
        </div>
    </section>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>