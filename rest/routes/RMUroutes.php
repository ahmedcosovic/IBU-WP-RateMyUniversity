<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

Flight::route('GET /api/connection-check', function(){
    Flight::rmuService();
});

Flight::route('GET /api/getCourses', function(){
    Flight::json(Flight::rmuService()->getCourses());
});

Flight::route('GET /api/getCoursesByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByUniversity($id));
});
Flight::route('GET /api/getCourseByCode/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByCode($id));
});

Flight::route('GET /api/getCoursesByEcts/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByEcts($id));
});

Flight::route('GET /api/searchCourse/@id', function($id){
    Flight::json(Flight::rmuService()->searchCourse($id));
});

Flight::route('GET /api/getUniversities', function(){
    Flight::json(Flight::rmuService()->getUniversities());
});

Flight::route('GET /api/searchUniversities/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversities($id));
});

Flight::route('GET /api/searchUniversitiesByCity/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversitiesByCity($id));
});

Flight::route('GET /api/searchUniversitiesByCountry/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversitiesByCountry($id));
});

Flight::route('GET /api/listCountries', function(){
    Flight::json(Flight::rmuService()->listCountries());
});

Flight::route('GET /api/listCities', function(){
    Flight::json(Flight::rmuService()->listCities());
});

Flight::route('GET /api/getUsers', function(){
    Flight::json(Flight::rmuService()->getUsers());
});

Flight::route('GET /api/getProfessors', function(){
    Flight::json(Flight::rmuService()->getProfessors());
});

Flight::route('GET /api/getStudents', function(){
    Flight::json(Flight::rmuService()->getStudents());
});

Flight::route('GET /api/searchUsers/@id', function($id){
    Flight::json(Flight::rmuService()->searchUsers($id));
});

Flight::route('GET /api/searchUsername/@id', function($id){
    Flight::json(Flight::rmuService()->searchUsername($id));
});

Flight::route('GET /api/searchUsersByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->searchUsersByUniversity($id));
});

Flight::route('GET /api/listUsers', function(){
    Flight::json(Flight::rmuService()->listUsers());
});

Flight::route('GET /api/listProfessors', function(){
    Flight::json(Flight::rmuService()->listProfessors());
});

Flight::route('GET /api/listStudents', function(){
    Flight::json(Flight::rmuService()->listStudents());
});

Flight::route('GET /api/getStudentCourses', function(){
    Flight::json(Flight::rmuService()->getStudentCourses());
});

Flight::route('GET /api/getProfessorCourses', function(){
    Flight::json(Flight::rmuService()->getProfessorCourses());
});

Flight::route('GET /api/getCourseProfessors', function(){
    Flight::json(Flight::rmuService()->getCourseProfessors());
});

Flight::route('GET /api/getCourseStudents', function(){
    Flight::json(Flight::rmuService()->getCourseStudents());
});

Flight::route('GET /api/getPublicRatings', function(){
    Flight::json(Flight::rmuService()->getPublicRatings());
});

Flight::route('GET /api/getPrivateRatings', function(){
    Flight::json(Flight::rmuService()->getPrivateRatings());
});

Flight::route('POST /api/addUniversity', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addUniversity($data));
});

Flight::route('POST /api/addCourse', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addCourse($data));
});

Flight::route('POST /api/addUser', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addUser($data));
});

Flight::route('POST /api/addUserCourse', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addUserCourse($data));
});

Flight::route('POST /api/addRating', function() {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->addRating($data));
});

Flight::route('PUT /api/updateUniversity/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateUniversity($id, $data));
});

Flight::route('PUT /api/updateCourse/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateCourse($id, $data));
});

Flight::route('PUT /api/updateUserCourse/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateUserCourse($id, $data));
});

Flight::route('PUT /api/updateRating/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateRating($id, $data));
});

Flight::route('PUT /api/updateUser/@id', function($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::rmuService()->updateUser($id, $data));
});

Flight::route('DELETE /api/deleteUniversity/@id', function($id) {
    Flight::rmuService()->deleteUniversity($id);
});

Flight::route('DELETE /api/deleteCourse/@id', function($id) {
    Flight::rmuService()->deleteCourse($id);
});

Flight::route('DELETE /api/deleteUserCourse/@id', function($id) {
    Flight::rmuService()->deleteUserCourse($id);
});

Flight::route('DELETE /api/deleteRating/@id', function($id) {
    Flight::rmuService()->deleteRating($id);
});

Flight::route('DELETE /api/deleteUser/@id', function($id) {
    Flight::rmuService()->deleteUser($id);
});

Flight::route('POST /api/login', function(){
    $login = Flight::request()->data->getData();
    $uJsonu = Flight::rmuService()->searchUsername($login['username']);
    $user = $uJsonu[0];
    // Flight::json(["KLJUCEVI SU" => $login['password']], 403);
    if (!empty($user['id'])){
      if($user['password'] == $login['password']){
        unset($user['password']);
        $jwt = JWT::encode($user, Config::JWT_SECRET(), 'HS256');
        Flight::json(['token' => $jwt]);
      } else {
        Flight::json(["message" => "Wrong password"], 403);
      }
    } else {
        Flight::json(["message" => "User doesn't exist"], 404);
    }
});

?>
