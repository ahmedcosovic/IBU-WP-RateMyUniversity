<?php
class RateMyUniversity {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Add a university to the database
    public function addUniversity($name, $location, $rating) {
        $stmt = $this->pdo->prepare("INSERT INTO universities (name, location, rating) VALUES (:name, :location, :rating)");
        $stmt->execute(array(':name' => $name, ':location' => $location, ':rating' => $rating));
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