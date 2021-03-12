<?php

class Article{
    private $type;
    private $description;

    public function __construct($type, $description){
        $this->type = $type;
        $this->description = $description;
    }
    
    public function getType(){
        return $this->type;
    }

    public function getDescription(){
        return $this->description;
    }
}