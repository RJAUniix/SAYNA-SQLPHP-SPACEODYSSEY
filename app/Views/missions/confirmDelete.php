<!DOCTYPE html>
<?php
include('../header.php');
include('../../../Uniix/Connexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
else {
    echo "ERROR";
}

?>

<!-- Main content -->
<div class="row ml-4 mt-4 p-2" style="height : 80vh;">
    <div class="offset-3 col-lg-7">
        <?php 
        $query = "SELECT *FROM missions WHERE id={$id}";
        $stmt = $pdo->query($query);


        // Pour passer à la ligne après 2 cards
        $cardCount = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

        <a href="../app/Views/planetes/index.php"><button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Annuler</button></a>
        <h2>Confirmez la suppression de la mission "<?= $row["nom"]; ?>"</h2>
        
        <!-- Pour envoyer l'id au fichier de suppression -->
        <div class="row">
            <form action="../app/Views/missions/delete.php" class="" method="GET">
                <input type="hidden" name="id" value="<?= $row["id"]; ?>" />
                <input class="btn btn-danger" type="submit" value="Supprimer" />
            </form>
        </div>

        <?php } ?>

    </div>
</div>


<?= include('../footer.php'); ?>