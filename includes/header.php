<?php
if(isset($_SESSION['id'])){
    $selectDemande = $db->prepare("SELECT id_applicant, id_recipient FROM relation WHERE id_recipient = :id_recipient");
    $selectDemande->execute([
        'id_recipient' => $_SESSION['id']
    ]);
    $demande = $selectDemande->fetchAll(PDO::FETCH_ASSOC);
    $idDemande = [];
    foreach ($demande as $key => $value) {
        $idDemande[] = $value['id_applicant'];
    }

    $countDemande = count($idDemande);
}else{
    $countDemande = 0;
}
?>
<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $title == "Test de recrutement - Accueil" ? 'active' : ''?>" href="http://localhost/Test_recrutement_MAC2/">Accueil</a>
                    </li>
                    <?php
                    if(!isset($_SESSION['id'])){
                        ?>

                        <li class="nav-item">
                            <a class="nav-link <?= $title == "Test de recrutement - Connexion" ? 'active' : ''?>" href="#">Connexion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $title == "Test de recrutement - Inscription" ? 'active' : ''?>" href="http://localhost/Test_recrutement_MAC2/inscrivez-vous/">Inscription</a>
                        </li>
                    <?php } else{ ?>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test_recrutement_MAC2/deconnexion.php">Déconnexion</a>
                        </li>

                    <?php } ?>


                </ul>
            </div>
        </div>
    </nav>
</header>