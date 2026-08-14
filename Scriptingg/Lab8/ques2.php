<?php
class Book
{
    public $title;
    public $author;
    public $price;

    function setDetails($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    function displayDetails()
    {
        echo "Title: $this->title <br>";
        echo "Author: $this->author <br>";
        echo "Price: Rs. $this->price <br><br>";
    }
}

$b1 = new Book();
$b1->setDetails("PHP Basics", "Yuja", 500);

$b2 = new Book();
$b2->setDetails("OOP in PHP", "Rohu", 600);

$b1->displayDetails();
$b2->displayDetails();
?>