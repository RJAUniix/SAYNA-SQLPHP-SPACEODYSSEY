<?php
include('../../../Uniix/Connexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // supprimer toutes les missions lié à la planète
    // $query = "DEL// supprimer une planète
    $query = "DELETE FROM planete WHERE id='{$id}'";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    echo $query;

    // supprimer une planète
    $query = "DELETE FROM planete WHERE id='{$id}'";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    echo $query;

    header("location:index.php?id={$id}");
}
else {
    echo 'ERROR';
    echo $query;
}
