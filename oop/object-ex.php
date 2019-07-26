<?php

class Sheep
{
    private $sound = 'baaaa';   // set default value with =
    public $color;
    public $breed;
    const NUMBEROFLEGS = 4;

    public function speak() {
        return $this->sound;
    }

    public function goToLanguageSchool() {
        $this->sound = 'mooooo';      // $sound is private key so it can only be set like inside the class.
    }
}

$sheeply = new Sheep();
$weeply = new Sheep();
// $weeply->sound = 'bork';   -> this won't work because $sound is private. it can only set inside the class.
// echo $weeply->sound   -> this won't work either because private key cannot be accessed like this.

echo Sheep::NUMBEROFLEGS;  // this is how you access class's constance
echo '<br>';
echo 'I am sheeply and I say ' . $sheeply->speak();
echo '<br>';
$sheeply->goToLanguageSchool();
echo 'I am sheeply and I say ' . $sheeply->speak();

echo '<br>';

echo  $weeply->speak();   // only way we can access private $sound is through the function inside the class. to print it.
