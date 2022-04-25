<?php

namespace App\Controller;

use App\Entity\Opinion;
use App\Repository\BookRepository;
use App\Repository\OpinionRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
* @Route("/api/guest", name="api_guest")
*/
class GuestController extends AbstractController
{
    /** 
     * @var BookRepostory 
     */
    private $bookRepository;

    /** 
     * @var OpinionRepository 
     */
    private $opinionRepository;

    /** 
     * @var Paginator 
     */
    private $paginator;

    /** 
     * @var Doctrine 
     */
    private $doctrine;

    /**
     * @var Validator
     */
    private $validator;

    public function __construct(BookRepository $bookRepository, OpinionRepository $opinionRepository, PaginatorInterface $paginator, ManagerRegistry $doctrine, ValidatorInterface $validator)
    {
        $this->bookRepository = $bookRepository;
        $this->paginator = $paginator;
        $this->doctrine = $doctrine->getManager();
        $this->validator = $validator;
        $this->opinionRepository = $opinionRepository;
    }

    /**
     * @Route("/fetch_all", name="api_guest_fetch_all", methods={"GET"})
     * @param Request $request
     */
    public function fetch_all(Request $request): Response
    {
        $books = $this->bookRepository->findBy(
            array(), array('created' => 'DESC')
        );

        $books = $this->paginator->paginate(
            $books,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
       );

       $res = array();

       foreach($books as $b) {
        array_push($res, [
            'id' => $b->getId(),
            'title' => $b->getTitle(),
            'description' => $b->getDescription(),
            'isbn' => $b->getIsbn(),
            'created' => $b->getCreated()->format("Y-m-d")]);
        }
    
        return $this->json($res, Response::HTTP_OK);
    }

    /**
     * @Route("/search", name="api_guest_search", methods={"POST"})
     * @param Request $request
     */
    public function search(Request $request): Response
    {
        $parameter = json_decode($request->getContent(), true);

        $filter =  $parameter['search'];
        $filter = "%" . $filter . "%";
        $query = $this->doctrine->createQuery(
            'SELECT b
            FROM App\Entity\Book b
            WHERE b.title LIKE :filter OR b.description LIKE :filter
            ORDER BY b.created DESC'
        )->setParameter('filter', $filter);
        

        $books = $query->getResult();

        $books = $this->paginator->paginate(
            $books,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
       );

       $res = array();

       foreach($books as $b) {
        array_push($res, [
            'id' => $b->getId(),
            'title' => $b->getTitle(),
            'description' => $b->getDescription(),
            'isbn' => $b->getIsbn(),
            'created' => $b->getCreated()->format("Y-m-d")]);
        }

        return $this->json($res, Response::HTTP_OK);
    }

    /**
     * @Route("/show_book/{id}", name="api_guest_get_book", methods={"GET"})
     */
    public function show_book($id): Response
    {
        $book = $this->bookRepository->find($id);

        if(is_null($book)) {
            return $this->json([
                'message' => 'Książka nie istnieje'
            ], Response::HTTP_BAD_REQUEST);
        }

        $opinions = $book->getOpinions();

        $res = array();

        foreach($opinions as $o) {
            array_push($res, [
                'id' => $o->getId(),
                'rating' => $o->getRating(),
                'description' => $o->getDescription(),
                'author' => $o->getAuthor(),
                'email' => $o->getEmail(),
                'created' => $o->getCreated()->format("Y-m-d")]);
        }

        return $this->json([
            ['id' => $book->getId(),
            'title' => $book->getTitle(),
            'description' => $book->getDescription(),
            'isbn' => $book->getIsbn(),
            'author' => $book->getUser()->getName() . ' ' . $book->getUser()->getSurname()], $res
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/show_book/{id}/add_opinion", name="api_guest_add_opinion", methods={"POST"})
     * @param Request $request
     */
    public function add_opinion(Request $request, $id): Response
    {
        $book = $this->bookRepository->find($id);

        if(is_null($book)) {
            return $this->json([
                'message' => 'Książka nie istnieje'
            ], Response::HTTP_BAD_REQUEST);
        }

        $parameter = json_decode($request->getContent(), true);
        $opinion = new Opinion();
        $opinion->setRating($parameter['rating']);
        $opinion->setDescription($parameter['description']);
        $opinion->setAuthor($parameter['author']);
        $opinion->setCreated();
        $opinion->setBook($book);
        
        if(isset($parameter['email'])) {
            $opinion->setEmail($parameter['email']);
        }

        $errors = $this->validator->validate($opinion);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return $this->json([
                'message' => $errorsString
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->doctrine->persist($opinion);
        $this->doctrine->flush();

        return $this->json([
            'message' => 'Opinia dodana pomyślnie'
        ], Response::HTTP_OK);
    }
}
