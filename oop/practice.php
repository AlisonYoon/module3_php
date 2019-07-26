<?php

abstract class Pet
{
    protected $furry = 'furry';
}

class Dog extends Pet
{
    private $color = 'white';
    protected $food = 'dogfood';

    public function setFood(string $food): string
    {
        if($food === 'dogfood' || $food === 'treat'){
            $this->food=$food;
            return $food . ', My favorite thing!';
        } else {
            return 'I don\'t like the smell';
        }
    }

    public function setFurry($hairLength)
    {
        $this->furry = $hairLength;
    }
    public function showFur()
    {
        return $this->furry;
    }

    public function getColor()
    {
        return $this->color;
    }

    private function setColor(string $color)
    {
        $this->color = $color;
    }

    public function dyeDogHair(string $color): string
    {
        $this->setColor($color);
        return 'I like my new ' .  $color . ' hair!';
    }
}

class Cat extends Pet
{
    private $color = 'grey';
}

$puppy = new Dog();
echo $puppy->getColor();
echo '<br>';
echo $puppy->setFood('treat');
echo '<br>';
echo $puppy->setFood('catfood');
echo '<br>';
echo $puppy->dyeDogHair('pink');