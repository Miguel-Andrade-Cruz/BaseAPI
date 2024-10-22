<?php
require_once __DIR__ . '/../src/config/bootstrap.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Minuz\BaseApi\Core\Core;
use Minuz\BaseApi\http\Router;


$router = new Router(); 
$router->registryControllersRoutes([
]);

Core::dispatch($router);