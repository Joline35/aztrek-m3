<?php

function getUtilisateurByEmailMotDePasse(string $email, string $password){

    global $connection;

    $query = "
    SELECT * 
    FROM utilisateur
    WHERE email = :email
    AND mot_de_passe = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email" , $email );
    $stmt->bindParam(":password" , $password );
    $stmt->execute();

    return $stmt->fetch();

}

function insertUtilisateur(string $nom, string $prenom, string $email, string $mot_de_passe){
    global $connection;

    $query = "
    INSERT INTO utilisateur(nom, prenom, portrait, email, mot_de_passe, admin) 
    VALUES (:nom, :prenom, :portrait, :email, SHA1(:mot_de_passe), 0)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email" , $email );
    $stmt->bindParam(":mot_de_passe" , $mot_de_passe );
    $stmt->bindParam(":nom" , $nom );
    $stmt->bindParam(":prenom" , $prenom );
    $stmt->bindParam(":portrait" , $portrait );

    try {
        return $stmt->execute();
    } catch (PDOException $exception) {
        return false;
    }
}