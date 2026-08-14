<?php
class Vehicle
{
    function start()
    {
        echo "Vehicle Started<br>";
    }
}

class Car extends Vehicle
{
    function start()
    {
        echo "Car Started with Key.<br>";
    }
}

class Bike extends Vehicle
{
    function start()
    {
        echo "Bike Started with Self Start.<br>";
    }
}

$c = new Car();
$b = new Bike();

$c->start();
$b->start();
?>