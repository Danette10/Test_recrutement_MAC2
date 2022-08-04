<?php
$email = htmlspecialchars($_POST['email']);
$passwordLogin = htmlspecialchars($_POST['password']);
include "../includes/db.php";


if(!empty($email) && !empty($passwordLogin)){
$select = $db->prepare("SELECT id FROM users WHERE email = :email");
$select->execute([
    'email' => $email
]);


$reponse = $select->fetch();


if (!$reponse){
    header("Location: http://localhost/Test_recrutement_MAC2/form/login.php?message=Cette adresse email n'existe pas !&type=danger");
    exit();
}else{
    setcookie('email', $email, time() + (60 * 60 * 48), "/");


    $select = $db->prepare("SELECT id, rights FROM users WHERE email = :email AND password = :password");

    $select->execute([
        'email' => $email,
        'password' => hash("sha512", $passwordLogin)
    ]);

    $reponse = $select->fetch();

    if (!$reponse){
        header("Location: http://localhost/Test_recrutement_MAC2/form/login.php?message=Mot de passe incorrect !&type=danger");
        exit();
    }else{

        session_start();
        $_SESSION['id'] = $reponse['id'];
        $_SESSION['rights'] = $reponse['rights'];
        header("Location: ../index.php?message=Connexion réussi !&type=success");
        exit();

        }

    }
}else{
    header("Location: http://localhost/Test_recrutement_MAC2/form/login.php?message=Veuillez remplir tous les champs !&type=danger");
    exit();
}

?>
