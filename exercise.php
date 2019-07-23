<?php

$randomNum = rand(10, 100);

$resultNum = ($randomNum > 50)?  true : false;

//if($resultNum) {
//    echo "The result number $randomNum is <h3>bigger</h3> than 50";
//} else {
//    echo "The result number $randomNum is <h3>smaller</h3> than 50";
//}
//
//echo '<br>';
//echo '<br>';
//echo '<br>';

switch(true) {
    case ($randomNum > 50):
        echo  "The result number $randomNum is <h3>bigger</h3> than 50";
        break;
    case ($randomNum < 50):
        echo "The result number $randomNum is <h3>smaller</h3> than 50";
        break;
    default:
        echo "The result number is 50";
}

//echo '<br>';
//echo '<br>';
//echo '<br>';
//
//$coolNum = rand(1, 10);
//$hotNum = rand(1, 10);
//
//if($coolNum > $hotNum) {
//    echo "This is cool!";
//} elseif($coolNum < $hotNum) {
//    echo "This is hot!";
//} else {
//    echo "It's just right!";
//}
