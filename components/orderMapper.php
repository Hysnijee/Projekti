<?php 
require_once 'databaseConfiguration.php';

class OrderMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getOrderByName($name){
        $this->query = "select * from orders where name=:name";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllOrders(){
        $this->query = "select * from orders";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetch(PDO::FETCH_ASSOC);
    }
}