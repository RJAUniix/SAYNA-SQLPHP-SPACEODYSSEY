<?php
include('../header.php');
include('../../../Uniix/Connexion.php');
?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid" style="min-height : 80vh;">
        <div class="offset-2 col-lg-2 row mt-2">
            <!-- Pour ajouter une nouvelle mission -->
                <button class="btn btn-outline-light rounded-pill ml-5" data-bs-toggle="modal" data-bs-target="#insertion">Nouvelle mission</button>
        </div>

        <div class="offset-2 row mt-2">
            <div class="col-lg-11 d-flex ml-5">    
                
            <?php
                $query = "SELECT *FROM missions";
                $stmt = $pdo->query($query);


                // Pour passer à la ligne après 2 cards
                $cardCount = 0;

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // Prendre la date de début
                    $dateDebut = date_create($row['debut']);

                    // Vérifier si le nombre maximum de cartes est atteint
                    if ($cardCount < 2) {
                        echo '
                            <div class="col-lg-6 mr-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">' . $row["nom"] . '</h5>
                                        <p class="card-text">' . $row["description"] . '</p>
                                        <a href="../app/Views/missions/form.php?id=' . $row["id"] . '"><button type="submit" class="btn btn-primary" name="id" value="' . $row["id"] . '"><i class="nav-icon fas fa-eye"></i></button></a>
                                        <a href="../app/Views/missions/confirmDelete.php?id=' . $row["id"] . '"><button type="submit" class="btn btn-danger" name="id" value="' . $row["id"] . '"><i class="nav-icon fas fa-trash"></i></button></a>

                                    </div>';
                                        $today =  date("y-d-m");
                                        // Ajout du badge en haut à droite si la personne est disponible
                                            if ($dateDebut <= $today && $dateFin >= $today) {
                                                echo "<span class='badge badge-warning position-absolute' style='top: 5; right: 10;'>En cours</span>";
                                            }
                                            else if ($dateDebut > $today) {
                                                echo "<span class='badge badge-success position-absolute' style='top: 5; right: 10;'>À venir</span>";
                                            }
                                            else {
                                                echo "<span class='badge badge-danger position-absolute' style='top: 5; right: 10;'>Terminé</span>";
                                            }
                            echo "  
                                </div>
                            </div>";
                        $cardCount++;
                    }else {
                        // Fermer la div du row actuel et ouvrir une nouvelle div row pour arranger le placement des cards
                        echo '</div></div>
                        
                        
                        <div class="offset-2 row mt-2">
                            <div class="col-lg-11 d-flex ml-5">   
                                <div class="col-lg-6 mr-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">' . $row["nom"] . '</h5>
                                            <p class="card-text">' . $row["description"] . '</p>
                                            <a href="../app/Views/missions/form.php?id=' . $row["id"] . '"><button type="submit" class="btn btn-primary" name="id" value="' . $row["id"] . '"><i class="nav-icon fas fa-eye"></i></button></a>
                                            <a href="../app/Views/missions/confirmDelete.php?id=' . $row["id"] . '"><button type="submit" class="btn btn-danger" name="id" value="' . $row["id"] . '"><i class="nav-icon fas fa-trash"></i></button></a>

                                        </div>';
                                        $today =  date("y-d-m");
                                        // Ajout du badge en haut à droite si la personne est disponible
                                            if ($dateDebut <= $today && $dateFin >= $today) {
                                                echo '<span class="badge badge-warning position-absolute" style="top: 5; right: 10;">En cours</span>';
                                            }
                                            else if ($dateDebut > $today) {
                                                echo '<span class="badge badge-success position-absolute" style="top: 5; right: 10;">À venir</span>';
                                            }
                                            else {
                                                echo '<span class="badge badge-danger position-absolute" style="top: 5; right: 10;">Terminé</span>';
                                            };
                            echo "  
                                    </div>
                                </div>";
                        // Réinitialiser le compteur de cartes
                        $cardCount = 1;
                    }
                }
                ?>
            </div>
            <!-- /.row -->
        </div>
    </div>
<!-- container -->
</div>

<!-- Modal insertion -->
<div class="modal fade" id="insertion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">    
    <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nouvelle mission : </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 

                <form method="POST" action="../app/Views/missions/add.php" class="row g-3 m-3">
                    <div class="col-md-6 mt-1">
                        <label for="nom" class="form-label">Nom de la mission</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="col-md-6 mt-1">
                        <label for="duree" class="form-label">Durée (en jours)</label>
                        <input type="number" class="form-control" name="duree">
                    </div>
                    <div class="col-6 mt-1">
                        <label for="debut" class="form-label">Debut</label>
                        <input type="date" class="form-control" name="debut">
                    </div>
                    <div class="col-6 mt-1">
                        <label for="Statut" class="form-label">Statut</label><br>
                        <select name="statut" class="form-select form-control">
                            <option selected value="">En préparation</option>
                            <option value="En cours">En cours</option>
                            <option value="Terminé">Terminé</option>
                            <option value="Abandonné">Abandonné</option>
                        </select>
                    </div>
                    <div class="col-6 mt-1">
                        <label for="vaisseau" class="form-label">Vaisseau</label>
                        <select name="vaisseau" class="form-select form-control" required>
                            <option selected value="">Choisir...</option>

                            <!-- Pour afficher les vaisseaux disponible -->
                            
                            <?php 
                                $query = "SELECT *FROM vaisseaux WHERE disponible=1";
                                $stmt = $pdo->query($query);
                                
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                                    echo "<option value=".$row['nom'].">".$row['nom'] ."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-6 mt-1">
                        <label for="planete" class="form-label">Planète</label>
                        <select name="planete" class="form-select form-control" required>
                            <option selected value="">Choisir...</option>

                            <!-- Pour afficher les vaisseaux disponible -->
                            
                            <?php 
                                $query = "SELECT *FROM planete";
                                $stmt = $pdo->query($query);
                                
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                                    echo "<option value=".$row['nom'].">".$row['nom'] ."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-12 mt-1">
                        <label for="description" class="form-label">Description</label><br>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
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