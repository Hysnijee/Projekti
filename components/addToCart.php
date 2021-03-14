<?php

include_once 'productMapper.php';
include_once 'product.php';

if(isset($_GET['name']) && isset($_GET['id'])){
    $productId = $_GET['id'];
    $name = $_GET['name'];
    $image = $_GET['img_path'];
    $price = $_GET['price'];
    $product = new Product($name, "", "", $image, $price);
    $mapper = new ProductMapper();
    $mapper->getProductByID($product, $productId);
    header("Location:../views/cart.php");
}