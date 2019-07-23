<?php

function doThing (string $name, int $age = 30 ){
    echo $name . ' is ' . $age;
}

//$age parameter is optional.
doThing('Felix', 23);
echo '<br>';
//$age parameter has default value. if it doesn't get passed any value in, it will print default value.
doThing('Matt');