<?php

class Fence
{
    private $fenceUnits;

    /**
     * Fence constructor.
     * @param int $rail
     * @param int $post
     */
    public function __construct(int $rail, int $post)
    {
        //fenceUnits : number of railings needed to create a fence
        if($rail < 1 || $post < 2) {
            $this->fenceUnits = -1;   // error value
            echo 'Too little materials, we cannot build a fence';
        } elseif($post < $rail) {
            $this->fenceUnits = $post -1;
        } elseif($post > $rail) {
            $this->fenceUnits = $rail;
        } else {    //$post == $rail
            $this->fenceUnits = $rail-1;
        }
    }

    public function getFenceUnits()
    {
        return $this->fenceUnits;
    }
}


