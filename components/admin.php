<?php

class Admin extends Person {

    public function __construct($usernam, $password, $role){
        parent::__construct($usernam, $password, $role);
    }

    public function setSession(){
        $_SESSION['role'] = 1;
        $_SESSION['roleName'] = 'AdminUser';
    }

    public function setCookie(){
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getRole(){
        return $this->role;
    }
}