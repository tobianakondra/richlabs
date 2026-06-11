<?php
$courses = [
    'intro_linux' => [
        'title' => 'Introduction à Linux',
        'icon' => 'book-open-check',
        'color' => 'text-pink-300',
        'level' => 'Débutant',
        'level_color' => 'badge-success',
        'duration' => '3h',
        'lessons_count' => 6,
        'students' => 856,
        'description' => 'Ce cours est la porte d\'entrée idéale pour tout nouveau venu dans l\'univers Linux. Nous couvrirons l\'histoire, la philosophie de l\'open-source, et la découverte de l\'interface utilisateur.',
        'learning_objectives' => [
            'Comprendre ce qu\'est un noyau (kernel) et une distribution.',
            'Connaître l\'histoire et la philosophie de Linux.',
            'Découvrir la puissance de la personnalisation sous Linux.',
            'Se familiariser avec les différents environnements de bureau.',
            'Comprendre l\'arborescence des fichiers Linux.'
        ],
        'modules' => [
            [
                'title' => 'Module 1 : Les Fondations',
                'lessons' => ['C\'est quoi Linux ?', 'L\'histoire de Linus Torvalds', 'Le Logiciel Libre vs Open Source']
            ],
            [
                'title' => 'Module 2 : Découverte et Interface',
                'lessons' => ['La puissance de la personnalisation', 'L\'arborescence des fichiers', 'Maîtrise et État d\'esprit']
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
    ],
    'installation_linux' => [
        'title' => 'Installation de Linux',
        'icon' => 'download',
        'color' => 'text-purple-400',
        'level' => 'Intermédiaire',
        'level_color' => 'badge-warning',
        'duration' => '1h45',
        'lessons_count' => 8,
        'students' => 987,
        'description' => 'Apprenez à installer Linux en dual-boot ou en machine virtuelle. Ce cours vous guide pas à pas pour installer Ubuntu sur votre ordinateur.',
        'learning_objectives' => [
            'Comprendre les prérequis matériels (RAM, espace disque, clé USB).',
            'Télécharger l\'ISO officielle d\'Ubuntu.',
            'Créer une clé USB bootable avec Rufus (Windows) ou balenaEtcher (Linux/macOS).',
            'Configurer le BIOS/UEFI pour démarrer sur USB.',
            'Effectuer l\'installation complète étape par étape.',
            'Choisir le bon schéma de partition (GPT vs MBR) et système de fichiers (exFAT vs FAT32).',
            'Créer son compte utilisateur et configurer le fuseau horaire.',
            'Vérifier le bon fonctionnement après installation.'
        ],
        'modules' => [
            [
                'title' => 'Module 1 : Téléchargement d\'Ubuntu',
                'lessons' => ['Pourquoi Ubuntu ?', 'Télécharger l\'ISO 24.04 LTS', 'Vérifier l\'intégrité du fichier']
            ],
            [
                'title' => 'Module 2 : Clé USB bootable',
                'lessons' => ['Choisir sa clé USB (8 Go min)', 'Rufus sur Windows', 'balenaEtcher sur Linux/macOS']
            ],
            [
                'title' => 'Module 3 : Démarrage sur USB',
                'lessons' => ['Accéder au BIOS/UEFI (touches par marque)', 'Désactiver Secure Boot si nécessaire', 'Changer l\'ordre de boot']
            ],
            [
                'title' => 'Module 4 : Installation pas à pas',
                'lessons' => ['Langue, WiFi et mises à jour', 'Type d\'installation (normal/minimal)', 'Partition du disque (GPT)', 'Créer son utilisateur', 'Finaliser et redémarrer']
            ]
        ],
        'preview_video' => 'https://www.youtube-nocookie.com/embed/ShcR4Zfc6Dw'
    ]
];
