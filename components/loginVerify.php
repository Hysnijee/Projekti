<?php
    include_once 'admin.php';
    include_once 'simpleUser.php';
    require_once 'userMapper.php';

    session_start();

    if(isset($_POST['loginbtn'])){
        $login = new Login ($_POST);
        $login->verifyData();
    }
    else{
        header("Location:../views/login.php");
    }

    class Login {
        private $username="";
        private $password="";
    

        function __constructor($fromData){
            $this->username=$fromData['username'];
            $this->password=$fromData['password'];
        }

        public function verifyData(){
            if($this->variablesNotDefinedWell($this->username, $this->password)){
                header("Location:../views/login.php");
            }
            else if ($this->usernameAndPasswordCorrect($this->username, $this->password) !=null){
                header("Location:../views/index.php");
            }
            else{
                header("Location:../views/login.php");
            }
        }

        private function variablesNotDefinedWell($username, $password){
            if(empty($username) || empty($password)){
                return true;
            }
            return false;
        }

        private function usernameAndPasswordCorrect($username, $password){
            $mapper = new UserMapper();
            $user = $mapper->getUserByUsername($username);
            if ($user == null || count($user) == 0){
                return false;
            } 
            else if (password_verify($password, $user['userPassword'])) {
                if ($user['role'] == 1) {
                    $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                    $obj->setSession();
                } else {
                    $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                    $obj->setSession();
                }
                return true;
            } 
            else{
                return false;
            } 
        }
    }
?>