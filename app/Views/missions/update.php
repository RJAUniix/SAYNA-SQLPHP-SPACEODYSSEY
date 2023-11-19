<?php
include('../../../Uniix/Connexion.php');

if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['debut']) && isset($_POST['duree'])&& isset($_POST['description']) && isset($_POST['statut'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $duree = $_POST['duree'];
    $debut = $_POST['debut'];
    $statut = $_POST['statut'];

    // Pour eviter les erreurs de caractères
    $description = addslashes($_POST['description']);

    $query = "UPDATE missions SET nom='$nom',description='$description', debut='$debut', duree='$duree', statut='$statut' WHERE id='{$id}'";
    echo $query;
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("location:form.php?id={$id}");
}
else {
    echo 'ERROR';
}

