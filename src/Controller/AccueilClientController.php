<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilClientController extends AbstractController
{
    /**
     * @Route("/accueil-client", name="accueil_client")
     */
    public function index(): Response
    {
        return $this->render('accueil_client/index.html.twig', [
            'controller_name' => 'AccueilClientController',
        ]);
    }
}
