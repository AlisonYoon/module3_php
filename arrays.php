<?php

$exampleArray =  [0, 4, 5, ['string', 87]];

echo $exampleArray[3][1];

echo '<br>';

$multiDimensionalAssoc = [
    'abc' => 'Greggs',
    'def' => 'Cooplands',
    'ghi' => [
        1,
        5,
        7
    ]
];

echo $multiDimensionalAssoc['def'];

echo '<br>';

$daysArray = ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
$numbers = [70, 60, 435, 6, 7, 34, 50];
foreach ($daysArray as $day) {
    echo $day . '<br>';
}

echo '<br>';
echo '<br>';

$personal_details = ["Name" => 'John Doe', "Age" => 21, "Sex" => 'Male'];

foreach($personal_details as $category => $detail) {
    echo  $category . ': ' . $detail . '<br>';
 }

echo '<br>';
echo '<br>';

echo "\t what is\\ this \n what is \t this";
//You can only see this in the page source

echo '<br>';
echo '<br>';
echo $daysArray[5];
array_push($daysArray, 'Sun');

echo '<br>';
echo '<br>';
echo $daysArray[6];
echo '<br>';
echo '<br>';
rsort($daysArray);
var_dump($daysArray);
echo '<br>';
echo '<br>';
rsort($numbers);
var_dump($numbers);

echo '<br>';
echo '<br>';

$doesThirdIndexExist = in_array(60, $numbers);
if($doesThirdIndexExist) {
    echo "yes";
} else {
    echo "no";
}