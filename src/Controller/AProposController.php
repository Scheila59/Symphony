<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AProposController extends AbstractController
{
    #[Route('/apropos', name: 'app_a_propos')]
    public function index(): Response
    {
        // Utilisation de la méthode render pour retourner le template
        return $this->render('a_propos/a_propos.html.twig', [
            'controller_name' => 'AProposController', // Passer le nom du contrôleur à la vue
        ]);
    }
}
