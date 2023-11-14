<?php
include('../header.php');
include('../../../Uniix/Connexion.php');
?>

<!-- Main content -->
<div class="offset-2 row mt-2">
    <!-- Pour ajouter une nouvelle mission -->
    <button class="btn btn-outline-light rounded-pill ml-5 offset-5 col-md-2" data-bs-toggle="modal" data-bs-target="#insertion">Nouvel astronaute</button>
</div>
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
                                    else {
                                        echo '<span class="badge badge-danger position-absolute" style="top: 5; right: 10;">Indisponible</span>';
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
                <div class="offset-2 row ml-5 mt-2 d-flex">
                    <div class="offset-2 col-lg-10 d-flex">

                    <div class="col-lg-6">
                    <div class="card mb-3 bg-dark text-light w-100">
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
                                else {
                                    echo '<span class="badge badge-danger position-absolute" style="top: 5; right: 10;">Indisponible</span>';

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
                $cardCount = 1;
            }
        }
        ?>
    </div>
    <!-- col -->
</div>
<!-- /.row -->

<!-- Modal -->
<!-- Modal insertion -->
<div class="modal fade" id="insertion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">    
    <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nouvel astronaute : </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 

                <form method="GET" action="../app/Views/astronautes/add.php" class="row g-3 m-3">
                    <div class="col-md-4 mt-1">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>
                    <div class="col-md-5 mt-1">
                        <label for="prenom" class="form-label">Prenom(s)</label>
                        <input type="text" class="form-control" name="prenom" required>
                    </div>
                    <div class="col-md-3 mt-1">
                        <label for="date_naissance" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" name="date_naissance" required>
                    </div>
                    <div class="col-md-3 mt-1">
                        <label for="nationalite" class="form-label">Nationalité</label>
                        <input type="text" class="form-control" name="nationalite" required>
                    </div>
                    <div class="col-md-2 mt-1">
                        <label for="taille" class="form-label">Taille (Cm)</label>
                        <input type="text" class="form-control" name="taille" required>
                    </div>
                    <div class="col-md-2 mt-1">
                        <label for="poids" class="form-label">Poids (Kg)</label>
                        <input type="text" class="form-control" name="poids" required>
                    </div>
                    <div class="col-md-2 mt-1">
                        <label for="anciennete" class="form-label">Ancienneté (ans)</label>
                        <input type="text" class="form-control" name="anciennete" required>
                    </div>
                    <div class="col-md-3 mt-1">
                        <label for="etat_santé" class="form-label">Etat de santé</label>
                        <input type="text" class="form-control" name="etat_sante" required>
                    </div>
                                       
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                            
                    </div>
                </form>
            </div>
        </div>
    </div> 

<?php include("../footer.php"); ?>