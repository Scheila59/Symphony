<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        $users = 
        [
            ['nom' => 'tailor', 'prenom' => 'laura', 'age' => 25, 'profession' => 'designer'],
            ['nom' => 'john', 'prenom' => 'doe', 'age' => 30, 'profession' => 'chef'],
            ['nom' => 'jane', 'prenom' => 'star', 'age' => 36, 'profession' => 'developpeuse']
        ];
        return $this->render('user/user.html.twig', [
            'users' => $users
        ]);
    }
}
