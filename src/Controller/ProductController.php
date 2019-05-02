<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
#use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    /**
     * TODO:
     * Show only available product
     */
    public function getProducts()
    {
        return new Response('{"a":"products"}', Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * TODO:
     * Show all products
     */
    public function getAllProducts()
    {
        return new Response('{"a":"All products"}', Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * TODO:
     * Show info about one product by id
     * @param int
     */
    public function getProduct(int $product_id)
    {
        $content = '{"id":' . $product_id . '}';
        return new Response($content, Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * TODO:
     * Implement adding product to DB
     */
    public function addProduct()
    {
        return $this->getProducts();
    }

    /**
     * TODO:
     * Implement increasing product quantity
     * @param int
     */
    public function setProductQuantity(int $product_id)
    {
        return $this->getProduct($product_id);
    }
}
