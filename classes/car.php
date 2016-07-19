<?php


//we're creating a 'car' object or class
class Car {
  //create properties
  //access identifier: public, private, or protected
  //good practice: make them private and create a public method to access them
  private $make;
  private $model;
  private $color;

  //constructor: function/method that happens when class (object) is created
  //should be first method/function

  public function __construct($make, $model, $color){
    echo 'car created<br />';
    $this->make = $make;
    $this->model = $model;
    $this->color = $color;
  }

  public function getColor(){
    return $this->color.'<br />';
  }

  //create a method (this part came before constructor in tutorial)
  //will use constructor to set properties instead
  // public function start(){
  //   echo 'Car is starting...<br />';
  // }
  //
  // public function setMake($make){
  //   $this->make = $make;
  // }
  //
  // public function getMake(){
  //   return $this->make;
  // }

}

?>
