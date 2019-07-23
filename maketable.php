<?php

$tableNum = [1, 2, 3, 4, 5, 6, 7];
$tableNumTwo = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$tableNumThree = ['Train', 'Train', 'Train', 'Train', 'Train', 'Train', 'No-Train'];

$numOneTwoCombined = array_combine($tableNum, $tableNumTwo);

print_r($numOneTwoCombined);

echo '<br>';
echo '<br>';

//foreach($numOneTwoCombined as $num => $value) {
//    echo "<table><tr><th>$num</th></tr><tr><td>$value</td></tr></table>";
//}
//
//foreach($tableNumTwo as $numTwo) {
//    echo "<tr><td>$numTwo</td></tr>";
//}
//
//foreach($tableNumThree as $numThree) {
//    echo "<tr><td>$numThree</td></tr>";
//}

//function makeTable($arrayOne, $arrayTwo, $arrayThree) {
//    return ( '<table>' .
//        '</table>'
//    );
//}
//
//    print_r('<table><tr><th>' .
//        for($i = 0; $i < count($tableNum); $i++ ) {
//            echo
//        } . '</th></tr></table>');
//
//
//
for($i = 0; $i < count($tableNum); $i++ ) {
    echo "<table><tr><th>$i</th></tr></table>";
    foreach($tableNumTwo as $num){
        echo "<tr><td>$num</td></tr>";
    }
}













