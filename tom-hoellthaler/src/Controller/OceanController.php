<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OceanController extends AbstractController
{
    #[Route('/ocean', name: 'ocean')]
    public function index(): Response
    {
        return $this->render('/ocean/index.html.twig', [
            'controller_name' => 'OceanController',
        ]);
    }
}
