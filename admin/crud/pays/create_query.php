<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$pays = $_POST['libelle'];

insertPays($libelle);

header('Location: index.php');
