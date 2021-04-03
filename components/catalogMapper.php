<?php
require_once 'databaseConfiguration.php';

class CatalogMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getAllCatalogs(){
        $this->query = "select * from catalog";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCatalogByName($name){
        $this->query = "select * from catalog where name=:name";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->execute();
        return $result = $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteCatalog($catalogId){
        $this->query = "delete from catalog where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $catalogId);
        $statement->execute();
    }

    public function insertCatalog($catalog){
        $query = "insert into catalog (name, img_path, pdf_path) values (:name, :img_path, :pdf_path)";
        $statement = $this->conn->prepare($query);
        
        $name = $catalog->getName();
        $image = $catalog->getImage();
        $pdf = $catalog->getPDF();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":img_path", $image);
        $statement->bindParam(":pdf_path", $pdf);
        $statement->execute();
    }

}