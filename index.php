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

        <?php include "includes/message.php"; ?>

        <h1 class="text-center text-white" id="title_home">Test de recrutement réalisé par Dan Sebag</h1>


    </main>


    <?php
    include "includes/script.php";
    include "includes/footer.php";
    ?>
</body>
</html>