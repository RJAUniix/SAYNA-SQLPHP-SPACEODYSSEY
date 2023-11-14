<!DOCTYPE html>
<?php
include('../header.php');
include('../../../Uniix/Connexion.php');

?>

<!-- Main content -->
<div class="row">
    <div class="offset-3 col-lg-8">
        <?php

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }

        $query = "SELECT missions.nom, missions.duree, missions.debut, missions.statut, missions.description, vaisseaux.nom vaisseau, planete.nom planete FROM missions INNER JOIN vaisseaux ON missions.id_vaisseau=vaisseaux.id INNER JOIN planete ON missions.id_planete=planete.id WHERE missions.id={$id}";
        $stmt = $pdo->query($query);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

    <form class="row g-3 mb-5 mt-3">
        <div class="col-md-10">
            <h2 class="mt-2 mb-4">Infos sur la mission : <?= $row['nom'] ?></h2>
        </div>
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom de la mission</label>
            <input type="text" class="form-control" id="nom" value="<?= $row['nom'] ?>">
        </div>
        <div class="col-md-6">
            <label for="duree" class="form-label">Durée</label>
            <input type="text" class="form-control" id="duree" value="<?= $row['duree'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="debut" class="form-label">Debut</label>
            <input type="date" class="form-control" id="debut" value="<?= $row['debut'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="Statut" class="form-label">Statut</label><br>
            <select id="Statut" class="form-select form-control">
            <option selected> <?= $row['statut'] ?></option>
                <option>Terminé</option>
                <option>Annulé</option>
            </select>
        </div>
        <div class="col-6 mt-1">
            <label for="vaisseau" class="form-label">Vaisseau</label>
            <input type="text" class="form-control" id="vaisseau" value="<?= $row['vaisseau'] ?>">
        </div>
        <div class="col-6 mt-1">
            <label for="planete" class="form-label">Planète</label>
            <input type="text" class="form-control" id="planete" value="<?= $row['planete'] ?>">
        </div>
        <div class="col-12 mt-1">
            <label for="description" class="form-label">Description</label><br>
            <textarea name="description" id="description" class="form-control" rows="5"><?= $row['description'] ?></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary disabled">Mettre à jour</button>
        </div>
    </form>
    </div>
    <?php
    }
    ?>
</div>

<?= include('../footer.php'); ?>


