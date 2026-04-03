<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RichLabs - À propos</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/lucide"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center gap-5 px-4">
        <div class="flex flex-col items-center gap-3">
            <i data-lucide="heart" class="text-pink-500 w-20 h-20"></i>
            <span class="text-5xl font-bold text-center">Notre Mission</span>
            <span class="text-2xl text-center max-w-3xl">
                Démocratiser Linux et rendre l'apprentissage accessible à tous, gratuitement
            </span>
        </div>

        <div class="stats stats-vertical lg:stats-horizontal shadow-xl mt-10">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <i data-lucide="users" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Étudiants formés</div>
                <div class="stat-value text-primary">5,000+</div>
                <div class="stat-desc">Dans 45 pays</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <i data-lucide="book-open" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Heures de contenu</div>
                <div class="stat-value text-secondary">150+</div>
                <div class="stat-desc">Toujours gratuit</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-success">
                    <i data-lucide="award" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Taux de satisfaction</div>
                <div class="stat-value text-success">98%</div>
                <div class="stat-desc">4.9/5 étoiles</div>
            </div>

            <div class="stat">
                <div class="stat-figure text-warning">
                    <i data-lucide="graduation-cap" class="w-10 h-10"></i>
                </div>
                <div class="stat-title">Certificats délivrés</div>
                <div class="stat-value text-warning">2,300+</div>
                <div class="stat-desc">Reconnus</div>
            </div>
        </div>
    </section>

    <!-- L'histoire de Richard -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="user" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">L'histoire de Richard</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="flex justify-center">
                <div class="avatar">
                    <div class="w-80 rounded-xl shadow-2xl">
                        <img src="face.jpeg" alt="Richard - Fondateur de RichLabs" />
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <span class="text-2xl font-bold text-primary">Richard - Fondateur & Instructeur Principal</span>
                
                <div class="flex flex-col gap-4 text-lg">
                    <p>
                        Mon parcours avec Linux a commencé il y a 10 ans, quand j'étais étudiant et que je cherchais une alternative gratuite à Windows. J'ai installé Ubuntu sur un vieux laptop, et ce fut le début d'une passion qui allait changer ma vie.
                    </p>

                    <p>
                        Au début, j'étais complètement perdu. Les forums étaient souvent intimidants, la documentation technique difficile à comprendre, et je me sentais seul dans mon apprentissage. J'ai passé des nuits entières à chercher des solutions, à casser mon système, à le réinstaller...
                    </p>

                    <p>
                        Mais petit à petit, j'ai compris la puissance et la beauté de Linux. J'ai découvert la philosophie du libre, la communauté open source, et surtout, j'ai réalisé que cette technologie devrait être accessible à tous.
                    </p>

                    <p class="font-semibold text-primary">
                        C'est là qu'est née l'idée de RichLabs : créer la plateforme d'apprentissage que j'aurais aimé avoir à mes débuts.
                    </p>

                    <p>
                        En 2020, j'ai quitté mon emploi dans une grande entreprise tech pour me consacrer entièrement à ce projet. Mon objectif était simple : rendre Linux accessible, compréhensible et gratuit pour tous, peu importe leur niveau ou leur background.
                    </p>

                    <p>
                        Aujourd'hui, voir plus de 5,000 personnes apprendre grâce à RichLabs me remplit de fierté. Chaque message de remerciement, chaque histoire de réussite, chaque personne qui trouve un emploi grâce à nos cours me rappelle pourquoi j'ai créé cette plateforme.
                    </p>

                    <p class="italic text-xl font-bold mt-5">
                        "Linux m'a ouvert des portes. RichLabs est ma façon de les garder ouvertes pour les autres."
                    </p>
                </div>

                <div class="flex gap-3 mt-5">
                    <a href="#" class="btn btn-circle btn-outline">
                        <i data-lucide="linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-outline">
                        <i data-lucide="github"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-outline">
                        <i data-lucide="twitter"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-outline">
                        <i data-lucide="mail"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi RichLabs -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="lightbulb" class="text-warning w-12 h-12"></i>
            <span class="font-bold text-3xl">Pourquoi RichLabs existe</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="card bg-base-200 p-8 gap-4">
                <div class="flex items-center gap-3">
                    <i data-lucide="circle-x" class="text-error w-12 h-12"></i>
                    <span class="text-2xl font-bold">Le problème</span>
                </div>
                <ul class="flex flex-col gap-3 text-lg">
                    <li class="flex gap-2">
                        <i data-lucide="x" class="text-error w-5 h-5 mt-1"></i>
                        <span>Les ressources Linux sont dispersées et difficiles à trouver</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="x" class="text-error w-5 h-5 mt-1"></i>
                        <span>La documentation est souvent trop technique pour les débutants</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="x" class="text-error w-5 h-5 mt-1"></i>
                        <span>Les formations payantes coûtent des centaines d'euros</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="x" class="text-error w-5 h-5 mt-1"></i>
                        <span>Les communautés peuvent être intimidantes pour les nouveaux</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="x" class="text-error w-5 h-5 mt-1"></i>
                        <span>Pas de parcours structuré pour progresser</span>
                    </li>
                </ul>
            </div>

            <div class="card bg-primary text-primary-content p-8 gap-4">
                <div class="flex items-center gap-3">
                    <i data-lucide="check-circle" class="w-12 h-12"></i>
                    <span class="text-2xl font-bold">Notre solution</span>
                </div>
                <ul class="flex flex-col gap-3 text-lg">
                    <li class="flex gap-2">
                        <i data-lucide="check" class="w-5 h-5 mt-1"></i>
                        <span>Tout au même endroit : cours, ressources, communauté</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="check" class="w-5 h-5 mt-1"></i>
                        <span>Contenu adapté à tous les niveaux, du débutant à l'expert</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="check" class="w-5 h-5 mt-1"></i>
                        <span>100% gratuit, pour toujours</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="check" class="w-5 h-5 mt-1"></i>
                        <span>Communauté bienveillante et solidaire</span>
                    </li>
                    <li class="flex gap-2">
                        <i data-lucide="check" class="w-5 h-5 mt-1"></i>
                        <span>Parcours structurés avec progression claire</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Nos valeurs -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="compass" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Nos valeurs fondamentales</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="heart-handshake" class="text-pink-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Accessibilité</span>
                <span class="text-sm text-center">
                    L'éducation doit être accessible à tous, sans barrière financière. Tous nos contenus sont et resteront gratuits.
                </span>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="badge-check" class="text-blue-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Qualité</span>
                <span class="text-sm text-center">
                    Chaque cours est soigneusement créé, testé et mis à jour régulièrement pour garantir un apprentissage optimal.
                </span>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="users" class="text-green-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Communauté</span>
                <span class="text-sm text-center">
                    Nous croyons en l'entraide et la bienveillance. Chacun peut apprendre et enseigner aux autres.
                </span>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="code" class="text-purple-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Open Source</span>
                <span class="text-sm text-center">
                    Nous partageons la philosophie du libre. Le savoir doit circuler librement et être partagé.
                </span>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="calendar" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Notre parcours</span>
        </div>

        <ul class="timeline timeline-vertical">
            <li>
                <div class="timeline-start timeline-box bg-primary text-primary-content">
                    <div class="font-bold text-xl">2020 - La naissance</div>
                    <div class="text-sm mt-2">
                        Richard quitte son emploi et lance RichLabs avec une vision : rendre Linux accessible à tous. Les 3 premiers cours sont mis en ligne.
                    </div>
                </div>
                <div class="timeline-middle">
                    <div class="rounded-full bg-primary w-7 h-7 flex items-center justify-center text-primary-content">
                        <i data-lucide="rocket" class="w-4 h-4"></i>
                    </div>
                </div>
                <hr class="bg-primary" />
            </li>

            <li>
                <hr class="bg-primary" />
                <div class="timeline-middle">
                    <div class="rounded-full bg-secondary w-7 h-7 flex items-center justify-center text-secondary-content">
                        <i data-lucide="users" class="w-4 h-4"></i>
                    </div>
                </div>
                <div class="timeline-end timeline-box bg-secondary text-secondary-content">
                    <div class="font-bold text-xl">2021 - La communauté grandit</div>
                    <div class="text-sm mt-2">
                        1,000 premiers étudiants ! Lancement du Discord et du forum. Les premiers témoignages de réussite arrivent.
                    </div>
                </div>
                <hr class="bg-secondary" />
            </li>

            <li>
                <hr class="bg-secondary" />
                <div class="timeline-start timeline-box bg-success text-success-content">
                    <div class="font-bold text-xl">2022 - Les certifications</div>
                    <div class="text-sm mt-2">
                        Lancement des parcours certifiants. 15 cours disponibles. Partenariats avec des entreprises pour reconnaître nos certificats.
                    </div>
                </div>
                <div class="timeline-middle">
                    <div class="rounded-full bg-success w-7 h-7 flex items-center justify-center text-success-content">
                        <i data-lucide="award" class="w-4 h-4"></i>
                    </div>
                </div>
                <hr class="bg-success" />
            </li>

            <li>
                <hr class="bg-success" />
                <div class="timeline-middle">
                    <div class="rounded-full bg-warning w-7 h-7 flex items-center justify-center text-warning-content">
                        <i data-lucide="trophy" class="w-4 h-4"></i>
                    </div>
                </div>
                <div class="timeline-end timeline-box bg-warning text-warning-content">
                    <div class="font-bold text-xl">2023 - 5,000 étudiants</div>
                    <div class="text-sm mt-2">
                        Franchissement du cap des 5,000 étudiants. Lancement de la section OSINT et cybersécurité. 25 cours disponibles.
                    </div>
                </div>
                <hr class="bg-warning" />
            </li>

            <li>
                <hr class="bg-warning" />
                <div class="timeline-start timeline-box bg-info text-info-content">
                    <div class="font-bold text-xl">2024 - Reconnaissance</div>
                    <div class="text-sm mt-2">
                        Nos certificats sont reconnus par plusieurs grandes entreprises tech. Lancement des parcours DevOps et Cloud.
                    </div>
                </div>
                <div class="timeline-middle">
                    <div class="rounded-full bg-info w-7 h-7 flex items-center justify-center text-info-content">
                        <i data-lucide="briefcase" class="w-4 h-4"></i>
                    </div>
                </div>
                <hr class="bg-info" />
            </li>

            <li>
                <hr class="bg-info" />
                <div class="timeline-middle">
                    <div class="rounded-full bg-accent w-7 h-7 flex items-center justify-center text-accent-content">
                        <i data-lucide="terminal" class="w-4 h-4"></i>
                    </div>
                </div>
                <div class="timeline-end timeline-box bg-accent text-accent-content">
                    <div class="font-bold text-xl">2025 - Innovation</div>
                    <div class="text-sm mt-2">
                        Lancement du terminal interactif dans le navigateur. Les étudiants peuvent maintenant pratiquer sans installer Linux.
                    </div>
                </div>
                <hr class="bg-accent" />
            </li>

            <li>
                <hr class="bg-accent" />
                <div class="timeline-start timeline-box bg-error text-error-content">
                    <div class="font-bold text-xl">2026 - International</div>
                    <div class="text-sm mt-2">
                        RichLabs devient international avec des étudiants dans 45 pays. Lancement des traductions en plusieurs langues.
                    </div>
                </div>
                <div class="timeline-middle">
                    <div class="rounded-full bg-error w-7 h-7 flex items-center justify-center text-error-content">
                        <i data-lucide="globe" class="w-4 h-4"></i>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Témoignages -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="message-circle-heart" class="text-pink-500 w-12 h-12"></i>
            <span class="font-bold text-3xl">Ils ont changé leur vie avec RichLabs</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=12" alt="Sarah" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Sarah M.</div>
                        <div class="text-sm text-zinc-500">Développeuse DevOps</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "J'étais complètement débutante il y a un an. Grâce à RichLabs, j'ai décroché mon premier emploi en DevOps. Les cours sont clairs, progressifs et surtout gratuits. Merci Richard !"
                </p>
            </div>

            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=33" alt="Ahmed" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Ahmed K.</div>
                        <div class="text-sm text-zinc-500">Admin Système</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "La meilleure ressource francophone sur Linux. J'ai essayé plusieurs plateformes payantes, mais RichLabs est de loin la plus complète et pédagogique. Et c'est gratuit !"
                </p>
            </div>

            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=47" alt="Marie" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Marie L.</div>
                        <div class="text-sm text-zinc-500">Analyste Cybersécurité</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "Les cours sur la sécurité Linux sont exceptionnels. J'ai pu me reconvertir dans la cybersécurité grâce à RichLabs. La communauté est super bienveillante."
                </p>
            </div>

            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=68" alt="Thomas" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Thomas B.</div>
                        <div class="text-sm text-zinc-500">Étudiant en informatique</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "En tant qu'étudiant, je n'ai pas les moyens de payer des formations. RichLabs m'a permis d'apprendre Linux gratuitement et de décrocher un stage. Inestimable !"
                </p>
            </div>

            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=20" alt="Fatima" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Fatima Z.</div>
                        <div class="text-sm text-zinc-500">Développeuse Backend</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "Le terminal interactif est génial ! Je peux pratiquer directement dans le navigateur sans risquer de casser mon système. Parfait pour apprendre."
                </p>
            </div>

            <div class="card bg-base-100 p-6 gap-4">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-16 rounded-full">
                            <img src="https://i.pravatar.cc/150?img=52" alt="Lucas" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Lucas D.</div>
                        <div class="text-sm text-zinc-500">Pentester</div>
                    </div>
                </div>
                <div class="flex gap-1">
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                    <i data-lucide="star" class="w-4 h-4 text-warning fill-warning"></i>
                </div>
                <p class="text-sm italic">
                    "Les cours sur Kali Linux et le pentesting sont au top. Richard sait vraiment de quoi il parle. J'ai appris plus ici qu'en 2 ans d'auto-formation."
                </p>
            </div>
        </div>
    </section>


    <!-- L'équipe -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="users-round" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">L'équipe RichLabs</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="avatar mx-auto">
                    <div class="w-32 rounded-full">
                        <img src="face.jpeg" alt="Richard" />
                    </div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-xl">Richard</div>
                    <div class="text-sm text-primary">Fondateur & Instructeur</div>
                </div>
                <p class="text-sm text-center">
                    Créateur de RichLabs, passionné de Linux depuis 10 ans. Ancien ingénieur système.
                </p>
                <div class="flex justify-center gap-2">
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </button>
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="github" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="avatar mx-auto">
                    <div class="w-32 rounded-full">
                        <img src="https://i.pravatar.cc/150?img=15" alt="Sophie" />
                    </div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-xl">Sophie</div>
                    <div class="text-sm text-primary">Instructrice DevOps</div>
                </div>
                <p class="text-sm text-center">
                    Experte en automatisation et CI/CD. Crée les cours sur Docker, Kubernetes et Ansible.
                </p>
                <div class="flex justify-center gap-2">
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </button>
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="github" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="avatar mx-auto">
                    <div class="w-32 rounded-full">
                        <img src="https://i.pravatar.cc/150?img=33" alt="Karim" />
                    </div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-xl">Karim</div>
                    <div class="text-sm text-primary">Expert Cybersécurité</div>
                </div>
                <p class="text-sm text-center">
                    Pentester certifié. Responsable des cours sur la sécurité Linux et le hacking éthique.
                </p>
                <div class="flex justify-center gap-2">
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </button>
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="github" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <div class="card bg-base-200 p-6 gap-3 hover:-translate-y-2 transition-all">
                <div class="avatar mx-auto">
                    <div class="w-32 rounded-full">
                        <img src="https://i.pravatar.cc/150?img=47" alt="Emma" />
                    </div>
                </div>
                <div class="text-center">
                    <div class="font-bold text-xl">Emma</div>
                    <div class="text-sm text-primary">Community Manager</div>
                </div>
                <p class="text-sm text-center">
                    Gère la communauté Discord et le forum. Toujours là pour aider les étudiants.
                </p>
                <div class="flex justify-center gap-2">
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </button>
                    <button class="btn btn-circle btn-sm btn-outline">
                        <i data-lucide="twitter" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <span class="text-lg">
                + 15 contributeurs bénévoles qui créent du contenu, traduisent et modèrent
            </span>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="handshake" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Nos partenaires</span>
        </div>

        <div class="text-center mb-10">
            <span class="text-lg">
                Ces organisations soutiennent notre mission et reconnaissent nos certificats
            </span>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" class="w-20 h-20" />
            </div>
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/debian/A81D33" alt="Debian" class="w-20 h-20" />
            </div>
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/fedora/51A2DA" alt="Fedora" class="w-20 h-20" />
            </div>
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/archlinux/1793D1" alt="Arch Linux" class="w-20 h-20" />
            </div>
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/redhat/EE0000" alt="Red Hat" class="w-20 h-20" />
            </div>
            <div class="flex justify-center grayscale hover:grayscale-0 transition-all">
                <img src="https://cdn.simpleicons.org/kalilinux/557C94" alt="Kali Linux" class="w-20 h-20" />
            </div>
        </div>
    </section>

    <!-- Rejoignez-nous -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="user-plus" class="text-success w-12 h-12"></i>
            <span class="font-bold text-3xl">Rejoignez l'aventure</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="card bg-base-200 p-8 gap-4 hover:shadow-xl transition-all">
                <i data-lucide="pen-tool" class="text-blue-500 w-12 h-12"></i>
                <span class="text-xl font-bold">Créer du contenu</span>
                <p class="text-sm">
                    Vous êtes expert dans un domaine ? Aidez-nous à créer de nouveaux cours et tutoriels pour la communauté.
                </p>
                <button class="btn btn-primary">
                    <i data-lucide="mail"></i>
                    Nous contacter
                </button>
            </div>

            <div class="card bg-base-200 p-8 gap-4 hover:shadow-xl transition-all">
                <i data-lucide="languages" class="text-green-500 w-12 h-12"></i>
                <span class="text-xl font-bold">Traduire</span>
                <p class="text-sm">
                    Aidez-nous à rendre RichLabs accessible dans d'autres langues. Nous cherchons des traducteurs bénévoles.
                </p>
                <button class="btn btn-primary">
                    <i data-lucide="mail"></i>
                    Nous contacter
                </button>
            </div>

            <div class="card bg-base-200 p-8 gap-4 hover:shadow-xl transition-all">
                <i data-lucide="shield-check" class="text-purple-500 w-12 h-12"></i>
                <span class="text-xl font-bold">Modérer</span>
                <p class="text-sm">
                    Rejoignez l'équipe de modération pour aider à maintenir une communauté bienveillante et accueillante.
                </p>
                <button class="btn btn-primary">
                    <i data-lucide="mail"></i>
                    Nous contacter
                </button>
            </div>
        </div>

        <div class="card bg-gradient-to-r from-primary to-secondary p-10 text-primary-content mt-10">
            <div class="flex flex-col items-center gap-5 text-center">
                <i data-lucide="heart" class="w-16 h-16"></i>
                <span class="text-2xl font-bold">Soutenez RichLabs</span>
                <p class="max-w-2xl">
                    RichLabs est et restera toujours gratuit. Mais maintenir la plateforme, créer du contenu et gérer la communauté demande du temps et des ressources. Si vous appréciez notre travail, vous pouvez nous soutenir.
                </p>
                <div class="flex gap-3">
                    <button class="btn bg-white text-primary hover:bg-zinc-100">
                        <i data-lucide="coffee"></i>
                        Offrir un café
                    </button>
                    <button class="btn btn-outline text-white border-white hover:bg-white hover:text-primary">
                        <i data-lucide="heart"></i>
                        Devenir sponsor
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Communauté -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="messages-square" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Rejoignez la communauté</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="message-circle" class="text-indigo-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Discord</span>
                <span class="text-sm text-center">
                    Rejoignez notre serveur Discord avec plus de 2,000 membres actifs
                </span>
                <div class="badge badge-primary mx-auto">2,345 membres</div>
                <button class="btn btn-primary">
                    <i data-lucide="external-link"></i>
                    Rejoindre
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="github" class="text-zinc-800 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">GitHub</span>
                <span class="text-sm text-center">
                    Contribuez au code, signalez des bugs ou proposez des améliorations
                </span>
                <div class="badge badge-secondary mx-auto">Open Source</div>
                <button class="btn btn-primary">
                    <i data-lucide="external-link"></i>
                    Voir le repo
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="twitter" class="text-sky-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Twitter</span>
                <span class="text-sm text-center">
                    Suivez-nous pour les actualités, tips et nouveaux cours
                </span>
                <div class="badge badge-info mx-auto">1,234 followers</div>
                <button class="btn btn-primary">
                    <i data-lucide="external-link"></i>
                    Suivre
                </button>
            </div>

            <div class="card bg-base-100 p-6 gap-4 hover:-translate-y-2 transition-all">
                <div class="flex justify-center">
                    <i data-lucide="mail" class="text-red-500 w-16 h-16"></i>
                </div>
                <span class="text-xl font-bold text-center">Newsletter</span>
                <span class="text-sm text-center">
                    Recevez les nouveaux cours et actualités directement par email
                </span>
                <div class="badge badge-success mx-auto">Hebdomadaire</div>
                <button class="btn btn-primary">
                    <i data-lucide="mail-plus"></i>
                    S'inscrire
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="lg:px-65 px-4 py-20">
        <div class="flex items-center gap-2 mb-10">
            <i data-lucide="help-circle" class="text-primary w-12 h-12"></i>
            <span class="font-bold text-3xl">Questions fréquentes</span>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="collapse collapse-plus bg-base-200 mb-3">
                <input type="radio" name="about-faq" checked />
                <div class="collapse-title font-semibold">
                    Comment RichLabs est-il financé ?
                </div>
                <div class="collapse-content text-sm">
                    RichLabs est financé par des dons volontaires de la communauté et quelques sponsors. Nous ne vendons aucune donnée et ne faisons pas de publicité. Notre objectif est de rester 100% gratuit pour les étudiants.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-200 mb-3">
                <input type="radio" name="about-faq" />
                <div class="collapse-title font-semibold">
                    Puis-je contribuer au projet ?
                </div>
                <div class="collapse-content text-sm">
                    Absolument ! Nous accueillons toutes les contributions : création de contenu, traduction, modération, développement, ou simplement aider d'autres étudiants sur le forum. Contactez-nous pour en savoir plus.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-200 mb-3">
                <input type="radio" name="about-faq" />
                <div class="collapse-title font-semibold">
                    Les certificats RichLabs sont-ils reconnus ?
                </div>
                <div class="collapse-content text-sm">
                    Nos certificats sont reconnus par plusieurs entreprises partenaires dans le secteur tech. Ils démontrent vos compétences pratiques en Linux et sont un excellent ajout à votre CV.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-200 mb-3">
                <input type="radio" name="about-faq" />
                <div class="collapse-title font-semibold">
                    Pourquoi RichLabs est-il gratuit ?
                </div>
                <div class="collapse-content text-sm">
                    Parce que l'éducation devrait être accessible à tous. Richard a créé RichLabs avec la conviction que l'argent ne devrait jamais être un obstacle à l'apprentissage. C'est notre mission et elle ne changera jamais.
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-200 mb-3">
                <input type="radio" name="about-faq" />
                <div class="collapse-title font-semibold">
                    Comment puis-je contacter l'équipe ?
                </div>
                <div class="collapse-content text-sm">
                    Vous pouvez nous contacter via Discord (le plus rapide), par email à contact@richlabs.com, ou sur nos réseaux sociaux. Nous répondons généralement sous 24-48h.
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="lg:px-65 px-4 py-20 bg-base-200">
        <div class="card bg-gradient-to-r from-primary to-secondary p-12 text-primary-content text-center">
            <div class="flex flex-col items-center gap-5">
                <i data-lucide="rocket" class="w-20 h-20"></i>
                <span class="text-4xl font-bold">Prêt à faire partie de l'histoire ?</span>
                <span class="text-xl max-w-2xl">
                    Rejoignez les 5,000+ étudiants qui apprennent Linux avec RichLabs et changez votre vie
                </span>
                <div class="flex gap-3 mt-5">
                    <button class="btn btn-lg bg-white text-primary hover:bg-zinc-100">
                        <i data-lucide="graduation-cap"></i>
                        Commencer à apprendre
                    </button>
                    <button class="btn btn-lg btn-outline text-white border-white hover:bg-white hover:text-primary">
                        <i data-lucide="users"></i>
                        Rejoindre Discord
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
