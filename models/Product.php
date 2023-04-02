<?php

class Product {
  public $productName;
  public $price;
  public $description;

  public function __construct($productName, $price, $description)
  {
    $this->productName = $productName;
    $this->price = $price;
    $this->description = $description;

  }


}





?>