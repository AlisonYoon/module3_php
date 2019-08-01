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

    public function __construct($fenceUnit)
    {
        if($fenceUnit <= 0) {
            echo 'Sorry, too little materials to build a fence!';
            $this->length = -1;
        } else {
            $this->length = (($fenceUnit+1) * 0.1) + ($fenceUnit * 1.5);
        }

    }

    public function getLength()
    {
        return $this->length;
    }
}

class CalAmount extends Calculation
{
    public function __construct($length)
    {
        if($length <= 0) {
            echo 'Sorry, the fence is too short to build';
            $this->postAmount = -1;
            $this->railAmount = -1;
        } else {
            $railAmount = 5/8*$length - 1/16;
            $postAmount = $railAmount + 1;
            $this->postAmount = round($postAmount);
            $this->railAmount = round($railAmount);
        }
    }

    public function getAmount()
    {
        return ["rail" => $this->railAmount, "post"=>$this->postAmount];
    }

}

$newFence = new Fence(50000,50000);
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
