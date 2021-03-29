<?php
    include_once 'product.php';
    require_once 'productMapper.php';

    session_start();

    if(isset($_POST['insert'])){
        $product = new ProductLogic($_POST); 
        $product->insertData();
    }

    class ProductLogic {
        private $category="";
        private $lowerCategory="";
        private $name="";
        private $price="";
        private $image="";

        function __construct($formData){
            $this->category=$formData['prod-category'];
            $this->lowerCategory=$formData['prod-lowerCategory'];
            $this->name= $formData['prod-name'];
            $this->price= $formData['prod-price'];
            $this->image=$formData['prod-image'];
        }

        public function insertData(){
            $product = new Product($this->name, $this->category, $this->$lowerCategory, $this->price,$this->image);
            $mapper = new ProductMapper();
            $mapper->insertProduct($product);
            header("Location:../views/index.php");
        }
    }