<?php
include('../../../Uniix/Connexion.php');

if (isset($_GET['id']) && preg_match("/^[a-zA-Z]+$/",$_GET['nom']) && preg_match("/^.+$/",$_GET['documentation']) && isset($_GET['circonference']) && isset($_GET['distance'])) {
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $circonference = $_GET['circonference'];
    $documentation = $_GET['documentation'];
    $distance = $_GET['distance'];

    $query = "UPDATE planete SET nom='$nom', circonference='$circonference', distance='$distance', documentation='$documentation' WHERE id='{$id}'";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("location:form.php?id={$id}");
}
else {
    echo 'ERROR';
}

