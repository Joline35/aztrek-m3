<?php
require_once '../../../model/database.php';

$liste_pays = getAllEntities("pays");
$liste_difficulte = getAllEntities("difficulte");
require_once '../../layout/header.php';
?>


    <h1>Modification d'un circuit</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select name="pays_id" class="form-control">
                <?php foreach ($liste_pays as $pays) : ?>
                    <option value="<?php echo $pays["id"]; ?>">
                        <?php echo $pays["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Description courte</label>
            <input type="text" name="description_courte" class="form-control" placeholder="Description courte" required>
        </div>
        <!--     <div class="form-group">-->
        <!--        <label>Date de création</label>-->
        <!--        <input type="date" name="date_creation" class="form-control" required>-->
        <!--    </div>-->
        <div class="form-group">
            <label>Durée du circuit</label>
            <input type="number" name="duree" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Difficulté du circuit</label>
            <select name="difficulte_id" class="form-control">
                <?php foreach ($liste_difficulte as $difficulte) : ?>
                    <option value="<?php echo $difficulte["id"]; ?>">
                        <?php echo $difficulte["libelle"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>