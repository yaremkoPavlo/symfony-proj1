<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    /**
     * TODO:
     * Show all users
     */
    public function getUsers()
    {
        return new Response('{"a":"users"}', Response::HTTP_OK, JSON_TYPE);
    }

    /**
     * TODO:
     * Show info about one user by id. Info from `users` and `carts` tables, perhaps `orders` too
     * @param int
     */
    public function getUser(int $user_id)
    {
        $content = '{"id":' . $user_id . '}';
        return new Response($content, Response::HTTP_OK, JSON_TYPE);
    }
}
