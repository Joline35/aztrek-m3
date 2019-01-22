<?php

require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../functions.php";

$user = getCurrentUser();

?>

<nav class="header-nav">


    <a class='burger' href=""><img src="./media/burger.png" alt=""></a>

    <div class="nav-nav">
        <ul class="nav-pages">
            <li><a class='btn' href="index.php">Accueil</a></li>
            <li><a class='btn' href="destinations.php">Destinations</a></li>
            <li><a class='btn' href="photos.php">Photos</a></li>
            <li><a class='btn' href="#">L'agence</a></li>
            <li><a class='btn' href="#">Contact</a></li>
        </ul>
    </div>


    <ul class="connection">

        <?php if (isset($user)) : ?>
            <li><a class='btn'href="#"><i class="fa fa-user"></i> <?= $user["email"]; ?></a></li>
            <li><a class='btn' href="<?= SITE_ADMIN . "logout.php"; ?>"><i class="fa fa-sign-out"></i>Déconnexion</a></li>
        <?php else: ?>
            <li><a href="<?= SITE_ADMIN; ?>"><img src="media/picto-user.png" alt=""></a></li>
            <li><a href="<?= SITE_URL . "create_account.php"; ?>"><i class="fa fa-user"></i>Créer un compte</a></li>
        <?php endif; ?>
    </ul>


</nav>


<ul class="nav-reseaux">

    <li><a href='https://fr-fr.facebook.com/'><img src="./media/facebook.png" alt=""></a></li>
    <li><a href="https://www.instagram.com/"><img src="./media/picto-insta.png" alt=""></a></li>
    <li><a href="https://www.pinterest.fr/"><img src="./media/pinterest.png" alt=""></a></li>

</ul>