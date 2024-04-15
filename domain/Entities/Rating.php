<?php

namespace Domain\Entities;

class Rating
{
    public float $rate;
    public int $count;

    public function __construct(
        float $rate,
        int   $count
    )
    {
        $this->rate = $rate;
        $this->count = $count;
    }
}