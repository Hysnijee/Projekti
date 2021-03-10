<?php
include_once 'user.php';

class SimpleUser extends Person{
    private $email;
    private $name;
    private $city;
    private $address;
    private $cc;
    private $ccNo;
    
    public function __construct($username, $password, $role, $email, $name, $city, $address, $ccNo){
        parent::__construct($username, $password, $role);
        $this->email = $email;
        $this->name = $name;
        $this->city = $city;
        $this->address = $address;
        $this->ccNo = $ccNo;
    }

    public function setSession(){
        $_SESSION['role'] = 0 ;
        $_SESSION['roleName'] = 'SimpleUser';
    }

    public function setCookie(){
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getName(){
        return $this->name;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCity(){
        return $this->city;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getCcNo(){
        return $this->ccNo;
    }

    public function getRole(){
        return $this->role;
    }
}