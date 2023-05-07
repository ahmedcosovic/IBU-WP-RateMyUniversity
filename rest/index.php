<?php

require "../vendor/autoload.php";
require "./services/RMUservice.php";

Flight::register('rmuService', 'RMUservice');

require './routes/RMUroutes.php';

Flight::start();
 ?>
