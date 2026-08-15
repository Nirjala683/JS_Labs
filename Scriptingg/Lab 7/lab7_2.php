<?php

class Demo
{
    public function __call($name, $arguments)
    {
        echo "Method Name: ".$name."<br>";
        echo "Arguments: ";
        print_r($arguments);
    }
}

$obj = new Demo();

$obj->add(10,20);

?>