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
    

        public function __construct($fromData){
            var_dump ($fromData['username']);
            $this->username=$fromData['username'];
            $this->password=$fromData['password'];
        }

        public function verifyData(){
            if($this->variablesNotDefinedWell($this->username, $this->password)){
                echo "3";
                //header("Location:../views/login.php");
            }
            else if ($this->usernameAndPasswordCorrect($this->username, $this->password)){
                echo "1";
               /* header("Location:../views/index.php");*/
            }
            else{
                echo "2";
                //header("Location:../views/login.php");
            }
        }

        private function variablesNotDefinedWell($username, $password){
            var_dump ($username);
            var_dump($password);
            if(empty($username) || empty($password)){
                return true;
            }
            return false;
        }

        private function usernameAndPasswordCorrect($username, $password){
            $mapper = new UserMapper();
            $user = $mapper->getUserByUsername($username);

            echo 'HII';
            
            if ($user == null || count($user) == 0) return false;
            echo 'HELLO';
            var_dump(password_verify($password, $user['password']));
            echo $password;
            echo $user['password'];
            //else if (password_verify($password, $user['password'])) {
            //     if ($user['role'] == 1) {
            //         $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
            //         $obj->setSession();
            //     } else {
            //         $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], $user['email'], $user['name'], $user['lastname'], $user['city'], $user['address'], $user['ccNo']);
            //         $obj->setSession();
            //     }
            //     return true;
            // }
            // else{
            //     return false;
            // }
        }
    }
?>