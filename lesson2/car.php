<?php
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro(); 
}

class Audi extends Car {
  public function intro() {
    return "Choose German quality! I'm an $this->name!"; 
  }
}

class Volvo extends Car {
  public function intro() {
    return "Proud to be Swedish! I'm a $this->name!"; 
  }
}

$audi = new audi("Audi");
echo $audi->intro();

$volvo = new volvo("Volvo");
echo $volvo->intro();
