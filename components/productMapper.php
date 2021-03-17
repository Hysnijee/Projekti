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
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){
            echo '<image src='.$result['img_path'].'><br><br>';  
            echo $result['name']. '<br><br>';
            echo $result['category'].'<br>';
            echo $result['price']. '€<br><br><br>';
        }
    }

    public function getProductsByCategory($category){
        $this->query = "select * from products where category=:category";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":category", $category);
        $statement->execute();
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){  
            echo '<image src='.$result['img_path'].'style="width:150px; height:150px;"><br><br>'; 
            echo $result['name']. '<br>';
            echo $result['price']. '€<br><br><br>';
        }
    }

    public function getProductsByLowerCategory($lowerCategory){
        $this->query = "select * from products where lowerCategory=:lowerCategory";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":lowerCategory", $lowerCategory);
        $statement->execute();
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){ 
            echo '<image src='.$result['img_path'].' style="width:150px; height:150px;"><br><br>';    
            echo $result['name']. '<br>';
            echo $result['price']. '€<br><br>';
            echo '<input type="submit" value="Shto në Shportë" id="shto">'.'<br><br><br>';
        }
    }

    public function getAllProducts(){
        $this->query = "select * from products";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){
            echo '<li><image src='.$result['img_path'].'style="width:150px; height:150px;"></li><br><br>';     
            echo '<li>'.$result['name']. '</li><br>';
            echo '<li>'.$result['price']. '€</li><br><br><br>';
        }
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