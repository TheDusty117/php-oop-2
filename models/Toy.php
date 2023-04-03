<?php
require_once __DIR__ . '/Product.php';



class Toy extends Product
{
  public $toyType;

  public function __construct($img, $name, $price, $description, $toyType, $category)
  {
    parent::__construct($img, $name, $price, $description, $category);
    $this->toyType = $toyType;
  }


  public function getToy(){
    if ($this->toyType === ''){
      return 'no info disponibili';
    }
    return 'Giocattolo: ' . $this->toyType;
  }

  public function setToy($toyType){
    $this->toyType = $toyType;
    return $this;
  }
 

}

//regola generale ***
//variabili protected
//metodi public




?>