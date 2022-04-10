<?php
class Book {
 
  public $title = "Title";
  public $author = "Author";
  public $price = 0;

  function getBook () {
    echo "Title:".$this->title." Author:".$this->author." Price:".$this->price;
  }  
}

$book1 = new Book();
$book2 = new Book();

$book1->getBook();

$book2->title = 'PHP objects';
$book2->author = 'Zandstra';
$book2->price = 100;

$book2->getBook();
