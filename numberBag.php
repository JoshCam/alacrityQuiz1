<?php


$num = 100;
$oddNumbers = [];

for ($i=0; $i < $num; $i++) { 
    if ($i % 2 != 0) {
        $oddNumbers[] = $i;
    }
}

$sumOfBag = array_sum($oddNumbers);
$size = "";

if ($sumOfBag > 2000) {
    $size = "BIG";
} elseif ($sumOfBag == 2000) {
    $size = "MEH";
} elseif ($sumOfBag < 2000) {
    $size = "SMALL";
}

echo "The size of your bag is " . $size;

// print("<pre>".print_r($oddNumbers,true)."</pre>");

// NB - bonus points are available if you organise your code into a class with an appropriate name & method etc.