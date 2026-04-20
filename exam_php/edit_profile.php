<?php
session_start();
require_once "config.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login.php");
    exit;
}

$id = $_SESSION["id"];
$sql = "SELECT username, nom, prenom FROM users WHERE id = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier mon profil - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide"></script>
</head>

<body class="bg-base-200 min-h-screen">
    <?php include 'header.php'; ?>

    <main class="flex items-center justify-center p-4 py-12">
        <div class="card w-full max-w-md bg-base-100 shadow-2xl">
            <div class="card-body p-8">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="user-cog" class="w-8 h-8 text-primary"></i>
                    </div>
                    <h2 class="card-title text-2xl font-bold justify-center">Modifier mon profil</h2>
                    <p class="text-sm opacity-60">Mettez à jour vos informations personnelles</p>
                </div>

                <form action="auth/process_update.php" method="POST" class="flex flex-col gap-5">
                    <!-- Prénom -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-bold">Prénom</span>
                        </label>
                        <div class="input input-bordered flex items-center gap-3">
                            <i data-lucide="user" class="w-4 h-4 opacity-50"></i>
                            <input type="text" name="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>"
                                class="grow" required />
                        </div>
                    </div>

                    <!-- Nom -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-bold">Nom</span>
                        </label>
                        <div class="input input-bordered flex items-center gap-3">
                            <i data-lucide="user" class="w-4 h-4 opacity-50"></i>
                            <input type="text" name="nom" value="<?php echo htmlspecialchars($user['nom']); ?>"
                                class="grow" required />
                        </div>
                    </div>

                    <!-- Username -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-bold">Nom d'utilisateur</span>
                        </label>
                        <div class="input input-bordered flex items-center gap-3">
                            <i data-lucide="at-sign" class="w-4 h-4 opacity-50"></i>
                            <input type="text" name="username"
                                value="<?php echo htmlspecialchars($user['username']); ?>" class="grow" required />
                        </div>
                    </div>

                    <!-- Info Email (Statique) -->
                    <div class="alert alert-info bg-primary/5 border-none p-3 mt-2">
                        <i data-lucide="info" class="w-4 h-4"></i>
                        <span class="text-xs opacity-70">L'adresse email est liée à votre compte et ne peut pas être
                            changée.</span>
                    </div>

                    <!-- Boutons -->
                    <div class="card-actions flex-col mt-6">
                        <button type="submit" class="btn btn-primary w-full">
                            <i data-lucide="save" class="w-4 h-4"></i>
                            Enregistrer les modifications
                        </button>
                        <a href="profile.php" class="btn btn-ghost btn-sm w-full mt-2">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>