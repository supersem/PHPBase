<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  private function privateIntro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
  
  protected function protectedIntro() {
    return $this->privateIntro();
  }
  
  public function publicIntro() {
    return $this->protectedIntro();
  }
}

class Strawberry extends Fruit {
  public function publicMessage() {
    echo "This is {$this->name} and the color is {$this->color}.";
  }
  
  public function protectedMessage() {
    return $this->protectedIntro();
  }
  
  public function privateMessage() {
    return $this->privateIntro();
  }  
}

$fruit = new Fruit("Apple", "yellow");
$fruit->privateIntro(); //ERROR
$fruit->protectedIntro();//ERROR
$fruit->publicIntro();//OK

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->publicMessage();//OK
$strawberry->protectedMessage();//OK
$strawberry->privateMessage();//ERROR