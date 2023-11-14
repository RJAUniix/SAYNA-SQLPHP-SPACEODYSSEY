<?php
include("../../../Uniix/Connexion.php");

// Prendre les valeurs dans le pop up
if( isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['date_naissance']) && $_GET['nationalite'] && isset($_GET['taille']) && isset($_GET['poids']) && isset($_GET['etat_sante']) && isset($_GET['anciennete'])){ 
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $date_naissance = $_GET['date_naissance'];
    $nationalite = $_GET['nationalite'];
    $taille = $_GET['taille'];
    $poids = $_GET['poids'];
    $anciennete = $_GET['anciennete'];
    $etat_sante = $_GET['etat_sante'];
    // requete d'insertion
    $query = "INSERT INTO astronautes (nom,prenom,date_naissance,nationalite,taille,poids,anciennetee,etat_sante) VALUES ('$nom','$prenom','$date_naissance','$nationalite','$taille','$poids','$anciennete','$etat_sante')";
    $stmt = $pdo->prepare($query);
    echo $query;

    $stmt->execute();

    header('location:index.php');
}
else {
    
    header('location:index.php');
}