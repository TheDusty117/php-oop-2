<?php


class Category {
  public $category;

  function __construct($category)
  {
    $this->category = $category;
  }

  public function getCategory(){
    if($this->category == 'cane'){
      return $this->category . '<i class="fa-solid fa-dog"></i>' ;
    } else {return $this->category . '<i class="fa-solid fa-cat"></i>' ; }
  }

  public function setCategory($category){
    $this->category = $category;
    return $this;
  }

}

?>