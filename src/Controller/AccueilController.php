<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'Accueil')]
    public function index (): Response {
         // Utilisation de la méthode render pour retourner le template
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController', // Passer le nom du contrôleur à la vue
        ]);
    }
}
