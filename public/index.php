<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/setup.php";

use ZList\Router;

$router = new Router\Router();

$router->get('/', 'HelloController', 'index');
$router->get('/contact', 'HelloController', 'contact');
$router->post('/contact', 'HelloController', 'postContact');

////See inside $router
//echo "<pre>";
//print_r($router);

$router->submit();