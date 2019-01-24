<?php

require_once "model/database.php";
require_once "functions.php";

getHeader("Créer un compte", "Formulaire de création de compte");
getMenu()

?>

<h3 class="membre">Je deviens membre</h3>

<form class="crea-fom" action="create_account_query.php" method="post">
   <div class="form">
    <p>
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" required>
    </p>
    <p>
        <label>Prénom</label>
        <input type="text" name="prenom" placeholder="Prénom" required>
    </p>

    <p>
        <label>Email</label>
        <input type="email" name="email" placeholder="E-mail" required>
    </p>

    <p>
        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" required>
    </p>

    <p>
        <label>Votre Avatar</label>
        <input type="image" name="portrait">
    </p>
   </div>
    <input type="submit" value="Créer mon compte">


</form>


<?php getFooter() ?>