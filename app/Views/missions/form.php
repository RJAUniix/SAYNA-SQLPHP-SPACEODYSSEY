<!DOCTYPE html>
<?php
include('../header.php');
?>

<!-- Main content -->
<div class="row">
    <div class="offset-3 col-lg-8">
        <?php
        //     if(isset($_POST['id'])){
        // }
        ?>

    <form class="row g-3 mb-5 mt-3">
        <div class="col-md-10">
            <h2 class="mt-2 mb-4">Infos sur la mission :</h2>
        </div>
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom de la mission</label>
            <input type="text" class="form-control" id="nom">
        </div>
        <div class="col-md-6 mt-1">
            <label for="duree" class="form-label">Durée</label>
            <input type="text" class="form-control" id="duree">
        </div>
        <div class="col-6 mt-1">
            <label for="debut" class="form-label">Debut</label>
            <input type="date" class="form-control" id="debut">
        </div>
        <div class="col-6 mt-1">
            <label for="Statut" class="form-label">Statut</label><br>
            <select id="Statut" class="form-select form-control">
            <option selected>Choisir...</option>
                <option>Terminé</option>
                <option>Annulé</option>
            </select>
        </div>
        <div class="col-6 mt-1">
            <label for="vaisseau" class="form-label">Vaisseau</label>
            <input type="text" class="form-control" id="vaisseau">
        </div>
        <div class="col-6 mt-1">
            <label for="planete" class="form-label">Planète</label>
            <input type="text" class="form-control" id="planete">
        </div>
        <div class="col-12 mt-1">
            <label for="description" class="form-label">Description</label><br>
            <textarea name="description" id="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary disabled">Mettre à jour</button>
        </div>
    </form>
    </div>
    
</div>

<?= include('../footer.php'); ?>


