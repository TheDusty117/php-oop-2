<?php
require_once __DIR__ . '/Product.php';



class Kennel extends Product
{
  public $kennelType;

  public function __construct($name, $price, $description, $kennelType)
  {
    parent::__construct($name, $price, $description);
    $this->kennelType = $kennelType;
  }


  public function getKennel(){
    if ($this->kennelType === ''){
      return 'no info disponibili';
    }
    return 'Cuccia: ' . $this->kennelType;
  }

  public function setKennel($kennelType){
    $this->kennelType = $kennelType;
    return $this;
  }
 

}

//regola generale ***
//variabili protected
//metodi public




?>