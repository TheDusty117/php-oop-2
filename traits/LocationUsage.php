<?php

trait LocationUsage {
  public $indoor = false;
  public $outdoor = false;



  public function getIndoor(){
    if($this->indoor){
      return '<i class="fa-solid fa-house"></i>';
    } else {
      return '';
    }
      
  }

public function setIndoor($indoor){
  $this->indoor = $indoor;
}

public function getOutdoor(){
  if($this->outdoor){
    return '<i class="fa-solid fa-tree"></i>';
  } else {
    return '';
  }
    
}

public function setOutdoor($outdoor){
  $this->outdoor = $outdoor;
}

}