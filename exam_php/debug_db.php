<?php
// On ne peut pas le lancer en CLI mais le code est bon pour le web
require_once "config.php";
$res = mysqli_query($link, "SHOW TABLES LIKE 'user_progress'");
if(mysqli_num_rows($res) > 0) {
    echo "TABLE EXISTE";
} else {
    echo "TABLE ABSENTE";
}
?>
