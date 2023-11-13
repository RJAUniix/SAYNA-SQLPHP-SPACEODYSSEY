<!DOCTYPE html>
<?php
include('../app/Views/header.php');
?>

<a href=".?controller=Planete&action=index">Retour</a></br>
<h2>Confirmez la suppression de "<?= $planetes->name; ?>"</h2>

<div class="row">
    <form action=".?controller=Planete&action=deleteConfirm" class="" method="POST">
        <input type="hidden" name="planete" value="<?= $planete->id; ?>" />
        <input class="btn btn-danger" type="submit" value="Supprimer" />
    </form>
</div>

<?= include('../app/Views/footer.php'); ?>