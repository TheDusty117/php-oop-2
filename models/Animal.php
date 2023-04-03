<?php


class Animal {
  public $animalType;

  function __construct($animalType)
  {
    $this->animalType = $animalType;
  }

  public function getAnimalType(){
    return $this->animalType;
  }

  public function setAnimalType($animalType){
    $this->animalType = $animalType;
    return $this;
  }

}

?>