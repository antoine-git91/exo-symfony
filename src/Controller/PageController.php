<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'Welcome on my Blog',
        ]);
    }
    /**
     * @Route("/informations", name="informations")
     */
    public function informationPage(): Response
    {
        return $this->render('page/information.html.twig', [
            'controller_name' => 'Mes informations',
        ]);
    }
}
