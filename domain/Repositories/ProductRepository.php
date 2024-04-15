<?php

namespace Domain\Repositories;

interface ProductRepository
{
    /**
     * @return array(int, Product)
     */
    public function getProducts(): array;
}