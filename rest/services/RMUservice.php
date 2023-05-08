<?php
require_once __DIR__."/../dao/RMUdao.php";

class RMUService {
    protected $dao;

    public function __construct(){
        $this->dao = new RMUDao();
    }

    public function getAllUniversities(){
        return $this->dao->getAllUniversities();
    }

    public function getUniversityById($id){
        return $this->dao->getUniversityById($id);
    }
    public function getUniversityByCity($id){
        return $this->dao->getUniversityByCity($id);
    }
    public function getUniversityByCountry($id){
        return $this->dao->getUniversityByCountry($id);
    }
    public function getUniversityByName($id){
        return $this->dao->getUniversityByName($id);
    }
    public function getAllCourses(){
        return $this->dao->getAllCourses();
    }
    public function getCourseById($id){
        return $this->dao->getCourseById($id);
    }
    public function getCourseByCode($id){
        return $this->dao->getCourseByCode($id);
    }
    public function getCourseByEcts($id){
        return $this->dao->getCourseByEcts($id);
    }
    public function getPcByCourse($id){
        return $this->dao->getPcByCourse($id);
    }
    public function getPcByProfessor($id){
        return $this->dao->getPcByProfessor($id);
    }
    public function getAllUsers(){
        return $this->dao->getAllUsers();
    }
    public function getAllProfessors(){
        return $this->dao->getAllProfessors();
    }
    public function getAllStudents(){
        return $this->dao->getAllStudents();
    }
    public function getUserById($id){
        return $this->dao->getUserById($id);
    }
    public function getStudentByUniversity($id){
        return $this->dao->getStudentByUniversity($id);
    }
    public function getProfessorByUniversity($id){
        return $this->dao->getProfessorByUniversity($id);
    }
    public function getAllRatings(){
        return $this->dao->getAllRatings();
    }
    public function getRatingByDate($id){
        return $this->dao->getRatingByDate($id);
    }
    public function getAllAnonymousRatings(){
        return $this->dao->getAllAnonymousRatings();
    }
    public function getAllNonAnonymousRatings(){
        return $this->dao->getAllNonAnonymousRatings();
    }
    public function getRatingByProfessor($id){
        return $this->dao->getRatingByProfessor($id);
    }
    public function getRatingByStudent($id){
        return $this->dao->getRatingByStudent($id);
    }
    public function addUniversity($data){
        return $this->dao->addUniversity($data);
    }
    // ADD MORE ADD FUNCTIONS FOR INSERT STATEMENTS
    public function updateUniversity($id, $data){
        return $this->dao->updateUniversity($id, $data);
    }
    // ADD MORE UPDATE FUNCTIONS FOR UPDATE STATEMENTS
    public function deleteUniversity($id){
        return $this->dao->deleteUniversity($id);
    }
    // ADD MORE DELETE FUNCTIONS FOR DELETE STATEMENTS
}
?>
