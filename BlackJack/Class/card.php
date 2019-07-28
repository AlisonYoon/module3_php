<?php


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
    }

    public function getSuit()
    {
        return $this->suits;
    }

    public function getRank()
    {
        return $this->ranks;
    }

}

$newCard = new Card($suits, $ranks);
var_dump($newCard);
echo '<br>';
echo '<br>';
var_dump($newCard->getRank());
echo '<br>';
echo '<br>';
var_dump($newCard->getSuit());
