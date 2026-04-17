<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GlobalController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('global/index.html.twig', [
            'controller_name' => 'GlobalController',
        ]);
    }


    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('global/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/films', name: 'liste')]
    public function liste(): Response
    {        
        $liste = [
                ['title' => 'Inception', 'year' => 2010],
                ['title' => 'The Matrix', 'year' => 1999],
                ['title' => 'Interstellar', 'year' => 2014],
                ['title' => 'The Dark Knight', 'year' => 2008],
                ['title' => 'Pulp Fiction', 'year' => 1994],
                ['title' => 'The Lord of the Rings: The Return of the King', 'year' => 2003],
                ['title' => 'The Shawshank Redemption', 'year' => 1994],
                ['title' => 'The Godfather', 'year' => 1972],
                ['title' => 'The Godfather: Part II', 'year' => 1974],
            ];
             return $this->render('global/films.html.twig', [
            'controller_name' => 'ListeController',
            'title' => 'Liste des films',
            'liste' => $liste,
        ]);
    }
    
}


