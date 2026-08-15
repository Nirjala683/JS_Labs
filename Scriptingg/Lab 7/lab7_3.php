<?php

class Student
{
    public $name, $roll;

    function __construct($name, $roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }
}

class Result extends Student
{
    public $marks;

    function __construct($name, $roll, $marks)
    {
        parent::__construct($name, $roll);
        $this->marks = $marks;
    }

    function display()
    {
        echo "Name: ".$this->name."<br>";
        echo "Roll: ".$this->roll."<br>";
        echo "Marks: ".$this->marks."<br><br>";
    }
}

$marks = [85, 72, 91, 68, 79, 88, 75, 82, 90, 77, 84, 69, 93, 80, 71, 86, 78, 95, 73, 89];

for($i = 1; $i <= 20; $i++)
{
    $obj = new Result("Student".$i, $i, $marks[$i-1]);
    $obj->display();
}

?>