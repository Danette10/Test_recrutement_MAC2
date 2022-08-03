<!doctype html>
<html lang="fr">
<?php
$title = "Test de recrutement - Inscription";
$linkCss = "../css/style.css";
include "../includes/head.php";
?>
<body>

    <?php include "../includes/header.php"; ?>

    <main>

        <?php include "../includes/message.php"; ?>

        <h1 class="text-center text-white">Inscription</h1>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <form action="../checks/check_informations.php" method="post">

                    <div class="d-flex">

                        <div class="col-md-6 me-4">

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="name" name="name" required>
                                <span>Nom</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="firstname" name="firstname" required>
                                <span>Prénom</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="email" class="p-3" id="email" name="email" oninput="checkEmail()" required>
                                <span>Email</span>
                            </div>
                            <span id="logEmail"></span>

                            <div class="form-group mb-3 inputBox">
                                <input type="number" class="p-3" id="phone" name="phone" required>
                                <span>Téléphone</span>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="address" name="address" required>
                                <span>Adresse</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="number" class="p-3" id="postalCode" name="postalCode" required>
                                <span>Code postal</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="city" name="city" required>
                                <span>Ville</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <textarea class="p-3" id="comment" name="comment" rows="1" required></textarea>
                                <span>Commentaire</span>
                            </div>

                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Inscription</button>

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