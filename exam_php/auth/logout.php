<?php
session_start();

//detruire toute les variables de session
$_SESSION = array();

//detruire la session server
session_destroy();

//redirection vers la page d'accueil
header("location: ../index.php");
exit;
?>