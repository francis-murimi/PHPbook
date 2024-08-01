<?php

class Book{
    public $title;
    public $description;
    private $pages;
    public function __construct($title, $description, $pages){
        $this->title = $title;
        $this->description = $description;
        $this->pages = $pages;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getbook(){
        echo "The ". $this->title ." is a great book.\n It is about". $this->description ."\n and has ".$this->pages;
    }
}

$book = new Book('Evolution of Everything','How evolution works.',216);
$book->getTitle();
$book->getbook();
echo $book->title."\n";
echo $book->description."\n";
