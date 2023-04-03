<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $ingredients;

  public function __construct($name, $price, $description, $ingredients)
  {
    parent::__construct($name, $price, $description);
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