<?php
require_once "functions.php";
require_once "model/database.php";

$liste_pays = getAllEntities("pays");

getHeader("Destinations", "Aztrek, site de voyage pour les passionnés de Treks");
getMenu()
?>

<section class="destinations container">
    <h2>Nos Destinations</h2>

    <?php foreach ($liste_pays as $pays) : ?>
        <div class="sejours">
            <div class="sejour">
                <img src="uploads/<?= $pays ["image"]; ?>" alt="">
                <div class="pres-presentation">
                    <h5><?= $pays ["libelle"]; ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php getFooter() ?>


