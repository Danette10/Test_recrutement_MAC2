<?php
include "../includes/db.php";

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$address = htmlspecialchars($_POST['address']);
$postalCode = htmlspecialchars($_POST['postalCode']);
$city = htmlspecialchars($_POST['city']);
$comment = htmlspecialchars($_POST['comment']);
$password = htmlspecialchars($_POST['password']);
$cPassword = htmlspecialchars($_POST['cPassword']);

$comment = nl2br($comment);

if (!empty($name) && !empty($firstname) && !empty($email) && !empty($phone) && !empty($address) && !empty($postalCode) && !empty($city) && !empty($comment) && !empty($password) && !empty($cPassword)) {

    setcookie('name', $name, time() + 3600, '/');
    setcookie('firstname', $firstname, time() + 3600, '/');
    setcookie('address', $address, time() + 3600, '/');
    setcookie('city', $city, time() + 3600, '/');
    setcookie('comment', $comment, time() + 3600, '/');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Votre email n\'est pas valide&type=danger');
        exit();
    }

    $selectEmail = $db->prepare('SELECT email FROM users WHERE email = :email');
    $selectEmail->execute([
        'email' => $email
    ]);
    $emailExist = $selectEmail->fetch(PDO::FETCH_ASSOC);
    if ($emailExist) {
        header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Cet email est déjà utilisé&type=danger');
        exit();
    }else{
        setcookie('email', $email, time() + 3600, "/");
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Votre numéro de téléphone n\'est pas valide ! Il doit contenir 10 chiffres&type=danger');
        exit();
    }else{
        setcookie('phone', $phone, time() + 3600, "/");
    }

    if (!preg_match('/^[0-9]{5}$/', $postalCode)) {
        header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Votre code postal n\'est pas valide ! Il doit contenir 5 chiffres&type=danger');
        exit();
    }else{
        setcookie('postalCode', $postalCode, time() + 3600, "/");
    }

    if($password != $cPassword) {
        header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Les mots de passe ne correspondent pas&type=danger');
        exit();
    }




    $insertInfo = $db->prepare('INSERT INTO users (name, firstname, email, phone, address, postal_code, city, comment, password) VALUES (:name, :firstname, :email, :phone, :address, :postal_code, :city, :comment, :password)');
    $insertInfo->execute([
        'name' => $name,
        'firstname' => $firstname,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'postal_code' => $postalCode,
        'city' => $city,
        'comment' => $comment,
        'password' => hash("sha512", $password)
    ]);

    header('Location: ../index.php?message=Votre inscription a bien été prise en compte&type=success');
    exit();

}else{
    header('Location: http://localhost/Test_recrutement_MAC2/form/registration.php?message=Vous devez remplir tous les champs&type=danger');
    exit();
}



?>