<?php

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
foreach($ranks as $card => $point) {
    foreach($suits as $suit) {
    $deckKey = $card . '-' . $suit; //this is the key for new $mainDeck array
    $mainDeck[$deckKey] = $point; //$point is the value for each key in a new $mainDeck array
    }
}

// Randomly pick cards from the deck for players
function pickCards(array $cards) {
    // rdk means "Random Key" : pick random cards
    $rdk = array_rand($cards);    //This will be a random key from the $mainDeck array
    $pickedCardPoint = $cards[$rdk];    //This will be that random key's value(point)

    return ['card' => $rdk, 'point' => $pickedCardPoint];    //Return those above as an associative array
}

//Deal while getting rid of the cards that are picked from the deck
function deal($mainDeck) {
    $playerCards = [];
    for($j = 0; $j < 2; $j++) {
        $cardPicked = pickCards($mainDeck);
        $player1[] = $cardPicked;
        unset($mainDeck[$cardPicked['card']]);    //Remove picked cards from the deck

        $cardPicked = pickCards($mainDeck);    //Next player will pick cards from the deck excluding the cards that are already picked
        $player2[] = $cardPicked;
        unset($mainDeck[$cardPicked['card']]); //Remove picked cards from the deck
    }
    $playerCards = array_merge($player1, $player2);
    return $playerCards;
}

// Main game
function blackJack($mainDeck){
    $results = deal($mainDeck);

    $player1Points = $results[0]['point'] + $results[1]['point'];
    $player2Points = $results[2]['point'] + $results[3]['point'];

    //var_dump($player1);
    echo "<br>";
    echo "<h1>Player 1</h1>";
    echo '<ul><li>' . $results[0]['card'] . '</li><li>' . $results[1]['card'] . '</li></ul>' ;
    echo $player1Points;
    echo "<br>";
    //var_dump($player2);
    echo "<br>";
    echo "<h1>Player 2</h1>";
    echo '<ul><li>' . $results[2]['card'] . '</li><li>' . $results[3]['card'] . '</li></ul>' ;
    echo $player2Points;
    echo "<br>";
    //var_dump($mainDeck);
    return [$player1Points, $player2Points];
}

//Determine winner
function winnerIs($player1Points, $player2Points){
    //var_dump($player1Points);
    echo '<br>';
    //var_dump(($player2points));
    if($player1Points > $player2Points) {
        if($player1Points > 21) {
            echo "Winner is Player2";
        } else {
            echo "Winner is Player1";
        }
    } else if ($player2Points > $player1Points){
        if($player2Points > 21) {
            echo "Winner is Player1";
        } else {
            echo "Winner is Player2";
        }
    } else {
    echo "It's draw";
    }
}


$results = blackJack($mainDeck);
winnerIs($results[0], $results[1]);