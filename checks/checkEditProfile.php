<?php
session_start();
include "../includes/db.php";

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$address = htmlspecialchars($_POST['address']);
$postalCode = htmlspecialchars($_POST['postalCode']);
$city = htmlspecialchars($_POST['city']);
$comment = htmlspecialchars($_POST['comment']);

$selectInfo = $db->prepare("SELECT name, firstname, email, phone, address, postal_code, city, comment FROM users WHERE id = :id");

$selectInfo->execute([
    'id' => $_SESSION['id']
]);

$info = $selectInfo->fetch(PDO::FETCH_ASSOC);

$nameActual = $info['name'];
$firstnameActual = $info['firstname'];
$emailActual = $info['email'];
$phoneActual = $info['phone'];
$addressActual = $info['address'];
$postalCodeActual = $info['postal_code'];
$cityActual = $info['city'];
$commentActual = $info['comment'];

if(!empty($name) && !empty($firstname) && !empty($email) && !empty($phone) && !empty($address) && !empty($postalCode) && !empty($city) && !empty($comment)) {

    if ($name != $nameActual || $firstname != $firstnameActual || $email != $emailActual || $phone != $phoneActual || $address != $addressActual || $postalCode != $postalCodeActual || $city != $cityActual || $comment != $commentActual) {

        $updateInfo = $db->prepare("UPDATE users SET name = :name, firstname = :firstname, email = :email, phone = :phone, address = :address, postal_code = :postal_code, city = :city, comment = :comment WHERE id = :id");

        $updateInfo->execute([
            'name' => $name,
            'firstname' => $firstname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'postal_code' => $postalCode,
            'city' => $city,
            'comment' => $comment,
            'id' => $_SESSION['id']
        ]);

        header('Location: http://localhost/Test_recrutement_MAC2/index.php?message=Vos informations ont été mises à jour !&type=success');
        exit();

    } else {
        header('Location: http://localhost/Test_recrutement_MAC2/index.php?message=Vos informations ne sont pas modifiées !&type=danger');
        exit();
    }

}else{
    header('Location: http://localhost/Test_recrutement_MAC2/profile/editProfile.php?message=Vous n\'avez pas rempli tous les champs !&type=danger');
    exit();
}

?>