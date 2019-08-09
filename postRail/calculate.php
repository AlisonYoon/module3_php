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
            $this->postAmount = -1;
            $this->railAmount = -1;
            echo '<p class="result-msg">Sorry, the fence is too short to build</p>';
        } elseif($length == NULL) {
            echo '<p class="result-msg">Sorry, the fence is too short to build</p>';
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

