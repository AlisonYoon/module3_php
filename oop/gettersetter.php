<?php
// protected : within the class itself && any classes that extend it, can access to it. You have to use a method to change
//the value of it

abstract class Animal
{
    protected $legs = 8;
}

class Sheep extends Animal
{
    private $color = 'black';

    public function setlegs($number)
    {
        $this->legs = $number;
    }

    public function showLegs()
    {
        return $this->legs;
    }

    public function getColor()   //  getter is public here, so that others have access to it. private/public depends on the use case.
    {
        return $this->color;
    }

    private function setColor(string $color)   // setter is private here, so that it can only be set inside the class.
        // because $color was set private. This also has to be private. private/public depends on the use case.
    {
        $this->color = $color;
    }

    public function paintSheep(string $farmerName, string $color): bool
    {
        if($farmerName !== 'Tom') {
            return false;
            //or a proper error, more on this later
        } else {
            $this->setColor($color);
            return true;
        }
    }
}

$sheeply = new Sheep();
echo $sheeply->getColor();