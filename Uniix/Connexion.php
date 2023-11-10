<?php

$dsn = 'mysql:host=' . "Localhost" . ';dbname=' . "sayna_odyssey" . '';

$username = "sayna_odyssey_user";

$password = 'sayna_odyssey_psw';

try {

    // Création de l'objet PDO

    $pdo = new PDO($dsn, $username, $password);

    // Configuration des options de PDO

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vous êtes maintenant connecté à la base de données

    // ... Votre code pour exécuter des requêtes et effectuer des opérations sur la base de données ...

} catch (PDOException $e) {

    // En cas d'erreur de connexion, affichage du message d'erreur

    echo 'Erreur de connexion : ' . $e->getMessage();
}
