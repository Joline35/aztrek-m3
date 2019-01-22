<?php

function insertCategorie(string $libelle){

global $connection;

$query = "INSERT INTO
  pays (libelle) VALUES (:libelle)";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle );
    $stmt->execute();

};

function updateCategorie(int $id, string $libelle) {

    global $connection;

    $query = "UPDATE pays SET libelle = :libelle WHERE id = :id";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id );
    $stmt->bindParam(":libelle", $libelle );
    $stmt->execute();

};