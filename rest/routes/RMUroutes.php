<?php

Flight::route('GET /api/connection-check', function(){
    Flight::rmuService();
});

Flight::route('GET /api/getAllUniversities', function(){
    Flight::json(Flight::rmuService()->getAllUniversities());
});

Flight::route('GET /api/getUniversityById/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityById($id));
});
Flight::route('GET /api/getUniversityByCity/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByCity($id));
});

Flight::route('GET /api/getUniversityByCountry/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByCountry($id));
});

Flight::route('GET /api/getUniversityByName/@id', function($id){
    Flight::json(Flight::rmuService()->getUniversityByName($id));
});

Flight::route('GET /api/getAllCourses', function(){
    Flight::json(Flight::rmuService()->getAllCourses());
});

Flight::route('GET /api/getCourseById/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseById($id));
});

Flight::route('GET /api/getCourseByCode/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByCode($id));
});

Flight::route('GET /api/getCourseByEcts/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByEcts($id));
});

Flight::route('GET /api/getPcByCourse/@id', function($id){
    Flight::json(Flight::rmuService()->getPcByCourse($id));
});

Flight::route('GET /api/getPcByProfessor/@id', function($id){
    Flight::json(Flight::rmuService()->getPcByProfessor($id));
});

Flight::route('GET /api/getAllUsers', function(){
    Flight::json(Flight::rmuService()->getAllUsers());
});

Flight::route('GET /api/getAllProfessors', function(){
    Flight::json(Flight::rmuService()->getAllProfessors());
});

Flight::route('GET /api/getAllStudents', function(){
    Flight::json(Flight::rmuService()->getAllStudents());
});

Flight::route('GET /api/getUserById/@id', function($id){
    Flight::json(Flight::rmuService()->getUserById($id));
});

Flight::route('GET /api/getStudentByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getStudentByUniversity($id));
});

Flight::route('GET /api/getProfessorByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getProfessorByUniversity($id));
});

Flight::route('GET /api/getAllRatings', function(){
    Flight::json(Flight::rmuService()->getAllRatings());
});

Flight::route('GET /api/getRatingByDate/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByDate($id));
});

Flight::route('GET /api/getAllAnonymousRatings', function(){
    Flight::json(Flight::rmuService()->getAllAnonymousRatings());
});

Flight::route('GET /api/getAllNonAnonymousRatings', function(){
    Flight::json(Flight::rmuService()->getAllNonAnonymousRatings());
});

Flight::route('GET /api/getRatingByProfessor/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByProfessor($id));
});

Flight::route('GET /api/getRatingByStudent/@id', function($id){
    Flight::json(Flight::rmuService()->getRatingByStudent($id));
});

Flight::route('POST /api/addUniversity', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addUniversity($data));
});

// ADD MORE POST REQUESTS FOR INSERT STATEMENTS

Flight::route('PUT /api/updateUniversity/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateUniversity($id, $data));
});

// ADD MORE PUT REQUESTS FOR UPDATE STATEMENTS

Flight::route('DELETE /api/deleteUniversity/@id', function($id) {
    Flight::rmuService()->deleteUniversity($id);
});

// ADD MORE DELETE REQUESTS FOR DELETE STATEMENTS

?>
