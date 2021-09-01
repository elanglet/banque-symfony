<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeconnexionController extends AbstractController
{
    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function index(): Response
    {
        return $this->render('deconnexion/index.html.twig', [
            'controller_name' => 'DeconnexionController',
        ]);
    }
}
