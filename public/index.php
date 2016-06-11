<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/setup.php";

use ZList\Router;

$router = new Router\Router();

$router->get('/', 'HelloController', 'index');

////See inside $router
//echo "<pre>";
//print_r($router);

$router->submit();