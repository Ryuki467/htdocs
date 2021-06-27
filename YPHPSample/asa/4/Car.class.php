<?php 
class Car{
  private $name;
  private $maker;
  
  function __construct($name, $maker){
    $this->name = $name;
    $this->maker = $maker;
  }
  
  public function getName(){
    return $this->name;
  }
  public function setName($name){
    $this->name = $name;
  }
  public function getMaker(){
    return $this->maker;
  }
  public function setMaker($maker){
    $this->maker = $maker;
  }
}
