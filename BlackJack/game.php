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

    return ['card' => $rdk, 'point' => $pickedCardPoint];
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

    $player1Points = $player1[0]['point'] + $player1[1]['point'];
    $player2Points = $player2[0]['point'] + $player2[1]['point'];

    //var_dump($player1);
    echo "<br>";
    echo "<h1>Player 1</h1>";
    echo '<ul><li>' . $player1[0]['card'] . '</li><li>' . $player1[1]['card'] . '</li></ul>' ;
    echo $player1Points;
    echo "<br>";
    //var_dump($player2);
    echo "<br>";
    echo "<h1>Player 2</h1>";
    echo '<ul><li>' . $player2[0]['card'] . '</li><li>' . $player2[1]['card'] . '</li></ul>' ;
    echo $player2Points;
    echo "<br>";
    //var_dump($mainDeck);
    return [$player1Points, $player2Points];
}

//Determine winner
function winnerIs($player1Points, $player2points){
    //var_dump($player1Points);
    echo '<br>';
    //var_dump(($player2points));
    if($player1Points > $player2points) {
        if($player1Points > 21) {
            echo "Winner is Player2";
        } else {
            echo "Winner is Player1";
        }
    } else if ($player2points > $player1Points){
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