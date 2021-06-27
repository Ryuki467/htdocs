<?php
class Book{
    private $price;
    public function __construct($price){
        $this->price = $price;
    }
}

class BookCart{
    private $books = [];
    private $listeners = [];
    public function addItem(Book $book){
        $this->books[$book->code] = $book;
    }
    
    public function getItems(){
        return $this->books;
    }
}