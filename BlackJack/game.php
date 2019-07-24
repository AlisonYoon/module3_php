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

/**
 *Functions used
 *
 * foreach(NOT a function) : Dynamically generate card deck with $suits and $ranks array
 * deal($mainDeck) : Deal while getting rid of the cards that are picked from the deck
 * displayCards($mainDeck, $playerCards) : Print out each player's hand
 * winnerIs($playerCards) : Determine winner
 *
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

//this empty $mainDeck array will be dynamically generated for a deal
$mainDeck = [];

// Dynamically generate card deck with above $suits and $ranks array
function makeDeck($ranks, $suits, $mainDeck){
    foreach($ranks as $card => $point) {
        foreach($suits as $suit) {
            $deckKey = $card . '-' . $suit; //this is the key for new $mainDeck array
            $mainDeck[$deckKey] = $point; //$point is the value for each key in a new $mainDeck array
        }
    }
    return $mainDeck;
}

//Deal while getting rid of the cards that are picked from the deck
function deal($cards) {

    $playerCards = [];    //an empty array for 4 randomly picked cards
    for($j = 0; $j < 4; $j++) {
        //Randomly pick cards from the deck for players
        $rdk = array_rand($cards);    //This will be a random key from the $mainDeck array
        $pickedCardPoint = $cards[$rdk];    //This will be that random key's value(point)
        $cardPicked = ['card' => $rdk, 'point' => $pickedCardPoint];    //Store those above as an associative array

        $playerCards[] = $cardPicked;    //Make nested array that has 4 arrays which are picked cards
        unset($cards[$cardPicked['card']]);    //Remove picked cards from the deck
    }
    return $playerCards;
}

// Print out each player's hand
function displayCards($mainDeck, $playerCards){
    echo "<br>";
    echo "<h1>Tom</h1>";
    echo '<ul><li>' . $playerCards[0]['card'] . '</li><li>' . $playerCards[1]['card'] . '</li></ul>' ;
    echo "<br>";
    echo "<br>";
    echo "<h1>Jerry</h1>";
    echo '<ul><li>' . $playerCards[2]['card'] . '</li><li>' . $playerCards[3]['card'] . '</li></ul>' ;
    echo "<br>";
}

//Determine winner
function winnerIs($playerCards){
    $player1Points = $playerCards[0]['point'] + $playerCards[1]['point'];
    $player2Points = $playerCards[2]['point'] + $playerCards[3]['point'];

    echo '<br>';
    echo '<p>Tom: ' . $player1Points . '</p>';
    echo '<br>';
    echo '<p>Jerry: ' . $player2Points . '</p>';

    if($player1Points > $player2Points) {
        if($player1Points > 21) {
            echo 'Winner is Jerry.';
        } else {
            echo 'Winner is Tom';
        }
    } else if ($player2Points > $player1Points){
        if($player2Points > 21) {
            echo 'Winner is Tom';
        } else {
            echo 'Winner is Jerry';
        }
    } else {
    echo 'It\'s draw';
    }
    return [$player1Points, $player2Points];
}

$mainDeck = makeDeck($ranks, $suits, $mainDeck);
$playerCards = deal($mainDeck);    //Get return value of deal()

displayCards($mainDeck, $playerCards);    //Print players' hand
$results = winnerIs($playerCards);    //Compare players' points and print who the winner is