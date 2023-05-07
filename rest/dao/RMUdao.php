<?php

class RMUDao {

    private $conn;

    /**
    * constructor of dao class
    */
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

        $this->conn = new PDO("mysql:host=$servername;port=$serverport;dbname=$schema;sslmode=REQUIRED", $username, $password, $options);  
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    /** TODO
    * Implement DAO method used to get cap table
    */
    public function getAllUniversities(){
        $query = "SELECT * FROM universities;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /** TODO
    * Implement DAO method used to get summary
    */
    public function summary(){
        $query = "select *, count(ct.investor_id), sum(ct.diluted_shares) from cap_table ct group by ct.investor_id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /** TODO
    * Implement DAO method to return list of investors with their total shares amount
    */
    public function investors(){
        $query = "select i.id, i.first_name, i.last_name, i.email, sum(ct.diluted_shares) as total from investors i, cap_table ct where i.id=ct.investor_id group by i.id;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
