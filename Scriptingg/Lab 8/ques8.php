<?php
class Shape
{
    function draw()
    {
        echo "Drawing Shape<br>";
    }
}

class Circle extends Shape
{
    function draw()
    {
        echo "Drawing Circle<br>";
    }
}

class Rectangle extends Shape
{
    function draw()
    {
        echo "Drawing Rectangle<br>";
    }
}

class Triangle extends Shape
{
    function draw()
    {
        echo "Drawing Triangle<br>";
    }
}

$shapes = array(
    new Circle(),
    new Rectangle(),
    new Triangle()
);

foreach ($shapes as $shape)
{
    $shape->draw();
}
?>