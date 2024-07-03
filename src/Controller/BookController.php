<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/book')]
class BookController extends AbstractController
{
    #[Route('', name: 'app_book_index', methods: ['GET'])]
    public function index(Request $request, BookRepository $repository): Response
    {
        $limit = 6;
        $offset = $limit * ($request->query->getInt('page', 1) - 1);

        $books = $repository->findBy([], [], $limit, $offset);

        return $this->render('book/index.html.twig', [
            'books' => $books,
            'count' => ceil($repository->count([]) / $limit),
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_book_show', methods: ['GET'])]
    //#[Route('/{id}', name: 'app_book_show', requirements: ['id' => '\d+'], defaults: ['id' => 0], methods: ['GET'])]
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/title/{title}', name: 'app_book_title', methods: ['GET'])]
    public function title(string $title, BookRepository $repository): Response
    {
        $book = $repository->findLikeTitle($title);

        return $this->render('book/show.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/new', name: 'app_book_new', methods: ['GET', 'POST'])]
    public function new(EntityManagerInterface $manager): Response
    {
        //$book = (new Book())
        //    ->setTitle('1984')
        //    ->setIsbn('978-0451524935')
        //    ->setAuthor('G.Orwell')
        //    ->setPlot('This book is too real')
        //    ->setEditedAt(new \DateTimeImmutable('01-01-1951'))
        //    ->setEditor('Pocket')
        //    ->setCover('https://m.media-amazon.com/images/I/71rpa1-kyvL._SY466_.jpg')
        //;
        //$manager->persist($book);
        //$manager->flush();

        return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
    }
}
