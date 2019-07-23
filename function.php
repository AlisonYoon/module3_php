<?php

function doThing() {
    echo 'I\'m in a function';
    echo '<br>';
}
for ($x=0; $x<10; $x++) {
    doThing();
}

echo '<br>';
echo '<br>';

function randomNumber() {
    $numbers = [1,2,3,4,5,6];
    shuffle($numbers);
    return array_pop($numbers);
}

$result = randomNumber();
echo $result;

echo '<br>';
echo '<br>';

//another way
function randomNumbers($options) {
    shuffle($options);
    return array_pop($options);
}

$numbers = [1, 2, 3, 4, 5, 6];

echo randomnumbers($numbers);
echo '<br>';
echo '<br>';

$houseNumbers = [21, 23, 24, 27, 29, 31];
echo randomNumbers($houseNumbers);
echo '<br>';
echo '<br>';

//parameter type hinting
function randomNumbersa(array $options): int { //this can only return int. if it's not int, it refuses to return.
    shuffle($options);
    return array_pop($options);
}

//multiple parameters
function randomNumbersb(array $options, int $key) {
    shuffle($options);
    return $options[$key];
}

$numbers = [1, 2, 3, 4, 5, 6];

$place = 5;

echo randomNumbersb($numbers, $place);
echo '<br>';

var_dump($numbers);