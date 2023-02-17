<?php
    $path = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [
        "/Laracasts/php-for-beginners" => "controllers/index.php",
        "/Laracasts/php-for-beginners/" => "controllers/index.php",
        "/Laracasts/php-for-beginners/about" => "controllers/about.php",
        "/Laracasts/php-for-beginners/contact" => "controllers/contact.php"
    ];

    function abort($code = 404) {
        http_response_code($code);
        require "views/{$code}.php";
    }

    function routeToController($path, $routes){
        if(array_key_exists($path, $routes)) {
            require $routes[$path];
        }
        else {
            abort();
        }
    }

    routeToController($path, $routes)
?>