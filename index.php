<?php

//$number = 5;
//
//$location = 'bag';
//
//$output = 'There are %d oranges in the %s';
//echo sprintf($output, $number, $location);

//$ages = [134, 57, 26, 'seventeen'];
//$ages[0] = 143;
//var_dump($ages);
//
//echo '<br>';
//echo '<br>';
//$agesAssoc= ['Greg' => 134, 'Ben' => 57, 'Clyde' => 26, 'Mark' => 'seventeen'];
//
//var_dump($agesAssoc);

$numero = 3;

$text = 'happy';

$truefalse = 1;
define('HELLO', true);

$list = [1, 2, 3];
$listAssoc = ['Bubble' => 2, "Blossom" => 4, "Buttercup" => 5];
echo '<br>';
echo '<h1>String Concatenation</h1>';
echo  'I have ' . $numero . ' cats' . ' and they are ' . $text . '. It is' . HELLO;


echo '<br>';
echo '<br>';

echo '<h1>String interpolation</h1>';
echo "I have $numero cats and they are $text. It is " . HELLO;

echo '<br>';
echo '<br>';
echo '<br>';

var_dump($numero);
echo '<br>';
$numero = (string)$numero;
var_dump($numero);
$numero = (int)$numero;
echo '<br>';
var_dump($numero);
echo '<br>';
echo '<br>';
var_dump($text);
echo '<br>';
var_dump($list);
echo '<br>';
echo '<br>';
echo "I have $list[2] cats and they are $text. It is true";
echo '<br>';
echo '<br>';
echo  "The first one is Bubble. She is " . $listAssoc['Bubble'] . " years old.";
echo '<br>';
echo  "The second one is Blossom. She is " . $listAssoc['Blossom'] . " years old.";
echo '<br>';
echo  "The last one is Buttercup. She is " . $listAssoc['Buttercup'] . " years old.";
echo '<br>';
echo '<br>';
var_dump($truefalse);
echo '<br>';
$truefalse = (string)$truefalse;
var_dump($truefalse);
$truefalse = (bool)$truefalse;
echo '<br>';
var_dump($truefalse);
echo '<br>';

