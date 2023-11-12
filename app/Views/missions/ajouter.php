<?php
include("../../../Uniix/Connexion.php");

// Prendre l'id de planete
$query = "SELECT id FROM planete WHERE nom='{$_POST['planete']}'";
echo $query;
$stmt = $pdo->query($query);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id_planete = $row['id'];
}

// Prendre l'id du vaisseau
$query = "SELECT id FROM vaisseaux WHERE nom LIKE '{$_POST['vaisseau']}%'";
$stmt = $pdo->query($query);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id_vaisseau = $row['id'];
}

// Prendre les valeurs dans le pop up
if( preg_match("/^[a-zA-Z]+$/",$_POST['nom']) && preg_match("/^.+$/",$_POST['description']) && isset($_POST['debut']) && $_POST['vaisseau']){ 
    $nom = $_POST['nom'];
    $debut = $_POST['debut'];
    $statut = "";
    $duree = $_POST['duree'];
    $description = $_POST['description'];
    echo $id_vaisseau;
    // requete d'insertion
    $query = "INSERT INTO missions (nom,debut,statut,duree,id_planete,id_vaisseau,description) VALUES ('$nom','$debut','$statut','$duree','$id_planete','$id_vaisseau','$description')";
    $stmt = $pdo->prepare($query);

    $stmt->execute();

    header('location:index.php');
}