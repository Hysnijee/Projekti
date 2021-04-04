<?php
    include_once 'catalog.php';
    require_once 'catalogMapper.php';

    session_start();

    if(isset($_POST['insert'])){
        $product = new CatalogLogic($_POST); 
        $product->insertData();
    }

    class CatalogLogic {
        private $name="";
        private $image="";
        private $pdf="";

        function __construct($formData){
            $this->name= $formData['c-name'];
            $this->image=$formData['c-image'];
            $this->pdf=$formData['c-pdf'];
        }

        public function insertData(){
            $catalog = new Catalog($this->name, $this->image, $this->pdf);
            $mapper = new CatalogMapper();
            $mapper->insertCatalog($catalog);
            header("Location:../views/catalogs.php");
        }
    }