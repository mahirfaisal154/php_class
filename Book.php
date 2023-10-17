<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    public function getIsbn() {
        return $this->isbn;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getAvailable() {
        return $this->available;
    }
    public function setAvailable($available) {
        $this->available = $available;
    }
    public function getCopy() {
        if ($this->available > 0) {
            $this->available--;
            return true;
        } else {
            return false;
        }
    }
    public function addCopy($num) {
        $this->available += $num;
        return true;
    }
    public function __toString() {
        return "Title: {$this->title}, Author: {$this->author}, ISBN: {$this->isbn}, Available Copies: {$this->available}";
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
?>