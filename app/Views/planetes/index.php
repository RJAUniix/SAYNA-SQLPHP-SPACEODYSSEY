<?php
include('../header.php');
include('../../../Uniix/Connexion.php');
?>

<!-- Main content -->
<div class="row ml-5 mt-2">
    <div class="offset-2 col-lg-8">

        <?php
        $query = "SELECT *FROM missions";
        $stmt = $pdo->query($query);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "
                    <div class='col-xl-3 col-sm-6 col-12 mb-5 mt-3'>
                        <div class='card board1 fill'>
                            
                        <div class='card-title'>" . $row['nom'] . $_SERVER['HTTP_HOST'] . "</div>
                            <div class='card-body'>
                                <div class='dash-widget-header'>
                                    <div>
                                        <p>" . $row['description'] . "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }

        ?>

    </div>

</div>
<!-- /.col-md-6 -->
</div>
<!-- /.row -->

<?php include("../footer.php"); ?>