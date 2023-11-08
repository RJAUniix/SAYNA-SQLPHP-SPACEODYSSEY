<?php

use app\Controllers\PaysController;
use Kernel\Connexion;

include('../include.php');

$controllerName = 'app\\Controllers\\' . $_GET['controller'] . 'controller';

$actionName = $_GET['action'];

$controller = new $controllerName();
$view = $controller->$actionName();
$view->display();
