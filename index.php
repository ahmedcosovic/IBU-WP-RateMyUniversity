<?php

require "./vendor/autoload.php";
require "./rest/services/RMUservice.php";

Flight::register('rmuService', 'RMUservice');

require './rest/routes/RMUroutes.php';

Flight::start();
 ?>
