<?php
class Student
{
    public $name;

    function __construct($n)
    {
        $this->name = $n;
    }

    function display()
    {
        echo "Student Name: " . $this->name;
    }
}

$s1 = new Student("Niru");
$s1->display();
?>