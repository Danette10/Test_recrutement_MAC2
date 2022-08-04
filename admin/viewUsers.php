<?php session_start();
include "../includes/db.php";

if(!isset($_SESSION['id']) || $_SESSION['rights'] != 2){
    header("Location: http://localhost/Test_recrutement_MAC2/");
    exit();
}
?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<?php
$title = "Test de recrutement - Administration";
$linkCss = "../css/style.css";
include "../includes/head.php";
?>
<body onload="reloadTable()">

    <?php include "../includes/header.php"; ?>

    <main>

        <div class="container col-md-6">
            <?php include "../includes/message.php"; ?>
        </div>

        <h1 class="text-center text-white"><strong>Administration</strong></h1>

        <div id="users">

        </div>

    </main>


    <?php
    include "../includes/script.php";
    include "../includes/footer.php";
    ?>

</body>
</html>
