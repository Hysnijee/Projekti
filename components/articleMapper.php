<?php
require_once 'databaseConfiguration.php';

class ArticleMapper extends DatabasePDOConfiguration{
    
    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function getDescriptionByType($type){
        $this->query = "select * from homepagedesc where type=:type";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":type", $type);
        $statement->execute();
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){
            echo $result['description'].'<br>';
        }
    }

    public function getDescriptionById($Id){
        $this->query = "select * from homepagedesc where Id=:Id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":Id", $Id);
        $statement->execute();
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){
            echo $result['description'].'<br>';
        }
    }
}
