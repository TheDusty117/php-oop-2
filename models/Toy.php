<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{

  public $toy;

  public function __construct($name, $price, $description, $toy)
  {
    parent::__construct($name, $price, $description);
    $this->toy = $this->getToy($toy);

  }

}






?>