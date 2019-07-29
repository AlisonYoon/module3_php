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
        //$this->rail = $rail;
        //$this->post = $post;

        //$this->fenceUnits = min($rail, $post);
        //fenceUnits : number of railings needed to create a fence
        if($rail < 1 || $post < 2) {
            return 'Too little materials, we cannot build a fence';
        } elseif($post < $rail) {
            $this->fenceUnits = $post -1;
            return $this->fenceUnits;
        } elseif($post > $rail) {
            $this->fenceUnits = $rail;
            return $this->fenceUnits;
        } else {    //$post == $rail
            $this->fenceUnits = $rail-1;
            return $this->fenceUnits;
        }
    }

    public function getFenceUnits()
    {
        return $this->fenceUnits;
    }
}

$newFence = new Fence(5,9);

echo $newFence->getFenceUnits();


