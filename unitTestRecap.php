<?php

//One test function for each scenario. If there is if() else{} in the file you're testing,
//test file should have separate functions to test those different scenarios.

/*
 * Specification/List of demands:
 * 1. A calculator that can add, subtract, multiply and divide
 * 2. If inputs are not integers return the message:
 * 'This isn't what I wanted!'
 * 3.
 */


// 1. Pulls the file under test into this file so we
// run the functions contained in index.php
require_once '../index.php';

// 2. Pulls in the parent class for test classes
// (TestCase)
use PHPUnit\Framework\TestCase;


// 3. Create a class which inherits properties and
// methods from TestCase (using the extends keyword)
class IndexTest extends TestCase
{

    // One test function for each scenario from the specification
    public function testAdd_returnsTwoNumbersAdded()
    {
        // Setup
        $expectedResult = 11;

        // Execution
        $result = addTwoNumbers(4, 7);

        // Assertion
        $this->assertEquals($expectedResult, $result);
    }

    public function testAdd_throwsErrorWithStrings()
    {
        // Setup
        $expectedResult = 'This isn\'t what I wanted!';

        // Execution
        $result = addTwoNumbers('howdy', 4);

        // Assertion
        $this->assertEquals($expectedResult, $result);
    }
}


//index.php

function addTwoNumbers($firstNumber, $secondNumber)
{
    if (gettype($firstNumber) !== 'integer' || gettype($secondNumber) !== 'integer') {
        return 'This isn\'t what I wanted!';
    } else {
        return $firstNumber + $secondNumber;
    }
}