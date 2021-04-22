<?php

include_once 'simpleUser.php';
require_once 'userMapper.php';

session_start();

if(isset($_POST['register-btn'])){
    $register = new Registration($_POST);
    $register->insertData();
}
else{
    header("Location:../views/register.php");
}

class Registration{
    private $name="";
    private $lastname="";
    private $username="";
    private $email="";
    private $password="";
    private $address="";
    private $ccNo="";
    private $city="";

    function __construct($formData){
        $this->name=$formData['register-name'];
        $this->lastname=$formData['register-lastname'];
        $this->username=$formData['register-username'];
        $this->email=$formData['register-email'];
        $this->password=$formData['register-pass'];
        $this->address=$formData['register-add'];
        $this->ccNo=$formData['register-ccNo'];
        $this->city=$formData['register-city'];
    }

    /*public function insertUser(\SimpleUser $user){
        $query = "insert into user (name, lastname, username, email, password, role) values (:name, :lastname, :username, :email, :pass,:role)";
        $statement = $this->conn->prepare($query);
        
        $name = $user->getName();
        $lastname = $user->getLastName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
        $role = $user->getRole();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }*/

    public function insertData(){
        $user = new SimpleUser($this->username, $this->password, 0, $this->email, $this->name, $this->lastname, $this->city, $this->address, $this->ccNo);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/index.php");
    }
}