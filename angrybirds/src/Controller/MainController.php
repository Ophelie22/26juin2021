<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
// on met le nomdes routes que l'on veux
{
    /**
     * @Route("/", name="bird_list")
     */
    public function birdList(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
//on lui dit de nous retourner la variable (qui sera executer ds twiligne12)