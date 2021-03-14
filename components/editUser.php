<?php

include_once 'userMapper.php';
include_once 'simpleUser.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $city = $_GET['city'];
    $address = $_GET['address'];
    $simpleUser = new SimpleUser($username, "", 0, $email, $name, $lastname,  $city, $address, "");
    $mapper = new UserMapper();
    $mapper->editUser($simpleUser, $userId);
    header("Location:../views/dashboard.php");
}
