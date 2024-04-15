<?php

namespace App\Controller;

use Domain\UseCases\GetProducts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetProductsController extends AbstractController
{
    #[Route('/api/products', name: 'get_products')]
    public function index(GetProducts $getProducts): Response
    {
        $result = $getProducts->execute();
        return new JsonResponse([
            "status" => Response::HTTP_OK,
            "products" => $result->getProducts(),
        ]);
    }
}