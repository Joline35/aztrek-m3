<?php
require_once "model/database.php";
require_once "functions.php";

$circuits = getAllCircuit(6);

getHeader("Accueil", "Aztrek, site de voyage pour les passionnés de Treks");
?>

<!-- ========================================================

                Section Carnets de Voyages

============================================================= -->


<section class="carnets-voyage container">

    <h2>Carnets de voyage à la Une</h2>

    <div class="carnets">

        <div class="carnet">
            <img src="./uploads/carnet-1.png" alt="">
            <div class="pres-carnet">

                <img src="./uploads/portrait-carnet-1.png" alt="">
                <p><strong> Trek un jour, trek toujours !</strong> <br><strong>By @lafolietravel</strong></p>
            </div>
        </div>

        <div class="carnet">
            <img src="./uploads/carnet-2.png" alt="">
            <div class="pres-carnet">
                <img src="./uploads/portrait-carnet-2.png" alt="">
                <p><strong> Souvenirs du Costa Rica</strong> <br><strong> By trekkist4life</strong></p>
            </div>
        </div>

        <div class="carnet">
            <img src="./uploads/carnet-3.png" alt="">
            <div class="pres-carnet">

                <img src="./uploads/portrait-carnet-3.png" alt="">
                <p><strong> Le Mexique et ses secrets</strong> <br> <strong> By Carolinalftourist</strong></p>
            </div>
        </div>

    </div>

    <a class="btn-carnet btn-right wh">En lire plus</a>

</section>

<!-- Section Carnets de voyage -->


<!-- ========================================================

                Section Destinations

============================================================= -->


<section class="destinations container">
    <h2>Destinations à découvrir</h2>

    <div class="sejours sejours-accueil">
        <?php foreach ($circuits as $circuit) : ?>
            <div class="sejour sejour-accueil">
                <a href="circuit.php?id=<?= $circuit ["id"]; ?>">
                <img src="uploads/<?= $circuit ["image"]; ?>">

                <div class="pres-presentation">
                    <h5><?= $circuit ["pays"]; ?></h5>
                    <div class="bgc-p">
                        <p><strong><?= $circuit ["titre"]; ?></strong></p>
                        <p><?= $circuit ["description_courte"]; ?></p>
                    </div>
                </div>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
    <a class="btn-circuit btn-right wh" href="destinations.php">Tous nos circuits</a>
</section>

<!-- Section Fin des Destinations -->


<!-- ========================================================

                Section Agence

============================================================= -->


<section class="agence container">
    <div class="agence-content">
        <h3>Parce qu’on aime vous faciliter l’ascension !</h3>

        <ul>
            <li>Devis instantanés, Réservation de votre séjour en ligne.</li>
            <li>Personnalisation de votre séjour en quelques clics.</li>
            <li>Plus d’une douzaine de circuits spécialement conçus pour des passionnés de Treks.
                Et parce qu’on tient à notre planète, on voyage de façon eco-responsable ;)
            </li>
        </ul>


        <a class="btn-agence btn-right wh">ORGANISER MON VOYAGE AVEC L’AGENCE AZTREK</a>
    </div>
    <img class='randonneur' src="./media/Randonneur.png" alt="#">
</section>


<!-- Fin Section Agence -->


<!-- ========================================================

                Section Album Photos

============================================================= -->


<section class="album container">

    <div class="photo-reseaux">

        <div class="owl-carousel owl-theme">
            <div><img src="uploads/<?= $photo ["photo"]; ?>" alt=""></div>
        </div>

    </div>


</section>


<!-- Fin Section Album Photos -->


<?php getFooter() ?>


