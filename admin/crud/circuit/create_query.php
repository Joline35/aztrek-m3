<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$description = $_POST['description'];
$description_courte = $_POST['description_courte'];
$duree = $_POST['duree'];
$date_creation = $_POST['date_creation'];
$pays_id = $_POST['pays_id'];
$difficulte_id = $_POST['difficulte_id'];

// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $image);

insertCircuit ($titre, $image, $description, $description_courte, $duree, $pays_id, $difficulte_id);

header('Location: index.php');