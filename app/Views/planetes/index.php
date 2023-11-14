<?php
include('../header.php');
include('../../../Uniix/Connexion.php');
?>

<!-- Main content -->
<div class="row ml-4 mt-4 p-2">
    <div class="offset-2 col-lg-10">

        <div class="row mt-2" style="justify-content :  space-around;">
            <h3 class="col-md-6 text-light">Liste des planètes</h3>
            <!-- Pour ajouter une nouvelle mission -->
            <button class="btn btn-outline-light rounded-pill m-2 offset-5 col-md-2" data-bs-toggle="modal" data-bs-target="#insertion">Nouvelle planète</button>
        </div>
        <table class="table table-light table-bordered table-striped">
            <thead>
            <tbody>
                <thead>
                    <tr class="text-bold">
                        <td>Nom</td>
                        <td>Circonférence</td>
                        <td>Distance par rapport au soleil</td>
                        <td>Documentation</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $query = "SELECT *FROM planete";
                    $stmt = $pdo->query($query);

                    
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $row["nom"] . '</td>';
                
                        echo '<td>' . $row["circonference"] . '</td>';

                        echo '<td>' . $row["distance"] . ' Km</td>';

                        echo '<td>' . $row["documentation"] . ' </td>';

                        echo '<td width="20px">
                        <form action="../app/Views/planetes/form.php" method="GET">
                        <input type="hidden" name="id" value="'.$row["id"].'">';
                        // ajout des variable indispendables
                        $label = '<i class="fas fa-pen"></i>';
                        $type = 'info';
                        include('../components/button.php');
                        echo '</form>';

                        // // button suppression
                        echo '
                        <form action="../app/Views/planetes/confirmDelete.php" method="GET">
                        <input type="hidden" name="id" value="'.$row["id"].'">';
                        $label = '<i class="fas fa-trash"></i>';
                        $type = 'danger';
                        include('../components/button.php');
                        echo '</form>';

                        echo '</td>';

                        echo '</tr>';
                    }
                ?>
            </tbody>
            </thead>
        </table>

    </div>

</div>
<!-- /.col-md-6 -->
</div>
<!-- /.row -->


<!-- Modal insertion -->
<div class="modal fade" id="insertion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">    
    <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nouvelle planète : </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 

                <form method="GET" action="../app/Views/planetes/add.php" class="row g-3 m-3">
                    <div class="col-md-12 mt-1">
                        <label for="nom" class="form-label">Nom de la planète</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="col-md-12 mt-1">
                        <label for="circonference" class="form-label">Circonférence</label>
                        <input type="text" class="form-control" name="circonference">
                    </div>
                    <div class="col-md-12 mt-1">
                        <label for="distance" class="form-label">Distance par rapport au soleil (en Km)</label>
                        <input type="number" class="form-control" name="distance">
                    </div>
                    <div class="col-md-12 mt-1">
                        <label for="documentation" class="form-label">Documentation</label>
                        <textarea type="number" class="form-control" name="documentation"></textarea>
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