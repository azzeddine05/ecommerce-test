<?php

namespace Domain\Entities;

class Product
{
    public ?int $id;
    public string $title;
    public float $price;
    public string $description;
    public string $category;
    public string $image;
    public Rating $rating;

    public function __construct(
        ?int   $id,
        string $title,
        float  $price,
        string $description,
        string $category,
        string $image,
        Rating $rating
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;
        $this->rating = $rating;
    }
}

