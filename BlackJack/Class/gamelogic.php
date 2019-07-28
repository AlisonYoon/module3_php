<?php

require_once('card.php');

class gameLogic
{
    private $suits = ['clubs', 'diamonds', 'hearts', 'spades'];
    private $ranks = [
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
    private $points = [11, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10];

    public function generateDeck($suits, $ranks)
    {
        foreach($suits as $suit){
            foreach($ranks as $rank){
                $cardDeck[] = [$suit, $rank];
            }
        }
        return $cardDeck;
    }

    public function playerCards($cardDeck)
    {
       $playerCard = array_rand($cardDeck);
       return $playerCard;
    }
}