<?php

/*
 * Specification/List of demands:
 * 1. Create a connection to the database
 * 2. Fetch users using an ID, output '{name} is really cool!'
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
    public function testGetAUser_fetchesAUser()
    {
        // Setup
        $expectedResult = [
            'id' => '13',
            'name' => 'Kelvin',
            'DOB' => '1971-08-21',
            'gender' => 'f',
            'email' => NULL
        ];

        // Execution
        $result = getAUser(13);

        // Assertion
        $this->assertSame($expectedResult, $result);
    }

    public function testIsReallyCool_tellsEveryoneThatSomeoneIsCool()
    {
        // Setup
        $expectedResult = 'Ignatius is really cool!';

        // Execution
        $result = isReallyCool('Ignatius');

        // Assertion
        $this->assertEquals($expectedResult, $result);
    }

}



//index.php


function getAUser(int $userId): array
{
    $db = new PDO(
        'mysql:host=192.168.20.20; dbname=exercise set 2',
        'root',
        ''
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $getUser = $db->prepare('SELECT * FROM `adults` WHERE `id`=:id');
    $getUser->bindParam('id', $userId, PDO::PARAM_INT);
    $getUser->execute();
    $user = $getUser->fetch();
    var_dump($user);
    return $user;
}

function isReallyCool(string $personName)
{
    return $personName . ' is really cool!';
}

if (isset($_GET['userid'])) {
    getAUser($_GET['userid']);
}
?>
<html>
<body>
<form action="index.php" method="get">
    <input type="number" name="userid">
    <input type="submit">
</form>
</body>
</html>