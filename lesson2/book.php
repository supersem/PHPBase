<?php

require __DIR__ . '/../vendor/autoload.php';

use Cocur\Slugify\Slugify;

class Book { 
  function __construct($title = "", $author = "", $price = 0) {
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;
  }
  
  function getBook() {
   echo "Title:".$this->title." Author:".$this->author." Price:".$this->price;
  }
  
}

$book1 = new Book();
$book2 = new Book('PHP objects', 'Zandstra', 100);

$book1->getBook();
$book2->getBook();



$slugify = new Slugify();

$data = $slugify->slugify('Hello World, this is a long sentence and I need to make a slug from it!');
echo $data;

function my_error_handler($str) {
  if (!strpos($str, "-")) {  
    throw new Exception("Data should includes '-'");  
  }  
  return true;  
}  

try {  
  my_error_handler($data);  
  echo "If you see this text, the passed data includes '-'";  
}  
 
catch (Exception $e) {  
  echo 'Exception Message: ' .$e->getMessage();  
}  