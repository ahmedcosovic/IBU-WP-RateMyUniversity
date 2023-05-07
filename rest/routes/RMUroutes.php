<?php

Flight::route('GET /connection-check', function(){
    Flight::rmuService();
});

Flight::route('GET /getAllUniversities', function(){
    Flight::json(Flight::rmuService()->getAllUniversities());
});

Flight::route('GET /getUniversityById/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityById($id));
});

?>
