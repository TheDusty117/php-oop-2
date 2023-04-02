<?php
require_once __DIR__ . '/Product.php';



class Toy extends Product
{
  public $toyType;

  public function __construct($name, $price, $description, $toyType)
  {
    parent::__construct($name, $price, $description);
    $this->toyType = $this->getToy($toyType);
  }

  private function getToy($toyType)
  {
    if ($toyType === ''){
      return 'nessuna info disponibile su prodotto';
    }
    return 'Giocattolo: ' . $toyType;
  }
  public function setToy($toyType)
  {
    $this->toyType = $toyType;
  }

}






?>