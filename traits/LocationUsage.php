<?php

trait LocationUsage {
  public $indoor;
  public $outdoor;

function __construct($indoor, $outdoor)
{
  $this->indoor = $indoor;
  $this->outdoor = $outdoor;

}




public function getIndoor(){
  return $this->$indoor . '<i class="fa-solid fa-tree-deciduous"></i>';
}

public function setIndoor($indoor){
  $this->$indoor;
  return $this;
}

public function getOutdoor(){
  return $this->$indoor . '<i class="fa-solid fa-house"></i>' ;
}

public function setOutdoor($outdoor){
  $this->$outdoor;
  return $this;
}

}