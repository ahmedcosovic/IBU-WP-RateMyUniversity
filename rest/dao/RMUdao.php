<?php
require_once __DIR__ . '/../config.php';
class RMUDao {

    private $conn;

    public function __construct(){
        try {

        $servername = "localhost";
        $serverport = "3306";
        $username = "root";
        $password = "root";
        $schema = "rmu";

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

    public function getCourses(){
        $query = "select * from courses;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCoursesByUniversity($id){
        $query = "select * from courses where uid=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCourseByCode($code){
        $query = "select * from courses where LOWER(code)=LOWER('$code');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCoursesByEcts($ects){
        $query = "select * from courses where ects=$ects";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchCourse($search){
        $query = "select * from courses where LOWER(name) like LOWER('%$search%');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUniversities(){
        $query = "select * from universities;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUniversities($search){
        $query = "select * from universities where LOWER(name) like LOWER('%$search%');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUniversitiesByCity($city){
        $query = "select * from universities where LOWER(city)=LOWER('$city');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUniversitiesByCountry($country){
        $query = "select * from universities where LOWER(country)=LOWER('$country');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function listCountries(){
        $query = "select country from universities group by country;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function listCities(){
        $query = "select city from universities group by city;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUsers(){
        $query = "select * from users;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProfessors(){
        $query = "select * from users where professor=1;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getStudents(){
        $query = "select * from users where professor=0;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUsers($search){
        $query = "select * from users where LOWER(fullname) like LOWER('%$search%');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUsername($username){
        $query = "select * from users where LOWER(username)=LOWER('$username');";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function searchUsersByUniversity($id){
        $query = "select * from users where uid=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getStudentById($stuid){
        $query = "select * from users where stuid=$stuid;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function listUsers(){
        $query = "select concat(concat(username,' - '),fullname) as user from users;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function listProfessors(){
        $query = "select concat(concat(username,' - '),fullname) as user from users where professor=1;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function listStudents(){
        $query = "select concat(concat(username,' - '),fullname) as user from users where professor=0;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getStudentCourses(){
        $query = "select u.id as userid, concat(concat(u.username, ' - '),u.fullname) as student, group_concat(c.id) as courseid, group_concat(c.name) as course from user_courses uc join users u on u.id=uc.uid join courses c on c.id=uc.cid where u.professor=0 group by u.id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProfessorCourses(){
        $query = "select u.id as userid, concat(concat(u.username, ' - '),u.fullname) as student, group_concat(c.id) as courseid, group_concat(c.name) as course from user_courses uc join users u on u.id=uc.uid join courses c on c.id=uc.cid where u.professor=1 group by u.id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCourseProfessors(){
        $query = "select c.id as courseid, c.name as course, group_concat(u.id) as userid, group_concat(concat(concat(u.username, ' - '),u.fullname)) as student from user_courses uc join users u on u.id=uc.uid join courses c on c.id=uc.cid where u.professor=1 group by c.id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCourseProfessorsByCid($cid){
        $query = "select c.id as courseid, c.name as course, u.id as profid, u.fullname from user_courses uc join users u on u.id=uc.uid join courses c on c.id=uc.cid where u.professor=1 and c.id=$cid;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCourseStudents(){
        $query = "select c.id as courseid, c.name as course, group_concat(u.id) as userid, group_concat(concat(concat(u.username, ' - '),u.fullname)) as student from user_courses uc join users u on u.id=uc.uid join courses c on c.id=uc.cid where u.professor=0 group by c.id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPublicRatings(){
        $query = "select r.id, r.pscore, r.cscore, r.datetime, r.comment, u.fullname as 'student', c.code, c.name, tabela2.x as 'professors', tabela2.y as 'professorIds' from rating r join user_courses uc on uc.id=r.pc_id join users u on u.id=r.sid join courses c on c.id=uc.cid join (select GROUP_CONCAT(u2.fullname) as x, GROUP_CONCAT(u2.id) as y, uc2.cid from users u2 join user_courses uc2 on u2.id=uc2.uid where u2.professor=1 group by uc2.cid) as tabela2 on tabela2.cid=c.id where r.anonymous=0;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPrivateRatings(){
        $query = "select r.id, r.pscore, r.cscore, r.datetime, r.comment, c.code, c.name, tabela2.x as 'professors', tabela2.y as 'professorIds' from rating r join user_courses uc on uc.id=r.pc_id join users u on u.id=r.sid join courses c on c.id=uc.cid join (select GROUP_CONCAT(u2.fullname) as x, GROUP_CONCAT(u2.id) as y, uc2.cid from users u2 join user_courses uc2 on u2.id=uc2.uid where u2.professor=1 group by uc2.cid) as tabela2 on tabela2.cid=c.id where r.anonymous=1;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addUniversity($data){
        $query = "INSERT INTO universities (";
        foreach ($data as $column => $value) {
            $query.=$column.",";
        }
        $query = substr($query, 0, -1);
        $query.=") VALUES (";
        foreach ($data as $column => $value) {
            $query.="'$value',";
        }
        $query = substr($query, 0, -1);
        $query.=");";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function addCourse($data){
        $query = "INSERT INTO courses (";
        foreach ($data as $column => $value) {
            $query.=$column.",";
        }
        $query = substr($query, 0, -1);
        $query.=") VALUES (";
        foreach ($data as $column => $value) {
            $query.="'$value',";
        }
        $query = substr($query, 0, -1);
        $query.=");";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function addUser($data){
        $query = "INSERT INTO users (";
        foreach ($data as $column => $value) {
            $query.=$column.",";
        }
        $query = substr($query, 0, -1);
        $query.=") VALUES (";
        foreach ($data as $column => $value) {
            $query.="'$value',";
        }
        $query = substr($query, 0, -1);
        $query.=");";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function addUserCourse($data){
        $query = "INSERT INTO user_courses (";
        foreach ($data as $column => $value) {
            $query.=$column.",";
        }
        $query = substr($query, 0, -1);
        $query.=") VALUES (";
        foreach ($data as $column => $value) {
            $query.="'$value',";
        }
        $query = substr($query, 0, -1);
        $query.=");";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function addRating($data){
        $query = "INSERT INTO rating (";
        foreach ($data as $column => $value) {
            $query.=$column.",";
        }
        $query = substr($query, 0, -1);
        $query.=") VALUES (";
        foreach ($data as $column => $value) {
            $query.="'$value',";
        }
        $query = substr($query, 0, -1);
        $query.=");";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function updateUniversity($id, $data){
        $query = "UPDATE universities SET ";
        foreach ($data as $column => $value) {
            $query.="$column='$value',"; 
        }
        $query = substr($query, 0, -1);
        $query.=" WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->searchUniversities($id);
    }

    public function updateCourse($id, $data){
        $query = "UPDATE courses SET ";
        foreach ($data as $column => $value) {
            $query.="$column='$value',"; 
        }
        $query = substr($query, 0, -1);
        $query.=" WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->searchUniversities($id);
    }

    public function updateUserCourse($id, $data){
        $query = "UPDATE user_courses SET ";
        foreach ($data as $column => $value) {
            $query.="$column='$value',"; 
        }
        $query = substr($query, 0, -1);
        $query.=" WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->searchUniversities($id);
    }

    public function updateRating($id, $data){
        $query = "UPDATE rating SET ";
        foreach ($data as $column => $value) {
            $query.="$column='$value',"; 
        }
        $query = substr($query, 0, -1);
        $query.=" WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->searchUniversities($id);
    }

    public function updateUser($id, $data){
        $query = "UPDATE users SET ";
        foreach ($data as $column => $value) {
            $query.="$column='$value',"; 
        }
        $query = substr($query, 0, -1);
        $query.=" WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $this->searchUniversities($id);
    }
    
    public function deleteUniversity($id){
        $query = "DELETE FROM universities WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo "\nDeleted $id successfully.";
    }
    public function deleteCourse($id){
        $query = "DELETE FROM courses WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo "\nDeleted $id successfully.";
    }
    public function deleteUserCourse($id){
        $query = "DELETE FROM user_courses WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo "\nDeleted $id successfully.";
    }
    public function deleteRating($id){
        $query = "DELETE FROM rating WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo "\nDeleted $id successfully.";
    }
    public function deleteUser($id){
        $query = "DELETE FROM users WHERE id=$id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        echo "\nDeleted $id successfully.";
    }
}
?>
