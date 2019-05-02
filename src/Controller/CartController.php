<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CartController
{
    /**
     * Show all carts
     * 
     * @return Response
     */
    public function getCarts()
    {
        return new Response('{"a":"carts"}', Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * Show one cart by slug
     * 
     * @param int
     * @return Response
     */
    public function getCart(int $cart_id)
    {
        $content = '{"id":' . $cart_id . '}';
        return new Response($content, Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * Add product to cart and return upgraded cart
     * 
     * @param int
     * @return Response
     */
    public function addProduct(int $cart_id)
    {
        /**
         *  TODO:
         *  This should be implementation to add product to cart
         * 
         */
        return $this->getCart( $cart_id);
    }

    /**
     * Remove product to cart and return upgraded cart
     * 
     * @param int
     * @return Response
     */
    public function removeProduct(int $cart_id)
    {
        /**
         *  TODO:
         *  This should be implementation to remove product from cart
         * 
         */
        return $this->getCart($cart_id);
    }
}
