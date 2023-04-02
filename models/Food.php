<?php
require_once __DIR__ . '/Product.php';



class Food extends Product
{
  public $ingredients;

  public function __construct($name, $price, $description, $ingredients)
  {
    parent::__construct($name, $price, $description);
    $this->ingredients = $this->getFood($ingredients);
  }

  private function getFood($ingredients)
  {
    if ($ingredients === ''){
      return 'nessuna info disponibile su prodotto';
    }
    return 'Categoria: ' . $ingredients;
  }
  public function setFood($ingredients)
  {
    $this->ingredients = $ingredients;
  }

}






?>