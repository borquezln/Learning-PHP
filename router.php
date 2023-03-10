<?php

$path = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "controllers/index.php",
    "/index" => "controllers/index.php",
    "/index/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/about/" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/contact/" => "controllers/contact.php"
];

function abort($code = 404)
{
    http_response_code($code);
    require "controllers/{$code}.php";
}

function routeToController($path, $routes)
{
    if (array_key_exists($path, $routes)) {
        require $routes[$path];
    } else {
        abort();
    }
}

routeToController($path, $routes);
