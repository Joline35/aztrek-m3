<?php

/**
 * Récupérer la liste des circuits pour un seul pays
 * @param int $id Identifiant du pays
 * @return array Liste des circuits d'un pays
 */
function getAllCircuitByPays(int $id): array{

    global $connection;

    $query = "
    SELECT
        circuit.*,
        pays.libelle AS pays
    FROM circuit
    INNER JOIN pays ON circuit.pays_id = pays.id
    WHERE circuit.pays_id = :id 
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertPays ($libelle, $image) {
    global $connection;

    $query = "
    INSERT INTO pays (libelle, image)
    VALUES (:libelle, :image)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}


function updatePays(int $id, string $libelle, $image) {

    global $connection;

    $query = "UPDATE pays SET libelle = :libelle, image = :image WHERE id = :id";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id );
    $stmt->bindParam(":libelle", $libelle );
    $stmt->bindParam(":image", $image );
    $stmt->execute();

};