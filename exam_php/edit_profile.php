<?php
session_start();
require_once "config.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login.php");
    exit;
}

// On récupère les infos actuelles dans la base de données
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
    <title>Modifier mon profil - RichLabs</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-base-200">
    <?php include 'header.php'; ?>

    <main class="max-w-md mx-auto p-8 mt-10 card bg-base-100 shadow-xl">
        <h2 class="text-2xl font-bold mb-6">Modifier mes informations</h2>

        <form action="auth/process_update.php" method="POST" class="flex flex-col gap-4">
            <div class="form-control">
                <label class="label"><span class="label-text">Prénom</span></label>
                <input type="text" name="prenom" value="<?php echo $user['prenom']; ?>" class="input input-bordered"
                    required />
            </div>

            <div class="form-control">
                <label class="label"><span class="label-text">Nom</span></label>
                <input type="text" name="nom" value="<?php echo $user['nom']; ?>" class="input input-bordered"
                    required />
            </div>

            <div class="form-control">
                <label class="label"><span class="label-text">Nom d'utilisateur</span></label>
                <input type="text" name="username" value="<?php echo $user['username']; ?>" class="input input-bordered"
                    required />
            </div>

            <p class="text-sm opacity-50 mt-2">L'adresse email ne peut pas être modifiée.</p>

            <div class="flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary flex-1">Enregistrer</button>
                <a href="profile.php" class="btn btn-ghost">Annuler</a>
            </div>
        </form>
    </main>
</body>

</html>