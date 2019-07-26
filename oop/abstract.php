<?php
// protected : within the class itself && any classes that extend it, can access to it. You have to use a method to change
//the value of it

abstract class Animal
{
    protected $legs = 8;
}

class Sheep extends Animal
{
    public function setlegs($number)
    {
        $this->legs = $number;
    }

    public function showLegs()
    {
        return $this->legs;
    }
}

$sheep = new Sheep();
$sheep->setlegs(4);
echo $sheep->showLegs();
echo '<br>';
$otherSheep = new Sheep();
echo $otherSheep->showLegs();