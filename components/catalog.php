<?php

class Catalog{
    private $name;
    private $image;
    private $pdf;

    public function __construct($name, $image, $pdf){
        $this->name=$name;
        $this->image=$image;
        $this->pdf=$pdf;
    }

    public function getName(){
        return $this->name;
    }

    public function getImage(){
        return $this->image;
    }

    public function getPDF(){
        return $this->pdf;
    }
}