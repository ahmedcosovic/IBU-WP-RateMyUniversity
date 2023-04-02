<?php
class RateMyUniversity {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Add a course to the database
    public function addCourse($name, $ects, $code, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO courses (name, ects, code, description) VALUES (:name, :ects, :code, :description)");
        $stmt->execute(array(':name' => $name, ':ects' => $ects, ':code' => $code, ':description' => $description));
    }
    
    // Add a university to the database
    public function addUniversity($name, $city, $country) {
        $stmt = $this->pdo->prepare("INSERT INTO universities (name, city,country) VALUES (:name, :city, :country)");
        $stmt->execute(array(':name' => $name, ':city' => $city, ':country' => $country));
    }

    // Add a student to the database
    public function addStudent($username, $password, $email, $university_id, $firstname, $lastname, $phone) {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, password, email, university_id, isprofessor, firstname, lastname, phone) VALUES (:username, :password, :email, :university_id, 0, :firstname, :lastname, :phone)");
        $stmt->execute(array(':username' => $username, ':password' => $password, ':email' => $email, ':university_id' => $university_id, ':firstname' => $firstname, ':lastname' => $lastname, ':phone' => $phone));
    }

    // Add a professor to the database
    public function addProfessor($username, $password, $email, $university_id, $firstname, $lastname, $phone) {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, password, email, university_id, isprofessor, firstname, lastname, phone) VALUES (:username, :password, :email, :university_id, 1, :firstname, :lastname, :phone)");
        $stmt->execute(array(':username' => $username, ':password' => $password, ':email' => $email, ':university_id' => $university_id, ':firstname' => $firstname, ':lastname' => $lastname, ':phone' => $phone));
    }

    // Link professor and course
    public function linkPC($professor_id, $course_id) {
        $stmt = $this->pdo->prepare("INSERT INTO professorcourses (professor_id, course_id) VALUES (:professor_id, :course_id)");
        $stmt->execute(array(':professor_id' => $professor_id, ':course_id' => $course_id));
    }

    // Add rating
    public function addRating($student_id, $pc_id, $rating) {
        $currentDate = date("Y-m-d");
        $stmt = $this->pdo->prepare("INSERT INTO users (student_id, pc_id, rating, ratedate, anonymous) VALUES (:student_id, :pc_id, :rating, :currentDate, 0)");
        $stmt->execute(array(':student_id' => $student_id, ':pc_id' => $pc_id, ':rating' => $rating));
    }

    // Add anonymous rating
    public function addXRating($student_id, $pc_id, $rating) {
        $currentDate = date("Y-m-d");
        $stmt = $this->pdo->prepare("INSERT INTO users (student_id, pc_id, rating, ratedate, anonymous) VALUES (:student_id, :pc_id, :rating, :currentDate, 1)");
        $stmt->execute(array(':student_id' => $student_id, ':pc_id' => $pc_id, ':rating' => $rating));
    }
    
    // Get all universities from the database
    public function getAllUniversities() {
        $stmt = $this->pdo->query("SELECT * FROM universities");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Update a university in the database
    public function updateUniversity($id, $name, $location, $rating) {
        $stmt = $this->pdo->prepare("UPDATE universities SET name = :name, location = :location, rating = :rating WHERE id = :id");
        $stmt->execute(array(':id' => $id, ':name' => $name, ':location' => $location, ':rating' => $rating));
    }
    
    // Delete a university from the database
    public function deleteUniversity($id) {
        $stmt = $this->pdo->prepare("DELETE FROM universities WHERE id = :id");
        $stmt->execute(array(':id' => $id));
    }
}
?>