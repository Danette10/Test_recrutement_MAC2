<?php
include "../includes/db.php";
$selectInfo = $db->query("SELECT id, name, firstname, email, phone, address, postal_code, city, comment FROM users WHERE rights != 2");
$result = $selectInfo->fetchAll(PDO::FETCH_ASSOC);

echo "<table class='table table-hover text-center text-white'>";

echo "<thead>";

echo "<tr>";

echo "<th>ID</th>";
echo "<th>Nom</th>";
echo "<th>Prénom</th>";
echo "<th>Email</th>";
echo "<th>Téléphone</th>";
echo "<th>Adresse</th>";
echo "<th>Commentaire</th>";
echo "<th>Actions</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

foreach($result as $data){

    echo "<tr>";

    echo "<td>" . $data['id'] . "</td>";
    echo "<td>" . $data['name'] . "</td>";
    echo "<td>" . $data['firstname'] . "</td>";
    echo "<td>" . $data['email'] . "</td>";
    echo "<td>" . $data['phone'] . "</td>";
    echo "<td>" . $data['address'] . ", " . $data['postal_code'] . "<br>" . $data['city'] . "</td>";
    echo "<td>" . $data['comment'] . "</td>";
    echo "<td>";

    echo "<button class='btn btn-danger me-2' onclick='deleteUsers(" . $data['id'] . ")'>Supprimer</button>";
    echo "<a href='editUsers.php?id=" . $data['id'] . "' class='btn btn-warning'>Modifier</a>";

    echo "</td>";

    echo "</tr>";
}

echo "</tbody>";

echo "</table>";

?>