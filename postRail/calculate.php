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
        if($fenceUnit <= 0) {
            echo 'Sorry, too little materials to build a fence!';
            $this->length = -1;
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
    //public $fence;

    public function __construct($length)
    {
        //$this->fence = $fence;
        if($length <= 0) {
            echo 'Sorry, the fence is too short to build';
            $this->postAmount = -1;
            $this->railAmount = -1;
        } else {
            $railAmount = 5/8*$length - 1/16;
            $postAmount = $railAmount + 1;
            $this->railAmount = round($postAmount);
            $this->postAmount = round($railAmount);
        }
    }

    public function getAmount()
    {
        return [$this->postAmount, $this->railAmount];
    }


    //$this->railAmount = $railAmount;
    //$this->postAmount = $postAmount;

//    public function calAmt($length)
//    {
//        $railAmount = 5/8*$length - 1/16;
//        $postAmount = $railAmount + 1;
//        //$postAmount = $length*5/8 + 15/16;
//        return [round($railAmount), round($postAmount)];
//    }
}

$newFence = new Fence(10,9);
$fenceUnit=$newFence->getFenceUnits();
echo $fenceUnit;
echo '<br>';
echo '<br>';
$whatIsLength = new CalLength($fenceUnit);

$result = $whatIsLength->getLength();
$whatIsAmount = new CalAmount($result);
$amount = $whatIsAmount->getAmount();
echo $result . 'm';
echo '<br>';
echo '<br>';
//$whatIsAmount = new calAmount(514);
//$amount = $whatIsAmount->calAmt(514);
var_dump($amount);
