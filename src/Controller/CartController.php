<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CartController extends AbstractController
{
    /**
     * Show all carts
     * 
     */
    public function getCarts()
    {
        return $this->json(['a' => 'carts']);
    }

    /**
     * Show one cart by slug
     * 
     * @param int
     */
    public function getCart(int $cart_id)
    {
        $content = ['id' => $cart_id];
        return $this->json($content);
    }

    /**
     * Add product to cart and return upgraded cart
     * 
     * @param int
     */
    public function addProduct(int $cart_id, Request $request)
    {
        /**
         *  TODO:
         *  This should be implementation to add product to cart
         * 
         */
        print_r($request->request->all());
        return $this->getCart($cart_id);
    }

    /**
     * Remove product to cart and return upgraded cart
     * 
     * @param int
     */
    public function removeProduct(int $cart_id, Request $request)
    {
        /**
         *  TODO:
         *  This should be implementation to remove product from cart
         * 
         */
        print_r($request->request->all());
        return $this->getCart($cart_id);
    }
}
