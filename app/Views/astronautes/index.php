<?php
include('../header.php');
include('../../../Uniix/Connexion.php');
?>

<!-- Main content -->
<div class="row ml-5 mt-2 d-flex">
    <div class="offset-2 col-lg-10 d-flex">
        <?php
        $query = "SELECT *FROM astronautes";
        $stmt = $pdo->query($query);

        // Pour passer à la ligne après 2 cards
        $cardCount = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Vérifier si le nombre maximum de cartes est atteint
            if ($cardCount < 2) {
                echo '
                <div class="col-lg-6">
                    <div class="card mb-3 bg-dark text-light">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'. $row['photo'] .'" class="card-img" alt="photo d\'identité">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title mb-3"><b>'. $row['prenom'] . ' ' . $row['nom'] .'</b></h5>';
                                
                                    // Ajout du badge en haut à droite si la personne est disponible
                                    if ($row["etat_sante"]==="Bonne") {
                                        echo '<span class="badge badge-success position-absolute" style="top: 5; right: 10;">Disponible</span>';
                                    }

                                    // Pour avoir l'âge
                                    $dateActuelle = new DateTime();
                                    $dateNaissance = new DateTime($row['date_naissance']);
                                    $age = $dateActuelle->diff($dateNaissance)->y;
    
                echo '              <p class="card-text mb-1 mt-3"> Age : '. $age .' ans </p>
                                    <p class="card-text mb-1"> Nationalité : '. $row['nationalite'] .'</p>
                                    <p class="card-text mb-1"> Ancienneté : '. $row['anciennetee'] .' ans </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                $cardCount++;
            }else {
                // Fermer la div du row actuel et ouvrir une nouvelle div row
                echo '</div></div>
                <div class="row ml-5 mt-2 d-flex">
                    <div class="offset-2 col-lg-10 d-flex">

                    <div class="col-lg-6">
                    <div class="card mb-3 bg-dark text-light">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'. $row['photo'] .'" class="card-img" alt="photo d\'identité">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">';
                                
                                // Ajout du badge en haut à droite si la personne est disponible
                                if ($row["etat_sante"]==="Bonne") {
                                    echo '<span class="badge badge-success position-absolute" style="top: 5; right: 10;">Disponible</span>';
                                }
                echo '
                                    <h5 class="card-title mb-3"><b>'. $row['prenom'] . ' ' . $row['nom'] .'</b></h5>';
                                    // Pour avoir l'âge
                                    $dateActuelle = new DateTime();
                                    $dateNaissance = new DateTime($row['date_naissance']);
                                    $age = $dateActuelle->diff($dateNaissance)->y;
    
                echo '              <p class="card-text mb-1 mt-3"> Age : '. $age .' ans </p>
                                    <p class="card-text mb-1"> Nationalité : '. $row['nationalite'] .'</p>
                                    <p class="card-text mb-1"> Ancienneté : '. $row['anciennetee'] .' ans </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';


                // Réinitialiser le compteur de cartes
                $cardCount = 0;
            }
        }
        ?>
    </div>
<!-- /.row -->

<?php include("../footer.php"); ?>