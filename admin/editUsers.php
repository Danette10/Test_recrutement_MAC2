<?php session_start();
include "../includes/db.php";
$idUser = htmlspecialchars($_GET['id']);

$selectInfo = $db->prepare("SELECT name, firstname, email, phone, address, postal_code, city, comment FROM users WHERE id = :id");

$selectInfo->execute([
    'id' => $idUser
]);

$info = $selectInfo->fetch(PDO::FETCH_ASSOC);

$name = $info['name'];
$firstname = $info['firstname'];
$email = $info['email'];
$phone = $info['phone'];
$address = $info['address'];
$postalCode = $info['postal_code'];
$city = $info['city'];
$comment = $info['comment'];

?>
<!doctype html>
<html lang="fr">
<?php
$title = "Test de recrutement - Modifier un profil";
$linkCss = "../css/style.css";
include "../includes/head.php";
?>
<body>

<?php include "../includes/header.php"; ?>

<main>

    <div class="container col-md-6">
        <?php include "../includes/message.php"; ?>
    </div>

    <h1 class="text-center text-white"><strong>Modifier le profil de <?= $firstname . ' ' . $name ?></strong></h1>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <form action="checksAdmin/checkUpdate.php?id=<?= $idUser ?>" method="post">

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
                            <input type="email" class="p-3" id="email" name="email" value="<?= $email ?>" oninput="checkEmail()" required>
                            <span>Email</span>
                        </div>

                        <span id="logEmail" class="mb-3"></span>

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

                        <div class="form-group mb-2 inputBox">
                            <textarea class="p-3" id="comment" name="comment" rows="1" required><?= $comment ?></textarea>
                            <span>Commentaire</span>
                        </div>

                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>

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