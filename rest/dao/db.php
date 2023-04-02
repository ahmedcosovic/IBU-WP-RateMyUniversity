<?php

$servername = "sql7.freemysqlhosting.net";
$username = "sql7610511";
$password = "eHCwFhXnpw";
$schema = "sql7610511";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e) {
    echo  "Connection failed". $e->getMessage();
}

?>