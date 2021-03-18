<?php
    include_once 'simpleUser.php';
    include_once 'Admin.php';

    session_start();

    if(isset($_POST['login'])){
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
            $this->name=$fromData['userN'];
            $this->password = $fromData['password'];
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
            $loggedInUser = null;
            $users = "Location:..web.sql"::getUsers();

            foreach($users as $user){
                if($user['userN'] == $username && $user['password'] == $password){
                    if($user['role'] == 1){
                        $loggedInUser = new Admin ($user['id'], $user['userN'], $user['password'], $user['role']);
                        break;
                    }
                    else {
                        $loggedInUser = new SimpleUser($user['id'], $user['userN'], $user['password'], $user['role']);
                        break;
                    }
                    return true;
                }
            }
            if($loggedInUser !=null){
                $loggedInUser->setSession();
                $loggedInUser->setCookie();
            }
            return $loggedInUser;
        }

        public function insertData(){
            $user = new SimpleUser($this->username, $this->password);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location:../views/index.php");
        }
    }


?>