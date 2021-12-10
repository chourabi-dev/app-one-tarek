<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="main_route")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'products' => array('Samsung A71','Iphone13'),
        ]);
    }
}
