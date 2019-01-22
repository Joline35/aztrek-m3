<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$liste_pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un pays</h1>

<form action="update_query.php" method="POST">
    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="libelle" value="<?php echo $pays["libelle"]; ?>" class="form-control" placeholder="Libellé" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>