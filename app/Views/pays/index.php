<!DOCTYPE html>
<?php
include('../app/Views/header.php');
?>

<!-- Main content -->
<div class="row">
    <div class="offset-1 col-lg-10">

        <h1>Liste des pays</h1>
        <table class="table table-bordered table-striped">
            <thead>
            <tbody>
                <?php
                foreach ($pays as $p) {
                    echo '<tr>';
                    echo '<td>' . $p->name . '</td>';
                    echo '<td>';

                    // Kernel\Component::display('button', [
                    //     'url' => '.?controller=Pays&action=edit&pays=' . $p->id,
                    //     'label' => 'Edit',
                    //     'type' => 'info',
                    // ]);
                    // Kernel\Components::display('button', [
                    //     'url' => '.?controller=Pays&action=delete&pays=' . $p->id,
                    //     'label' => 'Delete',
                    //     'type' => 'danger',
                    // ]);

                    // ajout des variable indispendables
                    $url = '.?controller=Pays&action=edit&pays=' . $p->id;
                    // $label = '<i class="fas fa-pen"></i>';
                    $label = 'Edit';
                    $type = 'info';
                    include('../app/Views/components/button.php');

                    // // button suppression

                    $url = '.?controller=Pays&action=delete&pays=' . $p->id;
                    // $label = '<i class="fas fa-pen"></i>';
                    $label = 'Delete';
                    $type = 'danger';
                    include('../app/Views/components/button.php');

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

<?= include('../app/Views/footer.php'); ?>