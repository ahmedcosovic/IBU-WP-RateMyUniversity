<?php

class RMUDao {

    private $conn;

    public function __construct(){
        try {

        $servername = "sql7.freemysqlhosting.net";
        $serverport = "3306";
        $username = "sql7610511";
        $password = "eHCwFhXnpw";
        $schema = "sql7610511";

        /*options array neccessary to enable ssl mode - do not change*/
        /*$options = array(
        	PDO::MYSQL_ATTR_SSL_CA => 'https://drive.google.com/file/d/1g3sZDXiWK8HcPuRhS0nNeoUlOVSWdMAg/view?usp=share_link',
        	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,

        );*/

        $this->conn = new PDO("mysql:host=$servername;port=$serverport;dbname=$schema", $username, $password);  
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getAllUniversities(){
        $query = "SELECT * FROM universities;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUniversityById($id){
        $query = "SELECT * FROM universities WHERE id=$id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUniversityByCity($city){
        $query = "SELECT * FROM universities WHERE city=$city ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUniversityByCountry($country){
        $query = "SELECT * FROM universities WHERE country=$country ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUniversityByName($uname){
        $query = "SELECT * FROM universities WHERE name=$uname ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllCourses(){
        $query = "SELECT * FROM courses ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCoursesById($cid){
        $query = "SELECT * FROM courses WHERE id=$cid ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCourseByCode($code){
        $query = "SELECT * FROM courses WHERE code=$code ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCourseByEcts($ects){
        $query = "SELECT * FROM courses WHERE ects=$ects ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getPcByCourse($cid){
        $query = "SELECT * FROM professorcourses WHERE course_id=$cid ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getPcByProfessor($profid){
        $query = "SELECT * FROM professorcourses WHERE professor_id=$profid ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers(){
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllProfessors(){
        $query = "SELECT * FROM users WHERE isprofessor=1 ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllStudents(){
        $query = "SELECT * FROM users WHERE isprofessor=0 ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUsersById($uid){
        $query = "SELECT * FROM users WHERE id=$uid ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getStudentsByUniversity($univid){
        $query = "SELECT * FROM users WHERE university_id=$univid AND isprofessor=0 ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProfessorsByUniversity($univid){
        $query = "SELECT * FROM users WHERE university_id=$univid AND isprofessor=1 ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllRatings(){
        $query = "SELECT * FROM rating ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getRatingsByDate($rdate){
        $query = "SELECT * FROM rating WHERE ratedate=$rdate";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllAnonymousRatings(){
        $query = "SELECT * FROM rating WHERE anonymous=1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllNonAnonymousRatings(){
        $query = "SELECT * FROM rating WHERE anonymous=0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getRatingByProfessor($pid){
        $query = "SELECT * FROM rating r JOIN professorcourses pc ON r.pc_id=pc.id   WHERE pc.professor_id=$pid";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getRatingByStudent($sid){
        $query = "SELECT * FROM rating WHERE student_id=$sid";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
