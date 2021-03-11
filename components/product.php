<?php 

class Product{
    private $name;
    private $category;
    private $lowerCategory;
    private $image;
    private $price;

    public function __construct($name, $category, $lowerCategory, $image, $price){
        $this->name=$name;
        $this->category=$category;
        $this->lowerCategory=$lowerCategory;
        $this->image=$image;
        $this->price=$price;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getLowerCategory(){
        return $this->lowerCategory;
    }

    public function getImage(){
        return $this->image;
    }

    public function getPrice(){
        return $this->price;
    }
}
