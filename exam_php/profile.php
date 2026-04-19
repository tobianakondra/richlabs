<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login.php");
    exit;
}
?>
<h1>Bienvenue sur votre profil,
    <?php echo $_SESSION["nom_complet"]; ?> !
</h1>
<p>Utilisateur :
    <?php echo $_SESSION["username"]; ?>
</p>
<p>Email :
    <?php echo $_SESSION["email"]; ?>
</p>
<a href="auth/logout.php">Se déconnecter</a>