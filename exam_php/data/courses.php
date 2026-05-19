<?php
$courses = [
    'intro_linux' => [
        'title' => 'Introduction à Linux',
        'icon' => 'book-open-check',
        'color' => 'text-pink-300',
        'level' => 'Débutant',
        'level_color' => 'badge-success',
        'duration' => '3h',
        'lessons_count' => 12,
        'students' => 856,
        'description' => 'Ce cours est la porte d\'entrée idéale pour tout nouveau venu dans l\'univers Linux. Nous couvrirons l\'histoire, la philosophie de l\'open-source, et nous vous guiderons pas à pas dans votre première installation.',
        'learning_objectives' => [
            'Comprendre ce qu\'est un noyau (kernel) et une distribution.',
            'Connaître l\'histoire et la philosophie de Linux.',
            'Savoir choisir sa première distribution.',
            'Installer Linux dans une machine virtuelle (VM).',
            'Se familiariser avec l\'interface graphique et le bureau.'
        ],
        'modules' => [
            [
                'title' => 'Module 1 : Les Fondations',
                'lessons' => ['C\'est quoi Linux ?', 'L\'histoire de Linus Torvalds', 'Le Logiciel Libre vs Open Source']
            ],
            [
                'title' => 'Module 2 : Choisir et Installer',
                'lessons' => ['Tour d\'horizon des distributions', 'Préparer son support d\'installation', 'Installation pas à pas d\'Ubuntu']
            ],
            [
                'title' => 'Module 3 : Premier pas',
                'lessons' => ['Découverte de l\'interface', 'Le gestionnaire de fichiers', 'Paramètres système essentiels']
            ]
        ],
        'preview_video' => 'https://www.youtube-nocookie.com/embed/ShcR4Zfc6Dw'
        ],
    'commandes_base' => [
        'title' => 'Commandes essentielles',
        'icon' => 'terminal',
        'color' => 'text-green-400',
        'level' => 'Débutant',
        'level_color' => 'badge-success',
        'duration' => '5h',
        'lessons_count' => 15,
        'students' => 1456,
        'description' => 'Le terminal est le véritable pouvoir de Linux. Apprenez à naviguer, créer, déplacer et supprimer des fichiers avec une efficacité redoutable.',
        'learning_objectives' => [
            'Maîtriser la navigation dans l\'arborescence (cd, ls, pwd).',
            'Manipuler les fichiers et dossiers (mkdir, touch, cp, mv, rm).',
            'Comprendre les chemins relatifs et absolus.',
            'Lire le contenu des fichiers (cat, less, head, tail).',
            'Utiliser l\'auto-complétion et l\'historique.'
        ],
        'modules' => [
            [
                'title' => 'Module 1 : Navigation',
                'lessons' => ['Le Shell et le Terminal', 'Où suis-je ? (pwd)', 'Se déplacer (cd)', 'Lister le contenu (ls)']
            ],
            [
                'title' => 'Module 2 : Manipulation de fichiers',
                'lessons' => ['Créer des dossiers (mkdir)', 'Créer des fichiers (touch)', 'Copier et déplacer', 'Supprimer en toute sécurité']
            ]
        ]
    ],
    'scripts_bash' => [
        'title' => 'Scripts Bash',
        'icon' => 'code',
        'color' => 'text-green-400',
        'level' => 'Intermédiaire',
        'level_color' => 'badge-warning',
        'duration' => '4h30',
        'lessons_count' => 18,
        'students' => 612,
        'description' => 'Automatisez vos tâches répétitives en créant vos propres scripts. Apprenez la logique de programmation appliquée au système Linux.',
        'learning_objectives' => [
            'Écrire et rendre un script exécutable.',
            'Utiliser les variables et les arguments.',
            'Maîtriser les conditions (if/else) et les boucles (for/while).',
            'Manipuler les entrées/sorties et les pipes.',
            'Créer des outils d\'automatisation complets.'
        ],
        'modules' => [
            [
                'title' => 'Module 1 : Bases du Scripting',
                'lessons' => ['Le Shebang (#!)', 'Variables et Types', 'Lecture d\'entrées (read)']
            ],
            [
                'title' => 'Module 2 : Logique et Contrôle',
                'lessons' => ['Les tests de fichiers', 'Structures conditionnelles', 'Les boucles For et While']
            ]
        ]
    ]
];
