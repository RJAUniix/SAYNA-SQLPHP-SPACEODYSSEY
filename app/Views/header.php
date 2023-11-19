<!-- Tous les fichiers lourds à charger-->
<?php

use config\App;

// include("../../Uniix/Connexion.php");

// Pour raccourcir les liens
$lien = 'http://php/SAYNA/SAYNA-SQLPHP-SPACEODYSSEY/www/';

// Pour activer le lien des menus
$lien1 = getcwd();
$dossier = substr($lien1, strrpos($lien1,"\\")+1);

// 2 em choix
$lien2 = $_SERVER['SCRIPT_NAME'];
$fichier = substr($lien2, strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stellar Tech</title>

    <!-- Définir la base URL pour tous les liens relatifs -->
    <base href="<?php echo $lien; ?>" />

    <!-- LES LIENS -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- Bootstrap -->
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <!-- !lES LIENS -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo $lien; ?>img/sayna-logo.jpg" alt="Sayna Logo" height="60" width="60" class="br-50">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars mt-1"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link <?= $dossier == 'www' ? 'active' : '' ?>">Accueil</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../app/Views/aide.php" class="nav-link <?= $fichier == 'aide.php' ? 'active' : '' ?>">Aide</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comment"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xm dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Besoin d'assistance pour ma mission...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Je suis dispo pour une nouvelle mission.</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Mission accomplie, je reviens à la base...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Voir toutes les messages</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link" style="text-decoration : none;">
                <img src="img/sayna-logo.jpg" alt="SAYNA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-semibold">Stellar Tech</span>
            </a>

            <!-- Sidebar -->

            <div class="sidebar mt-2">
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Les missions -->
                        <li class="nav-item">
                            <a href="../app/Views/missions/index.php" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    Missions
                                </p>
                            </a>
                        </li>

                        <!-- Les planètes -->
                        <li class="nav-item menu-closed">
                            <a href="../app/Views/planetes/index.php" class="nav-link">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>
                                    Planètes
                                </p>
                            </a>
                        </li>

                        <!-- Les astronautes -->
                        <li class="nav-item">
                            <a href="../app/Views/astronautes/index.php" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Astronautes
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

<!-- API DE LA NASA EN ACTION -->
<script>
    // URL de l'API APOD
    const apiKey = 'AW6lMK0EKHOOKSAhnlzNs3zyMA5dF8k0PkBoUwgS'; // Remplacez YOUR_API_KEY par votre propre clé API de la NASA
    const apiUrl = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`; 

    function changerBackground() {
    const lastChangedDate = localStorage.getItem('backgroundChanged');
    const currentDate = new Date().toDateString();

    if (!lastChangedDate || lastChangedDate !== currentDate) {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.media_type === 'image') {
                    const imageUrl = data.url;

                    // Pour modifier le style de la background
                    document.body.style.backgroundImage = `url(${imageUrl})`;
                    document.body.style.backgroundRepeat = 'no-repeat';
                    document.body.style.backgroundSize = 'cover';

                    // Stockage de l'URL de l'image et la date actuelle en localStorage
                    localStorage.setItem('backgroundImage', imageUrl);
                    localStorage.setItem('backgroundChanged', currentDate);
                } else {
                    console.error('Aucune image trouvée dans la réponse de l\'API APOD.');
                }
            })
            .catch(error => {
                console.error('Erreur lors de la récupération de l\'image APOD:', error);
            });
    } else {
        const cachedImageUrl = localStorage.getItem('backgroundImage');
        document.body.style.backgroundImage = `url(${cachedImageUrl})`;
        document.body.style.backgroundRepeat = 'no-repeat';
        document.body.style.backgroundSize = 'cover';
    }
    }

window.addEventListener('load', changerBackground);
</script>