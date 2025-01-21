<?php

use App\Framework\Router;


ini_set('display_errors', 1);
ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 3600);
error_reporting(E_ALL);


require __DIR__ . '/src/config/helper.php';
require __DIR__ . '/vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new Router();

$router->get('/offtopic/', 'HomeController@home');
$router->get('/offtopic/auth', 'AuthController@index');

$router->post('/offtopic/auth/signup', 'SignupController@signupUser');
$router->post('/offtopic/auth/signin', 'LoginController@loginUser');

$router->get('/offtopic/profile', 'HomeController@profile');
$router->get('/offtopic/create', 'HomeController@create');
$router->get('/offtopic/logout', 'AuthController@logout');

$router->get('/offtopic/content', 'HomeController@content');

$router->post('/offtopic/create/submit', 'ThreadController@submit');

$router->route($uri);
