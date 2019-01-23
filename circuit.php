<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$circuit = getOneEntity("circuit", $id);
$departs = getAllDepartByCircuit($id);

getHeader($circuit["titre"], "Aztrek, site de voyage pour les passionnés de Treks");
getMenu()
?>


    <main class="container">

        <section class="row">
            <div class="col-md-4">
                <img src="uploads/<?= $circuit ["image"]; ?>" alt="<?= $circuit ["titre"]; ?>" class="img-responsive">
            </div>


            <div class="col-md-4">
                <h2><?= $circuit ["titre"]; ?></h2>
                <p>
                    <?= $circuit ["description"]; ?>
                </p>

                <a class="btn-circuit btn-right wh" href="destinations.php">Tous nos circuits</a>
            </div>


        </section>

<?php if ($departs) : ?>

    <table class="tableau-departs">
        <tr>
        <th><strong>Départs</strong></th>
        <th><strong>Prix</strong></th>
        <th><strong>Places totales</strong></th>
        </tr>
<?php foreach ($departs as $depart) : ?>
      <tr>
        <td><?= $depart['date_depart'] ?></td>
        <td><?= $depart['prix'] ?> €</td>
        <td><?= $depart['place_total']?> places disponibles</td>
      </tr>

<?php endforeach; ?>


<?php else : ?>

        <p>Victime de son succès, ce circuit n'a plus de départs disponibles pour le moment.</p>

        <?php endif; ?>
    </table>
        <a class="btn-circuit btn-right wh" href="create_account.php">Je réserve ma place !</a>


    </main>
<?php getFooter() ?>