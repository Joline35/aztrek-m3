<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$circuit = getEntity("circuit", $id);

$error = deleteEntity("circuit", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

unlink("../../../uploads/" . $circuit["image"]);

header('Location: index.php');
