<?php

function getAllCircuit(int $limit = 999){

    global $connection;

    $query = "
    SELECT
        circuit.*,
        DATE_FORMAT(circuit.date_creation, '%Y') AS date_creation_format,
        difficulte.libelle AS difficulte,
        pays.libelle AS pays
    FROM circuit
    INNER JOIN pays ON circuit.pays_id = pays.id
    INNER JOIN difficulte ON circuit.difficulte_id = difficulte.id
    LIMIT $limit
    ";
    $stmt = $connection->prepare($query);
    $stmt->execute();


    return $stmt->fetchAll();
}

function getOneCircuit(int $id): array{
    global $connection;

    $query = "
    SELECT circuit.*,
    DATE_FORMAT(cicuit.date_creation, '%Y') AS date_creation_format,
    difficulte.libelle AS difficulte
    FROM circuit
    INNER JOIN pays ON circuit.pays_id = pays.id
    INNER JOIN difficulte on circuit.difficulte._id = difficulte.id
    GROUP BY circuit.id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetch();
}

function insertRecette(string $titre, int $categorie_id, string $image, string $description, string $description_courte, int $couverts, string $temps_prepa, string $temps_cuisson, int $publie, int $utilisateur_id) {
    global $connection;

    $query = "
    INSERT INTO circuit (titre, image, description, description_courte, couverts, temps_prepa, temps_cuisson, publie, date_creation, utilisateur_id, categorie_id) 
    VALUES (:titre, :image, :description, :description_courte, :couverts, :temps_prepa, :temps_cuisson, :publie, NOW(), :utilisateur_id, :categorie_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":couverts", $couverts);
    $stmt->bindParam(":temps_prepa", $temps_prepa);
    $stmt->bindParam(":temps_cuisson", $temps_cuisson);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
}