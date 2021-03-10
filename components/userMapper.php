<?php
require_once 'databaseConfiguration.php';

class UserMapper extends DatabasePDOConfiguration{

    private $conn;
    private $query;

    public function __construct(){
        $this->conn = $this->getConnection();
    }


    public function getUserByUsername($username){
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers(){
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\SimpleUser $user){
        $query = "insert into user (fullname, email, username, password, city, address, ccNo, role) values (:fullname, :email, :username, :pass, :city, :address, :ccNo, :role)";
        $statement = $this->conn->prepare($query);
        
        $name = $user->getName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $city = $user->getCity();
        $address = $user->getAddress();
        $ccNo = $user->getCcNo();
        $pass = md5($user->getPassword());
        $role = $user->getRole();

        $statement->bindParam(":fullname", $name);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":city", $city);
        $statement->bindParam(":address", $address);
        $statement->bindParam(":ccNo", $ccNo);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId){
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    public function getUserByID($userId){
        $this->query = "select * from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}