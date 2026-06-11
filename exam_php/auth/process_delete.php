<?php
session_start();

// Vérifier si l'utilisateur est bien connecté
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

require_once "../config.php";

$user_id = $_SESSION["id"];

// Début de la transaction pour s'assurer que tout est supprimé proprement
mysqli_begin_transaction($link);

try {
    // 1. Supprimer la progression des cours
    $sql_progress = "DELETE FROM user_progress WHERE user_id = ?";
    if ($stmt_p = mysqli_prepare($link, $sql_progress)) {
        mysqli_stmt_bind_param($stmt_p, "i", $user_id);
        mysqli_stmt_execute($stmt_p);
        mysqli_stmt_close($stmt_p);
    }

    // 2. Supprimer l'utilisateur
    $sql_user = "DELETE FROM users WHERE id = ?";
    if ($stmt_u = mysqli_prepare($link, $sql_user)) {
        mysqli_stmt_bind_param($stmt_u, "i", $user_id);
        mysqli_stmt_execute($stmt_u);
        mysqli_stmt_close($stmt_u);
    }

    // Validation des changements
    mysqli_commit($link);

    // Détruire la session et rediriger
    $_SESSION = array();
    session_destroy();

    header("location: register.php?msg=account_deleted");
    exit;

} catch (Exception $e) {
    // En cas d'erreur, on annule tout
    mysqli_rollback($link);
    header("location: ../profile.php?error=deletion_failed");
    exit;
}

mysqli_close($link);
?>
