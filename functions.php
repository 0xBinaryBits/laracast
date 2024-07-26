<?php
function urls($path){
    return $path === parse_url($_SERVER["REQUEST_URI"])["path"]; 
    
}
function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}
