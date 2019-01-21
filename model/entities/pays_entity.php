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