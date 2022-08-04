<?php
$idUser = htmlspecialchars($_GET['id']);
include "../../includes/db.php";

$deleteUser = $db->prepare("DELETE FROM users WHERE id = :id");
$deleteUser->execute([
    'id' => $idUser
]);

echo "true";


?>