<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('', name: 'app_main_index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'movies' => [],
        ]);
    }

    #[Route('/contact', name: 'app_main_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }

    public function counts(): Response
    {
        // ...

        return $this->render('include/_counts.html.twig', [
            'movie_count' => 5687,
            'book_count' => 256,
        ])->setTtl(3600);
    }
}
