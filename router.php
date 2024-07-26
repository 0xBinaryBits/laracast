<?php
$path = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = [
    "/"=> "controllers/index.php",
    "/contact"=>"controllers/contact.php",
    "/about" =>"controllers/about.php"
];
function abort($code= 404){
    http_response_code($code );
    require "views/404.php";
    die();
}
function routeToController($path,$routes){
    if(array_key_exists($path,$routes)){
        require "$routes[$path]";
    }
    else{
        abort();
    }
    
}


routeToController($path,$routes);
