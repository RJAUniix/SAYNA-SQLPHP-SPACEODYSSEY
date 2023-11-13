<!DOCTYPE html>
<?php
include('../header.php');
include('../../../Uniix/Connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
?>


<!-- Main content -->
<div class="row">
    <h1> </h1>
</div>

<!-- Main content -->
<div class="row ml-4 mt-4 p-2">
    <div class="offset-3 col-lg-7">
        <?php 

        $query = "SELECT *FROM planete WHERE id={$id}";
        $stmt = $pdo->query($query);


        // Pour passer à la ligne après 2 cards
        $cardCount = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <form method="POST" action="../app/Views/planetes/modifier.php" class="row g-3 m-3">
            <div class="col-md-12 mt-1">
                <label for="nom" class="form-label">Nom de la planète</label>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="text" class="form-control" name="nom" value="<?= $row['nom'] ?>">
            </div>
            <div class="col-md-12 mt-1">
                <label for="duree" class="form-label">Circonférence</label>
                <input type="text" class="form-control" name="circonference" value="<?= $row['circonference'] ?>">
            </div>
            <div class="col-md-12 mt-1">
                <label for="duree" class="form-label">Distance par rapport au soleil (en Km)</label>
                <input type="number" class="form-control" name="distance" value="<?= $row['distance'] ?>">
            </div>
            <div class="col-md-12 mt-1">
                <label for="duree" class="form-label">Documentation</label>
                <textarea name="documentation" class="form-control"></textarea value="<?= $row['documentation'] ?>">
            </div>
                                
            <div class="col-md-12 mt-3">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Retour</button>
                    <button type="submit" name="enregistrer" class="btn btn-outline-success">Mettre à jour</button>
                    
            </div>
        </form>
        
        <?php } ?>

    </div>
</div>

<?= include('../footer.php'); ?>