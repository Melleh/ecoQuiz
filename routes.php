<?php


$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');

$router->get('login', 'App/Controllers/LoginController.php');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');

$router->get('me', 'App/Controllers/ProfileController.php@index');

$router->get('users', 'App/Controllers/UserController.php@index');
$router->post('users/store', 'App/Controllers/UserController.php');


$router->get('contact', 'App/Controllers/ContactController.php@index');


$router->get('leaderboard', 'App/Controllers/LeaderboardController.php@index');



$router->get('climate', 'App/Controllers/ClimateController.php@index');



$router->get('quiz', 'App/Controllers/QuizController.php@index');
$router->get('result', 'App/Controllers/ResultController.php@index');
$router->post('result', 'App/Controllers/ResultController.php');

$router->get('admin', 'App/Controllers/AdminController.php@index');


$router->get('artists', 'App/Controllers/ArtistController.php@index');
