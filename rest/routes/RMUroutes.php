<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

/**
 * @OA\Get(path="/connection-check", tags={"connection"}, security={{"ApiKeyAuth": {}}},
 *         summary="Check connection.",
 *         @OA\Response( response=200, description="Connection status.")
 * )
 */
Flight::route('GET /api/connection-check', function(){
    Flight::rmuService();
});

/**
 * @OA\Get(path="/getCourses", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all courses from the API. ",
 *         @OA\Response( response=200, description="List of courses.")
 * )
 */
Flight::route('GET /api/getCourses', function(){
    Flight::json(Flight::rmuService()->getCourses());
});
/**
 * @OA\Get(path="/getCoursesByUniversity/{universityId}", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all courses by university from the API. ",
 *         @OA\Parameter(in="path",name="universityId",example=1,description="University ID"),
 *         @OA\Response( response=200, description="List of courses by university.")
 * )
 */
Flight::route('GET /api/getCoursesByUniversity/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByUniversity($id));
});
/**
 * @OA\Get(path="/getCourseByCode/{code}", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all courses by code from the API. ",
 *         @OA\Parameter(in="path",name="code",example="IBU-001",description="Course code"),
 *         @OA\Response( response=200, description="Course by code.")
 * )
 */
Flight::route('GET /api/getCourseByCode/@id', function($id){
    Flight::json(Flight::rmuService()->getCourseByCode($id));
});
/**
 * @OA\Get(path="/getCoursesByEcts/{ects}", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all courses by ects from the API. ",
 *         @OA\Parameter(in="path",name="ects",example="6",description="Course ects"),
 *         @OA\Response( response=200, description="Course by ects.")
 * )
 */
Flight::route('GET /api/getCoursesByEcts/@id', function($id){
    Flight::json(Flight::rmuService()->getCoursesByEcts($id));
});
/**
 * @OA\Get(path="/searchCourse/{keyword}", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all courses with keyword from the API. ",
 *         @OA\Parameter(in="path",name="keyword",example="Programming",description="Name"),
 *         @OA\Response( response=200, description="Name.")
 * )
 */
Flight::route('GET /api/searchCourse/@id', function($id){
    Flight::json(Flight::rmuService()->searchCourse($id));
});
/**
 * @OA\Get(path="/getUniversities", tags={"universities"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all universities from the API. ",
 *         @OA\Response( response=200, description="List of universities.")
 * )
 */
Flight::route('GET /api/getUniversities', function(){
    Flight::json(Flight::rmuService()->getUniversities());
});
/**
 * @OA\Get(path="/searchUniversities/{keyword}", tags={"universities"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all universities by keyword from the API. ",
 *         @OA\Parameter(in="path",name="keyword",example="IBU",description="University name"),
 *         @OA\Response( response=200, description="List of universities by keyword.")
 * )
 */
Flight::route('GET /api/searchUniversities/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversities($id));
});

Flight::route('GET /api/searchUniversitiesByCity/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversitiesByCity($id));
});

Flight::route('GET /api/searchUniversitiesByCountry/@id', function($id){
    Flight::json(Flight::rmuService()->searchUniversitiesByCountry($id));
});
/**
 * @OA\Get(path="/listCountries", tags={"countries"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all countries from the API. ",
 *         @OA\Response( response=200, description="List of countries.")
 * )
 */
Flight::route('GET /api/listCountries', function(){
    Flight::json(Flight::rmuService()->listCountries());
});
/**
 * @OA\Get(path="/listCities", tags={"cities"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all cities from the API. ",
 *         @OA\Response( response=200, description="List of cities.")
 * )
 */
Flight::route('GET /api/listCities', function(){
    Flight::json(Flight::rmuService()->listCities());
});
/**
 * @OA\Get(path="/getUsers", tags={"users"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all users from the API. ",
 *         @OA\Response( response=200, description="List of users.")
 * )
 */
Flight::route('GET /api/getUsers', function(){
    Flight::json(Flight::rmuService()->getUsers());
});
/**
 * @OA\Get(path="/getProfessors", tags={"professors"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all professors from the API. ",
 *         @OA\Response( response=200, description="List of professors.")
 * )
 */
Flight::route('GET /api/getProfessors', function(){
    Flight::json(Flight::rmuService()->getProfessors());
});
/**
 * @OA\Get(path="/getStudents", tags={"students"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all students from the API. ",
 *         @OA\Response( response=200, description="List of students.")
 * )
 */
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
/**
 * @OA\Get(path="/listUsers", tags={"users"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all users from the API. ",
 *         @OA\Response( response=200, description="List of users.")
 * )
 */
Flight::route('GET /api/listUsers', function(){
    Flight::json(Flight::rmuService()->listUsers());
});
/**
 * @OA\Get(path="/listProfessors", tags={"professors"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all professors from the API. ",
 *         @OA\Response( response=200, description="List of professors.")
 * )
 */
Flight::route('GET /api/listProfessors', function(){
    Flight::json(Flight::rmuService()->listProfessors());
});
/**
 * @OA\Get(path="/listStudents", tags={"students"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all students from the API. ",
 *         @OA\Response( response=200, description="List of students.")
 * )
 */
Flight::route('GET /api/listStudents', function(){
    Flight::json(Flight::rmuService()->listStudents());
});
/**
 * @OA\Get(path="/getStudentCourses", tags={"students"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all studentCourses from the API. ",
 *         @OA\Response( response=200, description="List of studentCourses.")
 * )
 */
Flight::route('GET /api/getStudentCourses', function(){
    Flight::json(Flight::rmuService()->getStudentCourses());
});
/**
 * @OA\Get(path="/getProfessorCourses", tags={"professors"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all professor Courses from the API. ",
 *         @OA\Response( response=200, description="List of professor Courses.")
 * )
 */
Flight::route('GET /api/getProfessorCourses', function(){
    Flight::json(Flight::rmuService()->getProfessorCourses());
});
Flight::route('GET /api/getProfessorCoursesIds/@pid-@cid', function($pid,$cid){
    Flight::json(Flight::rmuService()->getProfessorCoursesIds($pid,$cid));
});
/**
 * @OA\Get(path="/getCourseProfessors", tags={"professors"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all course professors from the API. ",
 *         @OA\Response( response=200, description="List of course professors.")
 * )
 */
Flight::route('GET /api/getCourseProfessors', function(){
    Flight::json(Flight::rmuService()->getCourseProfessors());
});
Flight::route('GET /api/getCourseProfessorsByCid/@cid', function($cid){
    Flight::json(Flight::rmuService()->getCourseProfessorsByCid($cid));
});
/**
 * @OA\Get(path="/getCourseStudents", tags={"courses"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all course students from the API. ",
 *         @OA\Response( response=200, description="List of course students.")
 * )
 */
Flight::route('GET /api/getCourseStudents', function(){
    Flight::json(Flight::rmuService()->getCourseStudents());
});
/**
 * @OA\Get(path="/getPublicRatings", tags={"ratings"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all public ratings from the API. ",
 *         @OA\Response( response=200, description="List of public ratings.")
 * )
 */
Flight::route('GET /api/getPublicRatings', function(){
    Flight::json(Flight::rmuService()->getPublicRatings());
});
/**
 * @OA\Get(path="/getPrivateRatings", tags={"ratings"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all private ratings from the API. ",
 *         @OA\Response( response=200, description="List of private ratings.")
 * )
 */
Flight::route('GET /api/getPrivateRatings', function(){
    Flight::json(Flight::rmuService()->getPrivateRatings());
});
/**
 * @OA\Post(
 *      path="/addUniversity", security={{"ApiKeyAuth": {}}},
 *      description="Add university",
 *      tags={"universities"},
 *      @OA\RequestBody(description="Add new university", required=true,
 *          @OA\MediaType(mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="name",type="string", example="IBU", description="Name"),
 *                  @OA\Property(property="address",type="string", example="Francuske revolucije bb", description="Address"),
 *                  @OA\Property(property="city",type="string", example="Sarajevo", description="City"),
 *                  @OA\Property(property="country",type="string", example="Bosnia and Herzegovina", description="Country")
 * )
 * )
 * ),
 *      @OA\Response(response=200, description="University added."),
 *      @OA\Response(response=500,description="Error")
 * )
 */

Flight::route('GET /api/getRatingsByStudent/@id', function($sid){
    Flight::json(Flight::rmuService()->getRatingsByStudent($sid));
});

Flight::route('GET /api/getRatingsForProfessor/@pid', function($pid){
    Flight::json(Flight::rmuService()->getRatingsForProfessor($pid));
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
/**
 * @OA\Put(
 *      path="/updateUniversity/{id}", security={{"ApiKeyAuth": {}}},
 *      description="Edit university",
 *      tags={"universities"},
 *      @OA\Parameter(in="path",name="id",example=1,description="University ID"),
 *      @OA\RequestBody(description="University info", required=true,
 *          @OA\MediaType(mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(property="name",type="string", example="IBU", description="Name"),
 *                  @OA\Property(property="address",type="string", example="Francuske revolucije bb", description="Address"),
 *                  @OA\Property(property="city",type="string", example="Sarajevo", description="City"),
 *                  @OA\Property(property="country",type="string", example="Bosnia and Herzegovina", description="Country")
 * )
 * )
 * ),
 *      @OA\Response(response=200, description="University edited."),
 *      @OA\Response(response=500,description="Error")
 * )
 */
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
/**
 * @OA\Delete(
 *      path="/deleteUniversity/{id}", security={{"ApiKeyAuth": {}}},
 *      description="Delete university",
 *      tags={"universities"},
 *      @OA\Parameter(in="path",name="id",example=1,description="University ID"),
 *      @OA\Response(response=200, description="University deleted."),
 *      @OA\Response(response=500,description="Error")
 * )
 */
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

Flight::route('POST /login', function(){
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
// Middleware
/* Flight::route('/api/*', function () {
    $header = Flight::header("Authorization");
    if (!$header) {
      Flight::json(["message" => "Authorization is missing"], 403);
      return FALSE;
    }else{
        try {
          $decoded = (array)JWT::decode($header, new Key(Config::JWT_SECRET(), 'HS256'));
          Flight::set('user', $decoded);
          return TRUE;
        } catch (\Exception $e) {
          Flight::json(["message" => "Authorization token is not valid"], 403);
          return FALSE;
        }
    }
  });
 */
?>
