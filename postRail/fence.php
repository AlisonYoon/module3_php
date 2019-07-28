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
        $this->rail = $rail;
        $this->post = $post;

        $fenceUnits = min($rail - 1, $post);
    }

}



