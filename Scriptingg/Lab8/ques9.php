<?php
class Counter
{
    static $count = 0;

    function __construct()
    {
        self::$count++;
    }

    static function getCount()
    {
        echo "Total Objects Created: " . self::$count;
    }
}

$c1 = new Counter();
$c2 = new Counter();
$c3 = new Counter();
$c4 = new Counter();
$c5 = new Counter();

Counter::getCount();
?>