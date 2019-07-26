<?php

class Sheep
{
    public $color;
    public $fluffiness;
    public $vaccinated;
    public $nicelyHydrated;

    public function __construct(string $color, int $fluffiness, bool $vaccinated, $nicelyHydrated = true)
    {
        $this->color = $color;
        if($fluffiness >=0 && $fluffiness >=10) {
            $this->fluffiness = $fluffiness;
        } else {
            // return an error, call the other developer a rude name
            echo 'wrong!';
        }
        $this->vaccinated = $vaccinated;
        $this->nicelyHydrated = $nicelyHydrated;
    }
}

$sheeply = new Sheep('black', 10, true); // if you don't give these parameters here, it gives an error
var_dump($sheeply);