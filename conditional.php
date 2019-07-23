<?php

//$language = 'es';
//
//$loggedInCount = 45;
//
//if( $language === 'fr'|| $language === 'es') {
//    echo 'Please log in';
//    $loggedInCount %= 2;
//}
//echo '<br>';
//echo $loggedInCount;


$bakeries = 500;
$happinessIndex= 50;
$moveHere = true;

//if($bakeries <= 1) {
//    echo 'Leave this city';
//} elseif($bakeries < 5) {
//    echo 'Pretty ok city';
//} else {
//    echo 'Lots of cakes, move here';
//}

if($bakeries > 20) {
    $moveHere = true;
} else {
    $moveHere = false;
}

$moveHere = ($bakeries > 20) ? true: false;
$moveHere = ($bakeries > 20) ?: false;

if($moveHere) {
    echo 'Do it';
} else {
    echo 'Stay where you are';
}

//switch ($bakeries) {
//    case $bakeries <= 0 ;
//    echo 'Do not move here, zero bakeries';
//    break;
//    case 5;
//    echo 'Do move here, good number';
//    break;
//    default;
//    echo 'Do not recognise this';
//}
//

echo '<br>';
echo '<br>';
echo '<br>';

$name = null;
$userName = $name ?: 'there';

//if($name) {
//    $userName = $name;
//} else {
//    $userName = 'there';
//}
echo 'Hey ' . $userName;