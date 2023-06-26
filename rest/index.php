<?php

require "../vendor/autoload.php";
require "./services/RMUservice.php";

Flight::register('rmuService', 'RMUservice');

require './routes/RMUroutes.php';

Flight::route('GET /api/docs.json', function(){
    $openapi = \OpenApi\scan('routes');
    header('Content-Type: application/json');
    echo $openapi->toJson();
});

Flight::map('header', function($name){
    $headers = getallheaders();
    return @$headers[$name];
});

Flight::start();
 ?>
