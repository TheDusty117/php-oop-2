<?php
//inserisco il file Product, 
require_once __DIR__ . '/Product.php';

//ora voglio estendere la classe prodotti con Animali
class Animal extends Product
{
  //salvo la variabile che mi serve, ovvero tipo di animale
  public $animalType;

  //costrutto identico a quello di product, MA CON LA NUOVA VARIABILE animaltype
  public function __construct($productName, $price, $description, $animalType)
  {
    //si usa il parent come reminder del costrutto product.
    parent::__construct($productName, $price, $description)
    //poi si gestisce il dato in piu' nella classe derivata, ovvero Animal dove siamo ora
    $this->animalType = $this->getAnimalType($animalType);
  }




}



?>