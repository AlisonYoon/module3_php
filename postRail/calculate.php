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
    //public $fenceUnit;

    public function __construct($fenceUnit)
    {
        //$this->fenceUnit = $fenceUnit;
        if($fenceUnit < 0) {
            echo 'Sorry, too little materials to build a fence!';
        } else {
            $this->length = (($fenceUnit+1) * 0.1) + ($fenceUnit * 1.5);
        }

        //return $length;

    }

    public function getLength()
    {
        return $this->length;
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

$newFence = new Fence(5,1);
$fenceUnit=$newFence->getFenceUnits();
echo $fenceUnit;
echo '<br>';
echo '<br>';
$whatIsLength = new CalLength($fenceUnit);
//$whatIsAmount = new CalAmount($newFence);
$result = $whatIsLength->getLength();
//$amount = $whatIsAmount->calAmt(7.9);
echo $result . 'm';
echo '<br>';
echo '<br>';
//$whatIsAmount = new calAmount(514);
//$amount = $whatIsAmount->calAmt(514);
//var_dump($amount);
