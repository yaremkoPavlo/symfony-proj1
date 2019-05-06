<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * TODO:
     * Show all users
     */
    public function getUsers()
    {
        return $this->json(['a' => 'users']);
    }

    /**
     * TODO:
     * Show info about one user by id. Info from `users` and `carts` tables, perhaps `orders` too
     * @param int
     */
    public function getUserById(int $user_id)
    {
        $content = ['user_id' => $user_id];
        return $this->json($content);
    }
}
