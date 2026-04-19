<?php
session_start();
require_once "../config.php";

// Vérifier si l'utilisateur est bien connecté
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["id"];
    $new_username = trim($_POST["username"]);
    $new_nom = trim($_POST["nom"]);
    $new_prenom = trim($_POST["prenom"]);

    // 1. Vérifier si le nouveau username n'est pas déjà pris par qulequ'un d'autre
    $sql_check = "SELECT id FROM users WHERE username = ? AND id != ?";
    if ($stmt_check = mysqli_prepare($link, $sql_check)) {
        mysqli_stmt_bind_param($stmt_check, "si", $new_username, $id);
        mysqli_stmt_execute($stmt_check);
        mysqli_stmt_store_result($stmt_check);

        if (mysqli_stmt_num_rows($stmt_check) > 0) {
            echo "Ce nom d'utilisateur est déjà pris. <a href='../edit_profile.php'>Réessayer</a>";
            exit;
        }
        mysqli_stmt_close($stmt_check);
    }

    // 2. Mettre à jour les informations
    $sql = "UPDATE users SET username = ?, nom = ?, prenom = ? WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssi", $new_username, $new_nom, $new_prenom, $id);

        if (mysqli_stmt_execute($stmt)) {
            // 3. Mise à jour des variables de SESSION
            $_SESSION["username"] = $new_username;
            $_SESSION["nom_complet"] = $new_prenom . " " . $new_nom;

            // Redirection vers le profil avec un message de succès
            header("location: ../profile.php?update=success");
            exit;
        } else {
            echo "Une erreur est survenue lors de la mise à jour.";
        }
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($link);
?>