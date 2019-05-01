<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    const JSONTYPE = ['Content-type' => 'application/json'];

    public function getProducts()
    {
        return new Response('{"a":"products"}', 200, self::JSONTYPE );
    }

    /**
     *
     * @Route("/products/{slug}", name="app_product_show")
     */
    public function getProductById($slug)
    {
        $content = '{"id":' . $slug . '}';
        return new Response($content, 200, self::JSONTYPE );
    }
}
