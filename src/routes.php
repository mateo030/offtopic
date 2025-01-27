<?php

$router->get('/offtopic/', 'HomeController@index');
$router->get('/offtopic/auth', 'AuthController@auth');

$router->post('/offtopic/auth/signup', 'SignupController@signupUser');
$router->post('/offtopic/auth/signin', 'LoginController@loginUser');

$router->get('/offtopic/profile', 'HomeController@profile');
$router->get('/offtopic/create', 'HomeController@create');
$router->get('/offtopic/logout', 'AuthController@logout');

$router->get('/offtopic/content', 'HomeController@content');

$router->post('/offtopic/create/submit', 'ThreadController@submit');
$router->post('/offtopic/content/reply', 'ReplyController@reply');