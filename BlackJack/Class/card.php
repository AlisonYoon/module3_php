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
$points = [11, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10];

// Use class to make an array of object instead of associated array for card deck
class Card
{
    private $suits;
    private $ranks;
    //private $points;

    public function __construct($suits, $ranks)
    {
        $this->suits = $suits;
        $this->ranks = $ranks;
        //$this->points = $points;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getRank()
    {
        return $this->rank;
    }


    public function generateDeck($suits, $ranks)
    {
        foreach($suits as $suit){
            foreach($ranks as $rank){
                //foreach($points as $point){
                $cardDeck[] = [$suit, $rank];
                //}
            }
        }
        return $cardDeck;
    }
}

$newCard = new Card($suits, $ranks);
var_dump($newCard);
echo '<br>';
echo '<br>';
$resultt = $newCard->generateDeck($suits, $ranks);
var_dump($resultt);