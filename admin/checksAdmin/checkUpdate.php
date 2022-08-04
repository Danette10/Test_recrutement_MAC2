<?php
session_start();
include "../../includes/db.php";
$idUser = htmlspecialchars($_GET['id']);

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$address = htmlspecialchars($_POST['address']);
$postalCode = htmlspecialchars($_POST['postalCode']);
$city = htmlspecialchars($_POST['city']);
$comment = htmlspecialchars($_POST['comment']);

$comment = nl2br($comment);

$selectInfo = $db->prepare("SELECT name, firstname, email, phone, address, postal_code, city, comment FROM users WHERE id = :id");

$selectInfo->execute([
    'id' => $idUser
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
            'id' => $idUser
        ]);

        header('Location: http://localhost/Test_recrutement_MAC2/admin/viewUsers.php?message=Les informations ont été mises à jour !&type=success');
        exit();

    } else {
        header('Location: http://localhost/Test_recrutement_MAC2/admin/viewUsers.php?message=les informations n\'ont pas été modifiées !&type=danger');
        exit();
    }

}else{
    header('Location: http://localhost/Test_recrutement_MAC2/admin/editUsers.php?message=Tout les champs ne sont pas remplis !&type=danger');
    exit();
}

?>