<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../www/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="../www/dist/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../www/plugins/fontawesome-free/css/all.min.css"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="../www/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../www/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="../www/plugins/jqvmap/jqvmap.min.css"> --> -->
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="../www/dist/css/adminlte.min.css"> -->
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="../www/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="../www/plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="../www/plugins/summernote/summernote-bs4.min.css"> -->
    <!-- Font awesome -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- !lES LIENS -->
</head>

<body>

    <?php

    $dsn = 'mysql:host=' . "Localhost" . ';dbname=' . "sayna_odyssey" . '';

    $username = "sayna_odyssey_user";

    $password = 'sayna_odyssey_psw';

    try {

        // Création de l'objet PDO

        $pdo = new PDO($dsn, $username, $password);

        // Configuration des options de PDO

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vous êtes maintenant connecté à la base de données

        // ... Votre code pour exécuter des requêtes et effectuer des opérations sur la base de données ...

    } catch (PDOException $e) {

        // En cas d'erreur de connexion, affichage du message d'erreur

        echo 'Erreur de connexion : ' . $e->getMessage();
    }
    ?>

    <div class='row mt-2'>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


    </div>
    <!-- /.card -->
    </div>
    <!-- right col -->

    <!-- jQuery -->
    <script src="../www/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../www/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../www/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../www/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../www/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../www/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../www/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../www/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../www/plugins/moment/moment.min.js"></script>
    <script src="../www/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../www/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../www/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../www/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../www/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../www/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../www/dist/js/pages/dashboard.js"></script>
</body>

</html>