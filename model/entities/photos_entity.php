<?php

function getOneRecette(int $id): array{

    global $connection;


    $query = "
    SELECT circuit.*,
    DATE_FORMAT(circuit.date_creation, '%d-%m-%Y') AS date_creation_format,
    pays.libelle AS pays,
    CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS pseudo,
    COUNT(favoris.utilisateur_id) AS nb_likes
    FROM circuit
    INNER JOIN pays on circuit.categorie_id = pays.id
    INNER JOIN utilisateur on circuit.utilisateur_id = utilisateur.id
    LEFT JOIN  favoris on circuit.id = favoris.recette_id
    WHERE circuit.publie = 1
    AND circuit.id = :id
    GROUP BY circuit.id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetch();
}