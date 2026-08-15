<?php
class Car
{
    public $brand = "BMW";

    function show()
    {
        echo "Car Brand: " . $this->brand;
    }
}

$c = new Car();
$c->show();
?>