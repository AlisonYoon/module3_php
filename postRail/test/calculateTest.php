<?php

require('../calculate.php');

use PHPUnit\Framework\TestCase;

class CalculateLengthTest extends TestCase
{
    public function testCalculateLength_returnsLength()
    {
        // Setup
        $getLength = new CalLength(3);
        $expectedFenceLength = 4.9;
        $getLength2 = new CalLength(10);
        $expectedFenceLength2 = 16.1;
        $getLength3 = new CalLength(0);
        $expectedFenceLength3 = -1;
        $getLength4 = new CalLength(500000000);
        $expectedFenceLength4 = 800000000.1;

        //Execution
        $resultFenceLength = $getLength->getLength();
        $resultFenceLength2 = $getLength2->getLength();
        $resultFenceLength3 = $getLength3->getLength();
        $resultFenceLength4 = $getLength4->getLength();


        //Assertion
        $this->assertEquals($expectedFenceLength, $resultFenceLength);
        $this->assertEquals($expectedFenceLength2, $resultFenceLength2);
        $this->assertEquals($expectedFenceLength3, $resultFenceLength3);
        $this->assertEquals($expectedFenceLength4, $resultFenceLength4);

    }

    public function testCalculateAmount_returnsRailPostAmount()
    {
        // Setup
        $getAmount = new CalAmount(12.9);
        $expectedRailPostAmount = ["rail"=>8, "post"=>9];
        $getAmount2 = new CalAmount(-1);
        $expectedRailPostAmount2 = ["rail"=>-1, "post"=>-1];
        $getAmount3 = new CalAmount(79998.5);
        $expectedRailPostAmount3 = ["rail"=>49999, "post"=>50000];


        //Execution
        $resultRailPostAmount = $getAmount->getAmount();
        $resultRailPostAmount2 = $getAmount2->getAmount();
        $resultRailPostAmount3 = $getAmount3->getAmount();



        //Assertion
        $this->assertEquals($expectedRailPostAmount, $resultRailPostAmount);
        $this->assertEquals($expectedRailPostAmount2, $resultRailPostAmount2);
        $this->assertEquals($expectedRailPostAmount3, $resultRailPostAmount3);


    }

}