<?php

$loggedIn = false;
do {
    echo 'do while';
} while($loggedIn);

while($loggedIn) {
    echo 'while';
}

echo '<br>';
echo '<br>';

// Nested Loop
$cities = ['Birmingham', 'Bristol', 'Bath'];
$features = ['library', 'town hall', 'swimming pool', 'Cathedral'];

//foreach ($cities as $city) {
//    echo 'Starting to talk about ' . $city;
//    echo '<br>';
//    foreach ($features as $feature) {
//        echo $city . 'should have a ' . $feature;
//        echo '<br>';
//    }
//    echo 'Finished talking about ' . $city;
//    echo '<br>';
//}


//another way,

foreach ($cities as $city) {
    echo 'Starting to talk about ' . $city;
    echo '<br>';
    foreach ($features as $feature) {
        if (array_search($feature, $features) === 0) {
            echo $city . ' should have a ' . $feature;
        } elseif(array_search($feature, $features) === sizeof($features) - 1) {
            echo 'and a ' . $feature . '.';
        } else {
            echo ', a ' . $feature;
        }
    }
    echo '<br>';
    echo 'Finished talking about ' . $city;
    echo '<br>';
    echo '<br>';
}