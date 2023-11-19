<!DOCTYPE html>
<?php
include('../header.php');
include('../../../Uniix/Connexion.php');

// Pour prendre l'id qui est dans l'url
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
else {
    $id = $id;
}

?>

<!-- Main content -->
<div class="row">
    <div class="offset-3 col-lg-8">
        <?php
        
        $query = "SELECT missions.id, missions.nom, missions.duree, missions.debut, missions.statut, missions.description, vaisseaux.nom vaisseau, planete.nom planete FROM missions INNER JOIN vaisseaux ON missions.id_vaisseau=vaisseaux.id INNER JOIN planete ON missions.id_planete=planete.id WHERE missions.id={$id}";
        $stmt = $pdo->query($query);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <!-- Pour afficher toutes les informations sur la mission -->
    <form class="row g-3 mb-5 mt-3" action="../app/Views/missions/update.php" method="POST">
        <!-- Pour prendre l'id de la mission -->
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="col-md-10">
            <h2 class="mt-2 mb-4">Infos sur la mission : <?= $row['nom'] ?></h2>
        </div>
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom de la mission</label>
            <input type="text" class="form-control" name="nom" value="<?= $row['nom'] ?>">
        </div>
        <div class="col-md-6">
            <label for="duree" class="form-label">Durée (en jours) </label>
            <input type="text" class="form-control" name="duree" value="<?= $row['duree'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="debut" class="form-label">Debut</label>
            <input type="date" class="form-control" name="debut" value="<?= $row['debut'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="statut" class="form-label">Statut</label><br>
            <select name="statut" class="form-select form-control" <?php echo ($row["statut"] === "Terminé" || $row["statut"] === "Annulé") ? "disabled" : ""; ?> >
            <option selected> <?= $row['statut'] ?></option>
                <option>Terminé</option>
                <option>Annulé</option>
            </select>
        </div>
        <div class="col-6 mt-1">
            <label for="vaisseau" class="form-label">Vaisseau</label>
            <input type="text" class="form-control" nom="vaisseau" value="<?= $row['vaisseau'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="planete" class="form-label">Planète</label>
            <input type="text" class="form-control" nom="planete" value="<?= $row['planete'] ?>">
        </div>
        <div class="col-12 mt-1">
            <label for="description" class="form-label">Description</label><br>
            <textarea name="description" nom="description" class="form-control" rows="5"><?= $row['description'] ?></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
    </form>
    </div>
    <?php
    }
    ?>
</div>

<?= include('../footer.php'); ?>


