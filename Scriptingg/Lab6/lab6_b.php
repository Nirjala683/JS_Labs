<?php
$num = 11;
$flag = 1;

if ($num <= 1) {
    $flag = 0;
}

for ($i = 2; $i <= $num/2; $i++) {
    if ($num % $i == 0) {
        $flag = 0;
        break;
    }
}

if ($flag == 1)
    echo "$num is a Prime Number";
else
    echo "$num is Not a Prime Number";
?>