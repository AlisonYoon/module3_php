<?php

/**
*Create a function that takes a number and multiplies it by itself
*and adds the second parameter then returns the value.
*Second parameter must default to 0. Ensure it is correctly commented.
*/

// function challenge( $num, $value = 0) { // second @param is an optional, has default value of 0.
//     return $num * $num + $value;
// }
// echo challenge(2, 1);

// echo '<br>';
// echo '<br>';

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



/*I should make an entire card deck array - an associative array that looks like this:
$deck = [$suits[0] => $ranks[0], $suits[0] => $ranks[1], $suits[0] => $ranks[2], ... $suits[0] => $ranks[12],
$suits[1] => $ranks[0], $suits[1] => $ranks[1], $suits[1] => $ranks[2], ... $suits[1] => $ranks[12],
$suits[2] => $ranks[0], $suits[2] => $ranks[1], $suits[2] => $ranks[2], ... $suits[2] => $ranks[12],
$suits[3] => $ranks[0], $suits[3] => $ranks[1], $suits[3] => $ranks[2], ... $suits[3] => $ranks[12],
];


NOPE, this cannot work. An associative array can't have multiple of the same key.
*/

/*
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
*/

//First approach is  WRONG


/* Let's make an array that has 4 of each and every rank item. Because what kind of suit it is doesn't affect the point.
Something like this :
$deck = ['ace', 'ace', 'ace', 'ace', 2, 2, 2, 2, ... 'jack','jack', 'jack', 'jack'];
 */
// $newArray = array();

// function cardDeck($rank) {
//    for($i = 0; $i < count($rank); $i++) {
//        $addedItems = array_fill(0, $i+4, $rank[$i]);
//    }
//    return $addedItems;
// }

// function cardDeck($rank) {
//     for($i = 0; $i < count($rank); $i++) {
//         $newArray = array();
//     }
//     return $newArray;
// }
// $result = cardDeck($ranks);
// var_dump($result);

/* 
Third approach is to use multidimensional array.
 */

// $suits = ['clubs', 'diamonds', 'hearts', 'spades'];
// $ranks = [
//     'ace' => ['point' => 11, 'nb' => 4],
//     2 => ['point' => 2, 'nb' => 4],
//     3 => ['point' => 3, 'nb' => 4],
//     4 => ['point' => 3, 'nb' => 4],
//     5 => ['point' => 5, 'nb' => 4],
//     6 => ['point' => 6, 'nb' => 4],
//     7 => ['point' => 7, 'nb' => 4],
//     8 => ['point' => 8, 'nb' => 4],
//     9 => ['point' => 9, 'nb' => 1],
//     10 => ['point' => 10, 'nb' => 4],
//     'king' => ['point' => 10, 'nb' => 4],
//     'queen' => ['point' => 10, 'nb' => 4],
//     'jack' => ['point' => 10, 'nb' => 4]
// ];

// function pickCard(array $cards) {
//     rand(0, count($cards))
// }

//Third approach is not for this simplified version of Blackjack, it's more for original rule.

/*
Fourth approach : let's dynamically generate an array
*/ 
$suits = ['clubs', 'diamonds', 'hearts', 'spades'];
$ranks = [
    'ace' => 11,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10,
    'king' => 10,
    'queen' => 10,
    'jack' => 10
];


$mainDeck = [];

foreach($ranks as $card => $point) {
    foreach($suits as $suit) {
        $deckKey = $card . '-' . $suit; 
        $mainDeck[$deckKey] = $point;
    }
}

function pickCards(array $cards){
    // Random Key var : pick random cards
    $rdk = array_rand($cards);
    $pickedCardPoint = $cards[$rdk];

    return ['card' => $rdk, 'point' => $cards[$rdk]];
}

function blackJack($mainDeck){
    for($j = 0; $j < 2; $j++) {
        $cardPicked = pickCards($mainDeck);
        $player1[] = $cardPicked;
        unset($mainDeck[$cardPicked['card']]);

        $cardPicked = pickCards($mainDeck);
        $player2[] = $cardPicked;
        unset($mainDeck[$cardPicked['card']]);
    }
    var_dump($player1);
    var_dump($player2);
    var_dump($mainDeck);

}

blackJack($mainDeck);