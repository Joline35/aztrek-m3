<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$description = $_POST['description'];
$description_courte = $_POST['description_courte'];
$duree = $_POST['duree'];
$date_creation = $_POST['date_creation'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertCircuit($titre, $pays_id, $filename, $description, $description_courte, $duree, $date_creation, $user["id"]);

header('Location: index.php');