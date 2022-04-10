<?php
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
