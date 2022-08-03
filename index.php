<?php session_start();
include "includes/db.php";
include "includes/functions.php";
?>
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


    <?php include "includes/footer.php"; ?>
</body>
</html>