<?php
require_once 'databaseConfiguration.php';

class ProductMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getProductByName($name){
        $this->query = "select * from products where name=:name";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProductsByCategory($category){
        $this->query = "select * from products where category=:category";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":category", $category);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProductsByLowerCategory($lowerCategory){
        $this->query = "select * from products where lowerCategory=:lowerCategory";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":lowerCategory", $lowerCategory);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllProducts(){
        $this->query = "select * from products";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertProduct($product){
        $query = "insert into products (name, category, lowerCategory, img_path, price) values (:name, :category, :lowerCategory, :img_path, :price)";
        $statement = $this->conn->prepare($query);
        
        $name = $product->getName();
        $category = $product->getCategory();
        $lowerCategory = $product->getLowerCategory();
        $image = $product->getImage();
        $price = $product->getPrice();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":category", $category);
        $statement->bindParam(":lowerCategory", $lowerCategory);
        $statement->bindParam(":img_path", $image);
        $statement->bindParam(":price", $price);
        $statement->execute();
    }

    public function deleteProduct($productId){
        $this->query = "delete from products where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $productId);
        $statement->execute();
    }

    public function getProductByID($productId){
        $this->query = "select * from products where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $productId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC); 
        return $result;
    }

}