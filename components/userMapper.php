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
        $query = "insert into user (name, lastname, email, username, password, city, address, ccNo, role) values (:name, :lastname, :email, :username, :pass, :city, :address, :ccNo, :role)";
        $statement = $this->conn->prepare($query);
        
        $name = $user->getName();
        $lastname = $user->getLastName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $city = $user->getCity();
        $address = $user->getAddress();
        $ccNo = $user->getCcNo();
        $pass = md5($user->getPassword());
        $role = $user->getRole();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":city", $city);
        $statement->bindParam(":address", $address);
        $statement->bindParam(":ccNo", $ccNo);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function editUser(\SimpleUser $user, $id){
        $this->query = "update user set name=:name, lastname=:lastname, username=:username, email=:email, city=:city, address=:address where UserID=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $name = $user->getName();
        $lastname = $user->getLastName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $city = $user->getCity();
        $address = $user->getAddress();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":city", $city);
        $statement->bindParam(":address", $address);
        $statement->bindParam(":id", $id);
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