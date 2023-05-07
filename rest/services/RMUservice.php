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
}
?>
