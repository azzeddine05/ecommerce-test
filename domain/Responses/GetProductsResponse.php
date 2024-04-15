<?php

namespace Domain\Responses;

class GetProductsResponse
{
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}