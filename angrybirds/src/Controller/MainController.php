<?php

namespace App\Controller;

use App\Models\BirdsModel;
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
        // On instancie notre nouvelle classe
        $birdsModel = new BirdsModel();
        // On s'en sert pour récupérer la liste de tous les oiseaux
        $birds = $birdsModel->getBirds();
        // On envoie la liste des oiseaux à notre template
        return $this->render('main/index.html.twig', [
        // avant c'etait 'birds' => $names,
        'birds' => $birds,
        ]);


    /**
     * @Route("/bird", name="bird_single")
     */
    public function birdSingle(): Response
    {
        // On instancie notre nouvelle classe
        $birdsModel = new BirdsModel();
        // On s'en sert pour récupérer la liste de tous les oiseaux
        $bird = $birdsModel->getSingleBird(4);
        dd();
        // On envoie la liste des oiseaux à notre template
        return $this->render('main/index.html.twig', [
        // avant c'etait 'birds' => $names,
        'bird' => $bird,
        ]);
    }
}    
