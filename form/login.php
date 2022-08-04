<!doctype html>
<html lang="fr">
<?php
$title = "Test de recrutement - Connexion";
$linkCss = "../css/style.css";
include "../includes/head.php";
?>
<body>

    <?php include "../includes/header.php"; ?>

    <main>

        <div class="container col-md-6">
            <?php include "../includes/message.php"; ?>
        </div>

        <h1 class="text-center text-white"><strong>Connexion</strong></h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <form action="../checks/checkLogin.php" method="post">

                    <div class="form-group mb-3 inputBox">
                        <input type="email" class="p-3" id="email" name="email" value="<?= $_COOKIE['email'] ?? '' ?>" required>
                        <span>Email</span>
                    </div>

                    <div class="form-group mb-3 inputBox">

                        <input type="password" class="p-3" id="passwordLogin" name="password" required>
                        <span>Mot de passe</span>
                        <div class="eyes" id="eyes" onclick="viewPass('passwordLogin')">
                            <img id="eyeImg" src="../images/eyes/eyes_open.png" width="35">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Connexion</button>

                </form>
            </div>
        </div>

    </main>

    <?php
    include "../includes/script.php";
    include "../includes/footer.php";
    ?>

</body>
</html>