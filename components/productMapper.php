<?php
require_once 'databaseConfiguration.php';

class ProductMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getProductByName($name){
        $this->query = "select * from products where name=:name";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsByCategory($category){
        $this->query = "select * from products where category=:category";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":category", $category);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsByLowerCategory($lowerCategory){
        $this->query = "select * from products where lowerCategory=:lowerCategory";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":lowerCategory", $lowerCategory);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllProducts(){
        $this->query = "select * from products";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductByID($productId){
        $this->query = "select * from products where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $productId);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}