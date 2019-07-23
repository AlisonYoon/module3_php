<?php

$numbers = [1,2,3,4,5,6,7,8];
$big = [8=> 9, 9 => 10];

//array_push($numbers, 9, 10);

//$result = array_merge($numbers, $big);

$result = $numbers + $big;

//$result = $numbers += array_fill(8, 1, 9);
//$result = $numbers += array_fill(9, 1, 10);

//$nineTen = array(8 => 9, 9 => 10);
//$result = array_replace($numbers, $nineTen);
//print_r($result);


print_r($result);
echo '<br>';
echo '<br>';

shuffle($result);

echo '<br>';

var_dump($result);

echo '<br>';

foreach($result as $num) {
    if($num % 2 == 1) {
        echo $num;
        echo '<br>';
    }
}

echo '<br>';
echo '<br>';
