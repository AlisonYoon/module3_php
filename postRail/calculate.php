<?php
require_once('fence.php');
abstract class Calculation
{
    protected $postAmount;
    protected $railAmount;
    protected $length;
}

class CalLength extends Calculation
{
    public $fence;

    public function __construct($fence)
    {
        $this->fence = $fence;
    }

    public function calLen(int $railAmount, int $postAmount)
    {
        $length = ($postAmount * 0.1) + ($railAmount * 1.5);
        return $length;
    }
}

class CalAmount extends Calculation
{
    public $fence;

    public function __construct($fence)
    {
        $this->fence = $fence;
    }
    //$this->railAmount = $railAmount;
    //$this->postAmount = $postAmount;

    public function calAmt($length)
    {
        $railAmount = 5/8*$length - 1/16;
        $postAmount = $railAmount + 1;
        //$postAmount = $length*5/8 + 15/16;
        return [round($railAmount), round($postAmount)];
    }
}

$newFence = new Fence(18,10);
$fenceUnit=$newFence->getFenceUnits();
echo $fenceUnit;
echo '<br>';
echo '<br>';
$whatIsLength = new CalLength($newFence);
$whatIsAmount = new CalAmount($newFence);
$result = $whatIsLength->calLen(5,9);
$amount = $whatIsAmount->calAmt(59.5);
echo $result . 'm';
echo '<br>';
echo '<br>';
//$whatIsAmount = new calAmount(514);
//$amount = $whatIsAmount->calAmt(514);
var_dump($amount);
