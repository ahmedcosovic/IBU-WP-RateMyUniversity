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

Flight::route('GET /getCoursesById/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesById($id));
});

Flight::route('GET /getCoursesByCode/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByCode($id));
});

Flight::route('GET /getCoursesByEcts/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByEcts($id));
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

Flight::route('GET /getUsersById/@id', function($id){
    Flight::json(Flight::rmuService()->getUsersById($id));
});

Flight::route('GET /getStudentsByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getStudentsByUniversity($id));
});

Flight::route('GET /getProfessorsByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getProfessorsByUniversity($id));
});

Flight::route('GET /getAllRatings', function(){
    Flight::json(Flight::rmuService()->getAllRatings());
});

Flight::route('GET /getRatingsByDate/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingsByDate($id));
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
