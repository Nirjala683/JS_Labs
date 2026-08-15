<?php
class Laptop
{
    public $brand;
    public $price;

    function __construct()
    {
        echo "Laptop object created.<br>";
    }

    function displayDetails($brand, $price)
    {
        $this->brand = $brand;
        $this->price = $price;

        echo "Brand: $this->brand <br>";
        echo "Price: Rs. $this->price <br>";
    }

    function __destruct()
    {
        echo "<br>Laptop object destroyed.";
    }
}

$l1 = new Laptop();
$l1->displayDetails("ASUS", 95000);
?>