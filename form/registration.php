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

        <div class="container col-md-6">
            <?php include "../includes/message.php"; ?>
        </div>

        <h1 class="text-center text-white">Inscription</h1>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <form action="../checks/checkRegistration.php" method="post">

                    <div class="d-flex">

                        <div class="col-md-6 me-4">

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="name" name="name" value="<?= $_COOKIE['name'] ?? '' ?>" required>
                                <span>Nom</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="firstname" name="firstname" value="<?= $_COOKIE['firstname'] ?? '' ?>" required>
                                <span>Prénom</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="email" class="p-3" id="email" name="email" value="<?= $_COOKIE['email'] ?? '' ?>" oninput="checkEmail()" required>
                                <span>Email</span>
                            </div>

                            <span id="logEmail" class="mb-3"></span>

                            <div class="form-group mb-3 inputBox">
                                <input type="number" class="p-3" id="phone" name="phone" value="<?= $_COOKIE['phone'] ?? '' ?>" required>
                                <span>Téléphone</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="password" class="p-3" id="password" name="password" required>
                                <span>Mot de passe</span>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="address" name="address" value="<?= $_COOKIE['address'] ?? '' ?>" required>
                                <span>Adresse</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="number" class="p-3" id="postalCode" name="postalCode" value="<?= $_COOKIE['postalCode'] ?? '' ?>" required>
                                <span>Code postal</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="text" class="p-3" id="city" name="city" value="<?= $_COOKIE['city'] ?? '' ?>" required>
                                <span>Ville</span>
                            </div>

                            <div class="form-group mb-2 inputBox">
                                <textarea class="p-3" id="comment" name="comment" rows="1" required><?= $_COOKIE['comment'] ?? '' ?></textarea>
                                <span>Commentaire</span>
                            </div>

                            <div class="form-group mb-3 inputBox">
                                <input type="password" class="p-3" id="cPassword" name="cPassword" required>
                                <span>Confirmation du mot de passe</span>
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