<?php

require('../fence.php');

use PHPUnit\Framework\TestCase;

class FenceTest extends TestCase
{
    public function testFenceUnits_returnsFence()
    {
        // Setup
        $newFence = new Fence(18,10);
        $expectedFenceUnits = 9;

        //Execution
        $resultFenceUnits = $newFence->getFenceUnits();

        echo $resultFenceUnits;
        //Assertion
        $this->assertEquals($expectedFenceUnits, $resultFenceUnits);
    }

}