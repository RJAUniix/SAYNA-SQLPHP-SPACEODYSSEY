<?php
include("../../../Uniix/Connexion.php");

// Prendre les valeurs dans le pop up
if( preg_match("/^[a-zA-Z]+$/",$_POST['nom']) && isset($_POST['circonference']) && $_POST['distance']){ 
    $nom = $_POST['nom'];
    $circonference = $_POST['circonference'];
    $distance = $_POST['distance'];
    // requete d'insertion
    $query = "INSERT INTO planete (nom,circonference,distance) VALUES ('$nom','$circonference','$distance')";
    $stmt = $pdo->prepare($query);

    $stmt->execute();

    header('location:index.php');
}