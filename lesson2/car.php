<?php
abstract class Car {
  public static function initial($class)
  {
      return new $class();
  }

  abstract public function run();

  abstract public function intro(); 
}

class Audi extends Car {
  public function run()
    {
        echo 'Class Audi run.';
    }

  public function intro() {
    return "Choose German quality! I'm an Audi!"; 
  }
}

class Volvo extends Car {
  public function run()
    {
        echo 'Class Volvo run.';
    }
  public function intro() {
    return "Proud to be Swedish! I'm a Volvo!"; 
  }
}

$audi = Car::initial('Audi');
$audi->run();
echo $audi->intro();

$volvo = Car::initial('Volvo');
$volvo->run();
echo $volvo->intro();
