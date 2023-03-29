<?php
require_once 'RateMyUniversity.php';
$rateMyUniversity = new RateMyUniversity($pdo);

try {
    // Add a new university
    $rateMyUniversity->addUniversity("International Burch University", "Sarajevo", 9);
    
    // Get all universities
    $result = $rateMyUniversity->getAllUniversities();
    foreach ($result as $row) {
        echo $row['id'] . ", " . $row['name'] . ", " . $row['location'] . ", " . $row['rating'] . "<br>";
    }
    
    // Update a university
    $rateMyUniversity->updateUniversity(1, "International Burch University", "Sarajevo", 10);
    
    // Delete a university
    $rateMyUniversity->deleteUniversity(1);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $pdo = null;
}
?>