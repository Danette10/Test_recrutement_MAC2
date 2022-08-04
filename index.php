<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<?php
$title = "Test de recrutement - Accueil";
$linkCss = "css/style.css";
include "includes/head.php";
?>
<body>

    <?php include "includes/header.php"; ?>

    <main>

        <div class="container col-md-6">
            <?php include "includes/message.php"; ?>
        </div>

        <h1 class="text-center text-white" id="title_home"><strong>Test de recrutement réalisé par Dan Sebag</strong></h1>

        <div class="intro text-white mt-5 fs-3">
            <p>
                Bienvenue sur le site de test de recrutement de Dan Sebag. Vous pouvez vous inscrire ou vous connecter pour accéder à votre espace personnel. Pour acceder à l'éspace administrateur voici les identifiants :
                <ul>
                    <li>Email : <strong>admin.site@gmail.com</strong></li>
                    <li>Mot de passe : <strong>admin</strong></li>
                </ul>
            </p>
        </div>
    </main>


    <?php
    include "includes/script.php";
    include "includes/footer.php";
    ?>
</body>
</html>