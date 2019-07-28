<?php

abstract class Calculation
{
    protected $postAmount;
    protected $railAmount;
    protected $length;
}

class CalLength extends Calculation
{
    public function calLen(int $postAmount, int $railAmount)
    {
        $length = ($postAmount * 0.1) + ($railAmount * 1.5);
        return $length;
    }
}

class calAmount extends Calculation
{
    //$this->railAmount = $railAmount;
    //$this->postAmount = $postAmount;

    public function calAmt($length)
    {
        $railAmount = 5/8*$length - 1/16;
        $postAmount = $railAmount + 1;
        return [$railAmount, $postAmount];
    }
}