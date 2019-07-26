<?php

abstract class Animal
{
    protected $sound;   // public : you can set it wherever,
    // private : can only be set within the class.
    // protected : within the class itself && any classes that extend it, can access to it.
    public $color;

    public function speak() {
        return $this->sound;
    }

}

class Sheep extends Animal
{
    protected $sound = 'baaaa';   // set default value with =
    public $breed;
    const NUMBEROFLEGS = 4;


    public function goToLanguageSchool() {
        $this->sound = 'mooooo';      // $sound is private key so it can only be set like inside the class.
    }

    public function getShorn()
    {
        return 'nice and cool';
    }
}

class Pig extends Animal
{
    protected $sound = 'oink';
}

$sheeply = new Sheep();
$weeply = new Sheep();
// $weeply->sound = 'bork';   -> this won't work because $sound is private. it can only set inside the class.
// echo $weeply->sound   -> this won't work either because private key cannot be accessed like this.
$sheeply->color = 'white';
$weeply->color = 'black';

echo Sheep::NUMBEROFLEGS;  // this is how you access class's constance
echo '<br>';
echo 'I am sheeply and I say ' . $sheeply->speak();
echo '<br>';
$sheeply->goToLanguageSchool();
echo 'I am sheeply and I say ' . $sheeply->speak();
echo '<br>';
echo  $weeply->speak();   // only way we can access private $sound is through the method inside the class. to print it.
echo '<br>';

$piggly = new Pig();
//$piggly = new Animal(); doesn't work. abstract class can be extended but cannot be instanciated.
$piggly->color = 'pink';
$wiggly = new Pig();
$wiggly->color = 'brown';

