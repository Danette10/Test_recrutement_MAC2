<!doctype html>
<html lang="fr">
<?php
$title = "Test de recrutement - Verification des informations";
$linkCss = "../css/style.css";
include "../includes/head.php";

$name = $_POST['name'] ?? $_COOKIE['name'];
$firstname = $_POST['firstname'] ?? $_COOKIE['firstname'];
$email = $_POST['email'] ?? $_COOKIE['email'];
$phone = $_POST['phone'] ?? $_COOKIE['phone'];
$address = $_POST['address'] ?? $_COOKIE['address'];
$postalCode = $_POST['postalCode'] ?? $_COOKIE['postalCode'];
$city = $_POST['city'] ?? $_COOKIE['city'];
$comment = $_POST['comment'] ?? $_COOKIE['comment'];
?>
<body>

    <?php include "../includes/header.php"; ?>

    <main>
        <?php include "../includes/message.php"; ?>

        <h1 class="text-center text-white" id="title_home">Vérification des informations</h1>

        <div class="container mt-5">
            <form action="../checks/check_registration.php" method="post">
                <div class="d-flex">

                    <div class="col-md-6 me-4">

                        <div class="form-group mb-3 inputBox">
                            <input type="text" class="p-3" id="name" name="name" value="<?= $name ?>" required>
                            <span>Nom</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <input type="text" class="p-3" id="firstname" name="firstname" value="<?= $firstname ?>" required>
                            <span>Prénom</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <input type="email" class="p-3" id="email" name="email" value="<?= $email ?>" required>
                            <span>Email</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <input type="number" class="p-3" id="phone" name="phone" value="<?= $phone ?>" required>
                            <span>Téléphone</span>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group mb-3 inputBox">
                            <input type="text" class="p-3" id="address" name="address" value="<?= $address ?>" required>
                            <span>Adresse</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <input type="number" class="p-3" id="postalCode" name="postalCode" value="<?= $postalCode ?>" required>
                            <span>Code postal</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <input type="text" class="p-3" id="city" name="city" value="<?= $city ?>" required>
                            <span>Ville</span>
                        </div>

                        <div class="form-group mb-3 inputBox">
                            <textarea class="p-3" id="comment" name="comment" rows="1" required><?= $comment ?></textarea>
                            <span>Commentaire</span>
                        </div>

                    </div>

                </div>
                <div class="form-group mb-3 col-md-3">
                    <input type="submit" class="btn btn-primary" value="Valider votre inscription" name="submit">
                </div>
            </form>

        </div>


    </main>


    <?php
    include "../includes/script.php";
    include "../includes/footer.php";
    ?>

</body>
</html>