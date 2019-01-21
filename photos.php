<?php

require_once "model/database.php";
require_once "functions.php";

getHeader("Album Photos");

getMenu()


?>


<!-- ========================================================

                Section Album Photos

============================================================= -->


<section class="album container">

    <div class="photo-reseaux">

        <div class="owl-carousel owl-theme">
            <div><img src="uploads/<?= $photo ["photo"] ;?>" alt=""></div>
        </div>

    </div>


</section>


<!-- Fin Section Album Photos -->



<?php getFooter() ?>

