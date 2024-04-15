<?php

namespace Domain\UseCases;

use Domain\Repositories\ProductRepository;
use Domain\Responses\GetProductsResponse;

class GetProducts
{
    public function __construct(private readonly ProductRepository $productsRepository)
    {
    }

    public function execute(): GetProductsResponse
    {
        // Create an array to hold Product objects
        $products = $this->productsRepository->getProducts();
        return new GetProductsResponse($products);
    }
}