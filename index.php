<?php 
session_start();
//session_destroy();
require 'vendor/autoload.php';
require 'App/View/home.php';

use App\Lib\Route;
$controller = new Route($_GET);
$controller = $controller->createController();
$controller->executeAction();
$controller->executeView();