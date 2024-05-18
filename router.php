<?php
declare(strict_types=1);

$routes = require basePath('routes.php');

array_key_exists($uri, $routes) ? require(basePath($routes[$uri])) : http_response_code(404); require(basePath($routes['404']));