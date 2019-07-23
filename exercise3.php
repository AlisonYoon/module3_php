<?php

/**
*Create a function that takes a number and multiplies it by itself
*and adds the second parameter then returns the value.
*Second parameter must default to 0. Ensure it is correctly commented.
*/

function challenge( $num, $value = 0) { // second @param is an optional, has default value of 0.
    return $num * $num + $value;
}
echo challenge(2, 1);

echo '<br>';
echo '<br>';

/**
 *create a basic blackjack game based on the example*
 *
 * 1. 2 players
 * 2. 1 deck
 * 3. Each player gets 2 random cards
 * 4. Cards have points values:
 * Ace = 11
 * 2 = 2
 * 10 = 10
 * J = 10
 * Q = 10
 * K = 10
 *
 * 5. Winner has highest points unless points > 21, then they are the loser.
 *
*/


$suits = ['clubs', 'diamonds', 'hearts', 'spades'];
$ranks = ['ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'king', 'queen', 'jack'];

/*I should make an entire card deck array - an associative array that looks like this:
$deck = [$suits[0] => $ranks[0], $suits[0] => $ranks[1], $suits[0] => $ranks[2], ... $suits[0] => $ranks[12],
$suits[1] => $ranks[0], $suits[1] => $ranks[1], $suits[1] => $ranks[2], ... $suits[1] => $ranks[12],
$suits[2] => $ranks[0], $suits[2] => $ranks[1], $suits[2] => $ranks[2], ... $suits[2] => $ranks[12],
$suits[3] => $ranks[0], $suits[3] => $ranks[1], $suits[3] => $ranks[2], ... $suits[3] => $ranks[12],
];


NOPE, this cannot work. An associative array can't have multiple of the same key.
*/

function cardDeck($suit, $rank) {
    $i  =0;
    $j = 0;
    $newArray = array($suit[$i]=>$rank[$j]);

    for($i = 0; $i < count($suit); $i++) {
        for($j = 0; $j < count($rank); $j++) {
            return $rank[$j];
        }
        return $newArray[$suit[$i]] = $rank[$j];
    }
    return $newArray;
}

$result = cardDeck($suits, $ranks);
var_dump($result);


function blackJack($player1, $player2){

}
