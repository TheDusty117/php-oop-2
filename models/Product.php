<?php

class Product {
  public $img;
  public $name;
  public $price;
  public $description;
  public $category;

  function __construct($img, $name, $price, $description, $category)
  {
    $this->img = $img;
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->category = $category;


  }


//========================


  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
    return $this;
  }

//========================


  public function getPrice(){
    return 'Prezzo: $ ' . $this->price;
  }

  public function setPrice($price){
    $this->price = $price;
    return $this;
  }

//========================

  public function getDescription(){
    return $this->description;
  }

  public function setDescription($description){
    $this->description = $description;
    return $this;
  }

}





?>