<?php

require('../BlackJack/game.php');

use PHPUnit\Framework\TestCase;

class Game extends TestCase
{
    public function testMakeDeck()
    {
        // Setup
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
        $expectedMainDeckLength = 52;
        $keyShouldLookLike = 'integer';

        // Execution
        $result = makeDeck($ranks, $suits, $mainDeck);
        $actualMainDeckLength = count($result);
        $actualKeyLookLike = gettype($result['ace-clubs']);
//        echo $actualKeyLookLike;

        // Assertion
        $this->assertEquals($expectedMainDeckLength, $actualMainDeckLength);
        $this->assertEquals($keyShouldLookLike, $actualKeyLookLike);
    }

    public function testDeal()
    {
        // Setup
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
        $playerCards = [];
        $expectedPlayerCardsLength = 4;
        foreach($ranks as $card => $point) {
            foreach($suits as $suit) {
                $deckKey = $card . '-' . $suit; //this is the key for new $mainDeck array
                $mainDeck[$deckKey] = $point; //$point is the value for each key in a new $mainDeck array
            }
        }
        $expectedDeal = false;

        // Execution
        $result = deal($mainDeck);
        $actualPlayerCardsLength = count($result);


        // Assertion
        $this->assertEquals($expectedPlayerCardsLength, $actualPlayerCardsLength);

    }

    public function testWinnerIs()
    {

        // Setup
        $playerCards = [['card'=> '3-clubs', 'point'=>3],['card'=> '9-clubs', 'point' => 9],['card' => '2-hearts', 'point' => 2],['card' => '5-diamonds', 'point' => 5]];
        $expectedWinnerIsLength = 2;

        // Execution
        $result = winnerIs($playerCards);
        $actualWinnerIsLength = count($result);

        //Assertion
        $this->assertEquals($expectedWinnerIsLength, $actualWinnerIsLength);

    }
}