<?php
include("../../../Uniix/Connexion.php");

// Prendre les valeurs dans le pop up
if( preg_match("/^[a-zA-Z]+$/",$_GET['nom']) && isset($_GET['circonference']) && $_GET['distance'] && isset($_GET['documentation'])){ 
    $nom = $_GET['nom'];
    $circonference = $_GET['circonference'];
    $distance = $_GET['distance'];
    $documentation = $_GET['documentation'];
    // requete d'insertion
    $query = "INSERT INTO planete (nom,circonference,distance,documentation) VALUES ('$nom','$circonference','$distance','$documentation')";
    $stmt = $pdo->prepare($query);
    echo $query;

    $stmt->execute();

    header('location:index.php');
}
else {
    
    header('location:index.php');
}