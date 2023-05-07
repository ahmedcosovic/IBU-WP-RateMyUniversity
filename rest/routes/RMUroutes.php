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
Flight::route('GET /getUniversityByCity/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByCity($id));
});

Flight::route('GET /getUniversityByCountry/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByCountry($id));
});

Flight::route('GET /getUniversityByName/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByName($id));
});

Flight::route('GET /getAllCourses', function(){
    Flight::json(Flight::rmuService()->getAllCourses());
});

Flight::route('GET /getCourseById/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseById($id));
});

Flight::route('GET /getCourseByCode/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByCode($id));
});

Flight::route('GET /getCourseByEcts/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByEcts($id));
});

Flight::route('GET /getPcByCourse/@id', function($id){
    Flight::json(Flight::rmuService()->getPcByCourse($id));
});

Flight::route('GET /getPcByProfessor/@id', function($id){
    Flight::json(Flight::rmuService()->getPcByProfessor($id));
});

Flight::route('GET /getAllUsers', function(){
    Flight::json(Flight::rmuService()->getAllUsers());
});

Flight::route('GET /getAllProfessors', function(){
    Flight::json(Flight::rmuService()->getAllProfessors());
});

Flight::route('GET /getAllStudents', function(){
    Flight::json(Flight::rmuService()->getAllStudents());
});

Flight::route('GET /getUserById/@id', function($id){
    Flight::json(Flight::rmuService()->getUserById($id));
});

Flight::route('GET /getStudentByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getStudentByUniversity($id));
});

Flight::route('GET /getProfessorByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getProfessorByUniversity($id));
});

Flight::route('GET /getAllRatings', function(){
    Flight::json(Flight::rmuService()->getAllRatings());
});

Flight::route('GET /getRatingByDate/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByDate($id));
});

Flight::route('GET /getAllAnonymousRatings', function(){
    Flight::json(Flight::rmuService()->getAllAnonymousRatings());
});

Flight::route('GET /getAllNonAnonymousRatings', function(){
    Flight::json(Flight::rmuService()->getAllNonAnonymousRatings());
});

Flight::route('GET /getRatingByProfessor/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByProfessor($id));
});

Flight::route('GET /getRatingByStudent/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByStudent($id));
});


?>
