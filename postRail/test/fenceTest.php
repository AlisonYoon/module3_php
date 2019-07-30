<?php

require('../fence.php');

use PHPUnit\Framework\TestCase;

class FenceTest extends TestCase
{
    public function testFenceUnits_returnsFence()
    {
        // Setup
        $newFence = new Fence(15,5);
        $expectedFenceUnits = 4;

        //Execution
        $resultFenceUnits = $newFence->getFenceUnits();

        echo $resultFenceUnits;
        //Assertion
        $this->assertEquals($expectedFenceUnits, $resultFenceUnits);
    }

}