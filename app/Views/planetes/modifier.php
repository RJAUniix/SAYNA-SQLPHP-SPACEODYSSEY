<?php
include('../header.php');
include('../../../Uniix/Connexion.php');

if (isset($_POST['id']) && preg_match("/^[a-zA-Z]+$/",$_POST['nom']) && preg_match("/^.+$/",$_POST['documentation']) && isset($_POST['circonference']) && isset($_POST['distance'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $circonference = $_POST['circonference'];
    $documentation = $_POST['documentation'];
    $distance = $_POST['distance'];

    $query = "UPDATE planete SET nom='{$nom}', circonference='{$circonference}', documentation='{$documentation}', distance='{$distance}' WHERE id='{$id}'";
    
    
    echo $query;
    $stmt = $pdo->prepare($query);
    $stmt->execute();

}

header('location:index.php');
include('../footer.php');
