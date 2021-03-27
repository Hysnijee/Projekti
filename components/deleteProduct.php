<?php
include_once 'productMapper.php';
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $mapper = new ProductMapper();
    $mapper->deleteProduct($productId);
    header("Location:../views/index.php");
}
