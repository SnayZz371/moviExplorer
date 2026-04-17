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
    
    #[Route('/films/{id}', name: 'film_detail')]
    public function filmDetail(int $id): Response
    {
        return new Response("Film numéro : " . $id);
    }

    #[Route('/api/films', name: 'api_films', methods: ['GET'])]
    public function apiFilms(): Response
    {
        $liste = [
            ['id' => 1, 'title' => 'Inception', 'year' => 2010],
            ['id' => 2, 'title' => 'The Matrix', 'year' => 1999],
            ['id' => 3, 'title' => 'Interstellar', 'year' => 2014],
            ['id' => 4, 'title' => 'The Dark Knight', 'year' => 2008],
            ['id' => 5, 'title' => 'Pulp Fiction', 'year' => 1994],
            ['id' => 6, 'title' => 'The Lord of the Rings: The Return of the King', 'year' => 2003],
            ['id' => 7, 'title' => 'The Shawshank Redemption', 'year' => 1994],
            ['id' => 8, 'title' => 'The Godfather', 'year' => 1972],
            ['id' => 9, 'title' => 'The Godfather: Part II', 'year' => 1974],
        ];

        return $this->json($liste);
    }
}


