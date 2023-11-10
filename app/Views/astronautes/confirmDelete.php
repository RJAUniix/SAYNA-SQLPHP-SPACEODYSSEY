<!DOCTYPE html>
<?php
include('../app/Views/header.php');
?>

<a href=".?controller=Pays&action=index">Retour</a></br>
<h2>Confirmez la suppression de "<?= $pays->name; ?>"</h2>

<div class="row">
    <form action=".?controller=Pays&action=deleteConfirm" class="" method="POST">
        <input type="hidden" name="pays" value="<?= $pays->id; ?>" />
        <input class="btn btn-danger" type="submit" value="Supprimer" />
    </form>
</div>

<?= include('../app/Views/footer.php'); ?>