<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
#use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * TODO:
     * Show only available product
     */
    public function getProducts()
    {
        return $this->json(['a' => 'products']);
    }

    /**
     * TODO:
     * Show all products
     */
    public function getAllProducts()
    {
        return $this->json(['a' => 'All products']);
    }

    /**
     * TODO:
     * Show info about one product by id
     * @param int
     */
    public function getProduct(int $product_id)
    {
        $content = ['id' => $product_id];
        return $this->json($content);
    }

    /**
     * TODO:
     * Implement adding product to DB
     */
    public function addProduct(Request $request)
    {
        print_r($request->request->all());
        return $this->getProducts();
    }

    /**
     * TODO:
     * Implement increasing product quantity
     * @param int
     */
    public function setProductQuantity(int $product_id, Request $request)
    {
        print_r($request->request->all());
        return $this->getProduct($product_id);
    }
}
