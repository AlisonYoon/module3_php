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

        $this->fenceUnits = min($rail, $post);
        //fenceUnits : number of railings needed to create a fence
    }

    public function getFenceUnits()
    {
        return $this->fenceUnits;
    }
}

$newFence = new Fence(5,9);

echo $newFence->getFenceUnits();


