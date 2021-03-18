<?php

include_once 'productMapper.php';
include_once 'product.php';

session_start();

if(isset($_POST['shporta'])){
    $addOrder = new Order($_POST);
    $addOrder->insertData();
}
else{
    header("Location:../views/skincare.php");
}

class Order{
    private $name = "";
    private $price = "";

    function __construct($formData){
        $this->name = $formData['name'];
        $this->price = $formData['price'];
    }

    public function insertOrder(\Order $order){
        $query = "insert into orders (name, price) values (:name, :price)";
        $statement = $this->conn->prepare($query);

        $name = $order->getName();
        $price = $order->getPrice();

        $statement->bindParam(":name", $name);
        $statement->bindParam(":price", $price);
        $statement->execute();
    }

    public function insertData(){
        $order = new Order ($this->name, $this->price);
        $mapper = new OrderMapper();
        $mapper->insertOrder($order);
        header("Location:../views/cart.php");
    }
}