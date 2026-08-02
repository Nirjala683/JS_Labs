<?php
class Animal
{
    function sound()
    {
        echo "Animal makes sound.<br>";
    }
}

class Dog extends Animal
{
    function bark()
    {
        echo "Dog barks.";
    }
}

$d = new Dog();

$d->sound();
$d->bark();
?>