<?php

function getOneRecette(int $id): array{

    global $connection;


    $query = "
    SELECT recette.*,
    DATE_FORMAT(recette.date_creation, '%d-%m-%Y') AS date_creation_format,
    categorie.libelle AS categorie,
    CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom, 1), '.') AS pseudo,
    COUNT(favoris.utilisateur_id) AS nb_likes
    FROM recette
    INNER JOIN categorie on recette.categorie_id = categorie.id
    INNER JOIN utilisateur on recette.utilisateur_id = utilisateur.id
    LEFT JOIN  favoris on recette.id = favoris.recette_id
    WHERE recette.publie = 1
    AND recette.id = :id
    GROUP BY recette.id
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetch();
}