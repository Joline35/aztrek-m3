<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$circuit = getOneEntity("circuit", $id);
$departs = getAllDepartByCircuit($id);
$difficulte = $circuit['difficulte_id'];

getHeader($circuit["titre"], "Aztrek, site de voyage pour les passionnés de Treks");
getMenu()
?>


    <main class="container">

        <section class="row">


            <div class="img-circuit">
                <img src="uploads/<?= $circuit ["image"]; ?>" alt="<?= $circuit ["titre"]; ?>">
            </div>
            <div class="difficulte">
            <p>A vos bâtons ! Niveau de difficulté du circuit :</p>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php  if ($i <= $difficulte) : ?>
                        <i class="fa fa-paper-plane"></i>
                    <?php else: ?>
                        <i class="fa fa-paper-plane-o"></i>
                    <?php endif; ?>
                <?php endfor; ?>

                <p><br>Durée du circuit :</p>
                <p class="duree"><strong><?= $circuit['duree'] ;?> Jours</strong></p>
            </div>



            <div class="pres-circuit">
                <h2><?= $circuit ["titre"]; ?></h2>
                <p>
                    <?= $circuit ["description"]; ?>
                </p>

            </div>





            <a class="btn-circuit btn-right wh" href="destinations.php">Tous nos circuits</a>


        </section>

        <div class="depart">
            <?php if ($departs) : ?>

            <table class="tableau-departs">
                <tr>
                    <td class="td-titre"><strong>Départs</strong></td>
                    <td class="td-titre"><strong>Prix</strong></td>
                    <td class="td-titre"><strong>Places totales</strong></td>
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

        </div>
    </main>






<?php getFooter() ?>