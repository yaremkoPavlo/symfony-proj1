<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;

#use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * Show only available product
     */
    public function getProducts()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products   = $repository->findAllAvailable();

        return $this->json($this->getResponseHelper($products));
    }

    /**
     * Show all products
     */
    public function getAllProducts()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products   = $repository->findAll();
        
        return $this->json($this->getResponseHelper($products));
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

    /**
     * @param array[Product]
     * @return array
     */
    protected function getResponseHelper($products) {
        $response = [];
        foreach ($products as $product) {
            $response[] = [
                'name'      => $product->getName(),
                'price'     => $product->getPrice(),
                'quantity'  => $product->getQuantity()
            ];
        }
        return $response;
    }
}
