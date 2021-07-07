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
        // On a pour l'instant juste copié le contenu de data.php
        $names = [
        [
            'name' => 'White bird',
            'description' => 'The chubby white bird drops an egg bomb when players tap the screen after launching the creature from the slingshot.',
            'image' => 'white.png',
        ],
        [
            'name' => 'Black bird',
            'description' => 'Black birds act as bombs, which explode once they\'ve landed on a target, obliterating pigs and buildings around them.',
            'image' => 'black.png',
        ],
        [
            'name' => 'Red bird',
            'description' => 'The first avian missile players encounter when they start the game, the red bird follows a simple trajectory when launched.',
            'image' => 'red.png',
        ],
        [
            'name' => 'Blue bird',
            'description' => 'The blue bird splits into three smaller versions in mid-air when the screen is tapped.',
            'image' => 'blue.png',
        ],
        [
            'name' => 'Yellow bird',
            'description' => 'Tapping the screen after launching the yellow bird gives the critter a speed boost that makes it more deadly.',
            'image' => 'yellow.png',
        ],
        [
            'name' => 'Green bird',
            'description' => 'The green bird turns into a boomerang that doubles back to strike targets in otherwise protected locations.',
            'image' => 'green.png',
        ],
        [
            'name' => 'Big red bird',
            'description' => 'The big red bird is a flying wrecking bail that causes more damage than his smaller red cousin.',
            'image' => 'red-big.png',
        ],
    ];

        // On envoie la liste des oiseaux à notre template
        return $this->render('main/index.html.twig', [
        'birds' => $names,
    ]);
    }
}

//on lui dit de nous retourner la variable (qui sera executer ds twiligne12)
