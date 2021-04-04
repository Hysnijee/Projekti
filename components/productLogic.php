<?php
    include_once 'product.php';
    require_once 'productMapper.php';

    session_start();

    if(isset($_POST['insert-product'])){
        $product = new ProductLogic($_POST); 
        $product->insertData();
    }

    class ProductLogic {
        private $name="";
        private $category="";
        private $lowercategory="";
        private $price="";
        private $image="";

        function __construct($formData){
            $this->name= $formData['p-name'];
            $this->image=$formData['p-image'];
            $this->category= $formData['p-category'];
            $this->lowercategory=$formData['p-lowercategory'];
            $this->price= $formData['p-price'];
        }

        public function insertData(){
            $product = new Product($this->name, $this->category, $this->lowercategory, $this->image, $this->price);
            $mapper = new ProductMapper();
            $mapper->insertProduct($product);
            header("Location:../views/homepage.php");
        }
    }