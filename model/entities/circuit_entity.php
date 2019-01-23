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

function insertCircuit ($titre, $image, $description, $description_courte, $duree, $pays_id, $difficulte_id) {
    global $connection;

    $query = "
    INSERT INTO circuit (titre, image, description, description_courte, duree, date_creation, pays_id, difficulte_id)
    VALUES (:titre, :image, :description, :description_courte, :duree, NOW(), :pays_id, :difficulte_id)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->execute();
}

function getAllDepartByCircuit(int $id): array{

    global $connection;

    $query = "
    SELECT
        depart.*,
        circuit.*,
           DATE_FORMAT(date_depart, '%d %M %Y') AS date_depart,
           ROUND(prix) AS prix,
        depart.id AS depart
    FROM depart
    INNER JOIN circuit ON depart.circuit_id = circuit.id
    WHERE depart.circuit_id = :id 
    GROUP BY depart.id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
