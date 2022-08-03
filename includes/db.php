<?php

$username = "root";
$password = "root";
try {
    $db = new PDO(
        "mysql:host=localhost;dbname=test_technique_alternance;charset=utf8",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}