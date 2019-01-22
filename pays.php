<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$circuit_par_pays = getAllCircuitByPays($id);

getHeader($pays["libelle"], "Aztrek, site de voyage pour les passionnés de Treks");
getMenu()
?>

<section class="pays container">
    <h2><?= $pays ["libelle"];?></h2>



        <?php foreach ($circuit_par_pays as $circuit) : ?>
            <div class="pays">
                <a href="circuit.php?id=<?= $circuit ["id"]; ?>">
                <img src="uploads/<?= $circuit ["image"]; ?>" alt="">
                <div class="presentation">
                    <h5><?= $circuit ["titre"]; ?></h5>
                    <p><?= $circuit ["description_courte"] ;?></p>
                </div>
                </a>
            </div>

        <?php endforeach; ?>
    <a class="btn-circuit btn-right wh" href="destinations.php">Retour</a>

</section>

<?php getFooter() ?>