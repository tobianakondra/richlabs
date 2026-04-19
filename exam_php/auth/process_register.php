<?php
// Afficher toutes les erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../config.php";

//definir les variables et les initialiser
$username = $email = $password = $confirm_password = $nom = $prenom = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //valider le username
    if (empty(trim($_POST["username"]))) {
        $username_err = "donner un nom d'utilisateur valide";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "username can only contain letters, numbers and underscore";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            //conecter les variables au vrai valeurs
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "ce nom d'utilisateur est deja utilisé";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! something went wrong. Please try again later.";
            }

            //fermer la requete
            mysqli_stmt_close($stmt);
        }
    }

    // valider l'email et vérifier s'il existe déjà
    if (empty(trim($_POST["email"]))) {
        $email_err = "veuillez entrer votre email";
    } else {
        // Préparer une requête de sélection
        $sql = "SELECT id FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST["email"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "cet email est déjà utilisé pour un autre compte";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Une erreur est survenue.";
            }
            mysqli_stmt_close($stmt);
        }
    }

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);

    //valider le  mot de passe
    if (empty(trim($_POST["password"]))) {
        $password_err = "le mot de passe est requis";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "le mot de passe doit au moins contenir 6 caracteres";
    } else {
        $password = trim($_POST["password"]);
    }

    //valider confirmer le mot de passe
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "please confirm password";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password ne correspondent pas";
        }
    }


    //verifier les erreurs avant de commit dans la base de donnée
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        //preparer une requete
        $sql = "INSERT INTO users (username, email,nom,prenom, password) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_email, $param_nom, $param_prenom, $param_password);

            //configurer les parametres
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_nom = $nom;
            $param_prenom = $prenom;

            if (mysqli_stmt_execute($stmt)) {
                // On connecte l'utilisateur tout de suite
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["nom_complet"] = $prenom . " " . $nom;
                $_SESSION["email"] = $email;

                header("location: profile.php");
                exit;
            }


            //fermer la requete
            mysqli_stmt_close($stmt);
        }
    }

    // Affichage des erreurs si l'inscription a échoué
    if (!empty($email_err))
        echo "<p style='color:red'>$username_err</p>";

    if (!empty($username_err))
        echo "<p style='color:red'>$username_err</p>";
    if (!empty($password_err))
        echo "<p style='color:red'>$password_err</p>";
    if (!empty($confirm_password_err))
        echo "<p style='color:red'>$confirm_password_err</p>";

    if (!empty($username_err) || !empty($password_err) || !empty($confirm_password_err)) {
        echo "<br><a href='register.php'>Retour à l'inscription</a>";
    }

    //fermer la connection
    mysqli_close($link);
}
?>