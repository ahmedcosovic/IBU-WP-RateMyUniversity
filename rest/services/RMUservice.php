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
        return $this->dao->getCoursesById($id);
    }
    public function getCourseByCode($id){
        return $this->dao->getCoursesByCode($id);
    }
    public function getCourseByEcts($id){
        return $this->dao->getCoursesByEcts($id);
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
    public function getUsersById($id){
        return $this->dao->getUsersById($id);
    }
    public function getStudentsByUniversity($id){
        return $this->dao->getStudentsByUniversity($id);
    }
    public function getProfessorsByUniversity($id){
        return $this->dao->getProfessorsByUniversity($id);
    }
    public function getAllRatings(){
        return $this->dao->getAllRatings();
    }
    public function getRatingsByDate($id){
        return $this->dao->getRatingsByDate($id);
    }
    public function getAllAnonymousRatings(){
        return $this->dao->getAllAnonymousRatings();
    }
    public function getAllNonAnonymousRatings(){
        return $this->dao->getAllNonAnonymousRatings();
    }
    public function getRatingByProfessor($id){
        return $this->dao->getRatingByProfessor($id);
    }public function getRatingByStudent($id){
        return $this->dao->getRatingByStudent($id);
    }
    
}
?>
