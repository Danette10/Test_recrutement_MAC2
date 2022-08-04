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
                            <a class="nav-link <?= $title == "Test de recrutement - Connexion" ? 'active' : ''?>" href="http://localhost/Test_recrutement_MAC2/connexion/">Connexion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $title == "Test de recrutement - Inscription" ? 'active' : ''?>" href="http://localhost/Test_recrutement_MAC2/inscription/">Inscription</a>
                        </li>
                    <?php } else{ ?>

                        <li class="nav-item">
                            <a class="nav-link <?= $title == "Test de recrutement - Modifier mon profil" ? 'active' : ''?>" href="http://localhost/Test_recrutement_MAC2/modifier-mon-profil/">Modifier mon profil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Test_recrutement_MAC2/logout.php">Déconnexion</a>
                        </li>


                    <?php } ?>


                </ul>

                <?php if(isset($_SESSION['rights']) && $_SESSION['rights'] == 2){ ?>
                        <a class="nav-link" href="http://localhost/Test_recrutement_MAC2/admin/"><img src="http://localhost/Test_recrutement_MAC2/images/ico_view_users.png" width="50"></a>

                <?php } ?>
            </div>
        </div>
    </nav>
</header>