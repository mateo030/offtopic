<?php

use App\Framework\Router;

ini_set('display_errors', 1);
ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 3600);
error_reporting(E_ALL);

require __DIR__ . '/src/config/helper.php';
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();
$uri = $_SERVER['REQUEST_URI'];

$router = new Router();

require __DIR__ . '/src/routes.php';

$router->route($uri);
