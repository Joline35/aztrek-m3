<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico/favicon.ico"/>

    <link href=“//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css” rel=“stylesheet”>
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/styles.css">


    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="stylesheet" href="<?= $stylesheet; ?>">
    <?php endforeach; ?>

    <title>Aztrek | <?= $title ?></title>


    <meta name="description" content="<?= $description; ?>">
</head>

<body>


<!-- ========================================================

                       Header

                       ============================================================= -->


<header class="header-top">

    <?php getMenu(); ?>


    <div class="logo">
        <img src="./media/logo-aztrek.png" alt="">
    </div>

    <div class="slogan">
        <h3>Vos rêves sont au sommet</h3>
    </div>

    <div class="accroche container">
        <p>Créez, organisez et partagez vos meilleurs souvenirs avec notre communauté de voyageurs passionnés</p>
        <a class="btn-rejoindre wh" href="create_account.php">Nous rejoindre</a>
    </div>


    <form class="search-form" action="#" method="GET">
        <input type="text" name="keywords" placeholder="Rechercher une destination | S’inspirer…">
        <input type="submit" name="send" value="Valider">
    </form>


</header>

<!-- Fin Header -->