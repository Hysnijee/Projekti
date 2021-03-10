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
    private $username="";
    private $email="";
    private $password="";
    private $address="";
    private $ccNo="";
    private $city="";

    function __construct($formData){
        $this->name=$formData['register-name'];
        $this->username=$formData['register-username'];
        $this->email=$formData['register-email'];
        $this->password=$formData['register-pass'];
        $this->address=$formData['register-add'];
        $this->ccNo=$formData['register-ccNo'];
        $this->city=$formData['register-city'];
    }

    public function insertUser(\SimpleUser $user){
        $query = "insert into user (name, username, email, password, role) values (:name,:username, :email, :pass,:role)";
        $statement = $this->conn->prepare($query);
        
        $name = $user->getName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $pass = md5($user->getPassword());
        $role = $user->getRole();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function insertData(){
        $user = new SimpleUser($this->username, $this->password, 0, $this->email, $this->name, $this->city, $this->address, $this->ccNo);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/login.php");
    }
}