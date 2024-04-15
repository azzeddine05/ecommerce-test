<?php

namespace App\Infrastructure\Repositories;

use Domain\Entities\Product;
use Domain\Entities\Rating;
use Domain\Repositories\ProductRepository;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductRepositoryImpl implements ProductRepository
{
    private readonly string $apiUrl;

    public function __construct(
        private HttpClientInterface $client,
    )
    {
        $this->apiUrl = "https://fakestoreapi.com/products";
    }

    public function getProducts(): array
    {
        $products = [];
        try {
            $response = $this->client->request(
                'GET',
                $this->apiUrl
            );

            $data = $response->toArray();

            foreach ($data as $item) {
                $products[] = new Product(
                    $item['id'],
                    $item['title'],
                    $item['price'],
                    $item['description'],
                    $item['category'],
                    $item['image'],
                    new Rating($item['rating']['rate'], $item['rating']['count'])
                );
            }

        } catch (TransportExceptionInterface $e) {
        }

        return $products;
    }
}