<?php include 'index.php'; ?>

<div class="flex flex-col items-center justify-center min-h-screen">
    <div class="flex flex-col bg-zinc-500 border border-zinc-700 p-3 rounded-xl gap-2">
        <div class="flex gap-2">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>
        <div class="flex ml-15 mt-3">
            <span class="font-mono font-bold text-xl">~user@richlabs:~</span>
        </div>
        <div class="flex flex-col ml-8 mr-8 p-2 pb-5">
            <div>
                <span class="ml-20 mr-5 text-green-500 font-mono">
                    $
                </span>
                <span class="text-green-400 font-mono text-xl">
                    sudo apt update
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-yellow-400 font-mono">
                    >
                </span>
                <span class="font-mono text-yellow-400">
                    Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-yellow-300 font-mono">
                    >
                </span>
                <span class="font-mono text-yellow-300">
                    Get:2 http://security.ubuntu.com/ubuntu jammy-security InRelease
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-blue-400 font-mono">
                    >
                </span>
                <span class="font-mono text-blue-300">
                    Reading package lists... Done
                </span>
            </div>
            <div>
                <span class="ml-20 mr-5 text-red-300 font-mono animate-pulse">
                    $
                </span>
                <span class="font-mono text-red-300">
                    _
                </span>
            </div>
        </div>
    </div>

    <div class="mt-30 text-xl p-4">
        <span>
            Maîtrisez les distributions Linux avec des cours pratiques, des tutoriels interactifs et une communauté passionnée
        </span>
        <button class="btn btn-primary">
            <i data-lucide="rocket"></i>
            Commencer gratuitement
        </button>
    </div>
</div>

