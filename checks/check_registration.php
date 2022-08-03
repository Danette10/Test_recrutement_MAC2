<?php
include "../includes/db.php";
setcookie('name', htmlspecialchars($_POST['name']), time() + 3600);
setcookie('firstname', htmlspecialchars($_POST['firstname']), time() + 3600);
setcookie('email', htmlspecialchars($_POST['email']), time() + 3600);
setcookie('phone', htmlspecialchars($_POST['phone']), time() + 3600);
setcookie('address', htmlspecialchars($_POST['address']), time() + 3600);
setcookie('postalCode', htmlspecialchars($_POST['postalCode']), time() + 3600);
setcookie('city', htmlspecialchars($_POST['city']), time() + 3600);
setcookie('comment', htmlspecialchars($_POST['comment']), time() + 3600);

$name = $_COOKIE['name'];
$firstname = $_COOKIE['firstname'];
$email = $_COOKIE['email'];
$phone = $_COOKIE['phone'];
$address = $_COOKIE['address'];
$postalCode = $_COOKIE['postalCode'];
$city = $_COOKIE['city'];
$comment = $_COOKIE['comment'];


// Verrifier que l'email est valide
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../checks/check_informations.php?message=Votre email n\'est pas valide&type=danger');
    exit();
}

// Vérifier que le numéro de téléphone est valide (10 chiffres)
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    header('Location: ../checks/check_informations.php?message=Votre numéro de téléphone n\'est pas valide ! Il doit contenir 10 chiffres&type=danger');
    exit();
}

if (!empty($name) || !empty($firstname) || !empty($email) || !empty($phone) || !empty($address) || !empty($postalCode) || !empty($city)) {

    $insertInfo = $db->prepare('INSERT INTO users (name, firstname, email, phone, address, postal_code, city, comment) VALUES (:name, :firstname, :email, :phone, :address, :postal_code, :city, :comment)');
    $insertInfo->execute([
        'name' => $name,
        'firstname' => $firstname,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'postal_code' => $postalCode,
        'city' => $city,
        'comment' => $comment
    ]);

    header('Location: ../index.php?message=Votre inscription a bien été prise en compte&type=success');
    exit();

}else{
    header('Location: ../checks/check_informations.php?message=Vous devez remplir tous les champs&type=danger');
    exit();
}



?>