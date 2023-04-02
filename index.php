<?php

// CODE COPIED FROM LAB4, WILL MODIFY LATER
require 'vendor/autoload.php';
require 'rest/dao/RateMyUniversity.class.php';


Flight::register('rateMyUniversity', 'RateMyUniversity');


Flight::route('GET /api/users', function(){
    Flight::json(Flight::rateMyUniversity()->getUsers());
});


Flight::route('GET /api/users/@id', function($id){
    Flight::json(Flight::rateMyUniversity()->getUserById($id));
});


Flight::route('POST /api/users', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rateMyUniversity()->addUser($data));
});


Flight::route('PUT /api/users/@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::rateMyUniversity()->updateUser($id, $data);
    Flight::json(Flight::rateMyUniversity()->getUserById($id));
});


Flight::route('DELETE /api/users/@id', function($id){
    Flight::rateMyUniversity()->deleteUser($id);
});

Flight::start();

?>
