<?php

require'unitTest/index.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testAdd_returnsTwoNumbersAdded()
    {

        // Setup
        $expectedResult = 11;

        // Execution
        $result = add(4, 7);

        // Assertion
        $this->assertEquals($expectedResult, $result);
    }
}