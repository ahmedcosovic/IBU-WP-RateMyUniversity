<?php
require_once __DIR__."/../dao/RMUdao.php";

class RMUService {
    protected $dao;
    public function __construct(){
        $this->dao = new RMUDao();
    }
    public function getCourses(){
        return $this->dao->getCourses();
    }
    public function getCoursesByUniversity($id){
        return $this->dao->getCoursesByUniversity($id);
    }
    public function getCourseByCode($id){
        return $this->dao->getCourseByCode($id);
    }
    public function getCoursesByEcts($id){
        return $this->dao->getCoursesByEcts($id);
    }
    public function searchCourse($id){
        return $this->dao->searchCourse($id);
    }
    public function getUniversities(){
        return $this->dao->getUniversities();
    }
    public function searchUniversities($id){
        return $this->dao->searchUniversities($id);
    }
    public function searchUniversitiesByCity($id){
        return $this->dao->searchUniversitiesByCity($id);
    }
    public function searchUniversitiesByCountry($id){
        return $this->dao->searchUniversitiesByCountry($id);
    }
    public function listCountries(){
        return $this->dao->listCountries();
    }
    public function listCities(){
        return $this->dao->listCities();
    }
    public function getUsers(){
        return $this->dao->getUsers();
    }
    public function getProfessors(){
        return $this->dao->getProfessors();
    }
    public function getStudents(){
        return $this->dao->getStudents();
    }
    public function searchUsers($id){
        return $this->dao->searchUsers($id);
    }
    public function searchUsername($id){
        return $this->dao->searchUsername($id);
    }
    public function searchUsersByUniversity($id){
        return $this->dao->searchUsersByUniversity($id);
    }
    public function getStudentById($id){
        return $this->dao->getStudentById($id);
    }
    public function listUsers(){
        return $this->dao->listUsers();
    }
    public function listProfessors(){
        return $this->dao->listProfessors();
    }
    public function listStudents(){
        return $this->dao->listStudents();
    }
    public function getStudentCourses(){
        return $this->dao->getStudentCourses();
    }
    public function getProfessorCourses(){
        return $this->dao->getProfessorCourses();
    }
    public function getCourseProfessors(){
        return $this->dao->getCourseProfessors();
    }
    public function getCourseStudents(){
        return $this->dao->getCourseStudents();
    }
    public function getPublicRatings(){
        return $this->dao->getPublicRatings();
    }
    public function getPrivateRatings(){
        return $this->dao->getPrivateRatings();
    }
    public function addUniversity($data){
        return $this->dao->addUniversity($data);
    }
    public function addCourse($data){
        return $this->dao->addCourse($data);
    }
    public function addUser($data){
        return $this->dao->addUser($data);
    }
    public function addUserCourse($data){
        return $this->dao->addUserCourse($data);
    }
    public function addRating($data){
        return $this->dao->addRating($data);
    }
    public function updateUniversity($id, $data){
        return $this->dao->updateUniversity($id, $data);
    }
    public function updateCourse($id, $data){
        return $this->dao->updateCourse($id, $data);
    }
    public function updateUserCourse($id, $data){
        return $this->dao->updateUserCourse($id, $data);
    }
    public function updateRating($id, $data){
        return $this->dao->updateRating($id, $data);
    }
    public function updateUser($id, $data){
        return $this->dao->updateUser($id, $data);
    }
    public function deleteUniversity($id){
        return $this->dao->deleteUniversity($id);
    }
    public function deleteCourse($id){
        return $this->dao->deleteCourse($id);
    }
    public function deleteUserCourse($id){
        return $this->dao->deleteUserCourse($id);
    }
    public function deleteUser($id){
        return $this->dao->deleteUser($id);
    }
    public function deleteRating($id){
        return $this->dao->deleteRating($id);
    }
}
?>
