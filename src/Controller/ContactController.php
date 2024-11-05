<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        // Utilisation de la méthode render pour retourner le template
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController', // Passer le nom du contrôleur à la vue
        ]);
    }
}
