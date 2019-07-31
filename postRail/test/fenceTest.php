<?php

require('../fence.php');

use PHPUnit\Framework\TestCase;

class FenceTest extends TestCase
{
    public function testFenceUnits_returnsFence()
    {
        // Setup
        $newFence = new Fence(1,1);
        $expectedFenceUnits = -1;
        $newFence2 = new Fence(15,5);
        $expectedFence2Units = 4;
        $newFence3 = new Fence(10,10);
        $expectedFence3Units = 9;
        $newFence4 = new Fence(-2,-2);
        $expectedFence4Units = -1;
        $newFence5 = new Fence(500000000,500000000);
        $expectedFence5Units = 499999999;
        //Execution
        $resultFenceUnits = $newFence->getFenceUnits();
        $resultFence2Units = $newFence2->getFenceUnits();
        $resultFence3Units = $newFence3->getFenceUnits();
        $resultFence4Units = $newFence4->getFenceUnits();
        $resultFence5Units = $newFence5->getFenceUnits();

        echo $resultFenceUnits;
        //Assertion
        $this->assertEquals($expectedFenceUnits, $resultFenceUnits);
        $this->assertEquals($expectedFence2Units, $resultFence2Units);
        $this->assertEquals($expectedFence3Units, $resultFence3Units);
        $this->assertEquals($expectedFence4Units, $resultFence4Units);
        $this->assertEquals($expectedFence5Units, $resultFence5Units);

    }

}