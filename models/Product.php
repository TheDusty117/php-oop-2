<?php

class Product {
  public $name;
  public $price;
  public $description;

  function __construct($name, $price, $description)
  {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;

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