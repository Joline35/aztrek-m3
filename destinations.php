<?php
require_once "functions.php";
require_once "model/database.php";

$liste_pays = getAllEntities("pays");

getHeader("Destinations", "Aztrek, site de voyage pour les passionnés de Treks");
getMenu()
?>

<section class="destinations container">
    <h2>Nos Destinations</h2>


    <div class="sejours">
        <?php foreach ($liste_pays as $pays) : ?>
            <div class="sejour">
                <a href="pays.php?id=<?= $pays ["id"]; ?>">
                    <img src="uploads/<?= $pays ["image"]; ?>" alt="">

                    <div class="pres-presentation">
                        <h5><?= $pays ["libelle"]; ?></h5>
                    </div>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</section>

<?php getFooter() ?>


