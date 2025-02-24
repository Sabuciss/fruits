<?php 


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = require("routes.php");

if(array_key_exists($uri, $routes)){ //uzreiz parbauda vai eksiste un ja ja tad aizsuta uz to ko mekle, nevsi iet pa vienam un parbauda bet uzreiz visu
    require $routes[$uri];
}else{
   http_response_code(404); 
   require "controllers/404.php";
   die();
}

?>