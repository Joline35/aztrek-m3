<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$circuit = getOneEntity("circuit", $id);

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







    </main>
<?php getFooter() ?>