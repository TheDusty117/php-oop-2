<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $ingredients;

  public function __construct($img, $name, $price, $description, $ingredients, $category)
  {
    parent::__construct($img, $name, $price, $description, $category);
    $this->ingredients = $ingredients;
  }


  public function getFood(){
    if ($this->ingredients === ''){
      return 'no info disponibili';
    }
    return 'Ingredienti: ' . $this->ingredients;
  }

  public function setFood($ingredients){
    $this->ingredients = $ingredients;
    return $this;
  }
 

}



?>