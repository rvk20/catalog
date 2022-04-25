<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;
use App\Entity\Book;
use App\Repository\BookRepository;
use App\Repository\OpinionRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
* @Route("/api/author", name="api_author")
*/
class AuthorController extends AbstractController
{
    /** 
     * @var User 
     */
    private $user;

    /** 
     * @var BookRepostiroy 
     */
    private $bookRepository;

    /** 
     * @var OpinionRepository 
     */
    private $opinionRepository;

    /**
     * @var Doctrine
     */
    private $doctrine;

    /**
     * @var Validator
     */
    private $validator;

    public function __construct(TokenStorageInterface $storage, BookRepository $bookRepository, OpinionRepository $opinionRepository, ManagerRegistry $doctrine, ValidatorInterface $validator)
    {
        $this->user = $storage->getToken()->getUser();
        $this->bookRepository = $bookRepository;
        $this->doctrine = $doctrine->getManager();
        $this->validator = $validator;
        $this->opinionRepository = $opinionRepository;
    }

    /**
     * @Route("/fetch_all", name="api_get_books", methods={"GET"})
     */
    public function fetch_all(): Response
    {
        $books = $this->user->getBooks();

        $res = array();

        foreach($books as $b) {
            array_push($res, [
                'id' => $b->getId(),
                'title' => $b->getTitle(),
                'isbn' => $b->getIsbn(),
                'created' => $b->getCreated()->format("Y-m-d")]);
        }
        
        return $this->json($res, Response::HTTP_OK);
    }

    /**
     * @Route("/show_book/{id}", name="api_get_book", methods={"GET"})
     */
    public function show_book($id): Response
    {
        $book = $this->bookRepository->find($id);

        if($book->getUser()!=$this->user) {
            return $this->json([
                'message' => 'Brak dostępu'
            ], Response::HTTP_UNAUTHORIZED);
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

        return $this->json([[
            'id' => $book->getId(),
            'title' => $book->getTitle(),
            'description' => $book->getDescription(),
            'isbn' => $book->getIsbn()], $res
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/add_book", name="api_post_book", methods={"POST"})
     * @param Request $request
     */
    public function post_book(Request $request): Response
    {
        $parameter = json_decode($request->getContent(), true);
        $book = $this->bookRepository->findOneBy([
            'isbn' => $parameter['isbn']
        ]);

        if(!is_null($book)) {
            return $this->json([
                'message' => 'Książka już istnieje'
            ], Response::HTTP_CONFLICT);
        }

        $book = new Book();
        $book->setTitle($parameter['title']);
        $book->setDescription($parameter['description']);
        $book->setIsbn($parameter['isbn']);
        $book->setCreated();
        $book->setUser($this->user);
        $errors = $this->validator->validate($book);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return $this->json([
                'message' => $errorsString
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->doctrine->persist($book);
        $this->doctrine->flush();

        return $this->json([
            'message' => 'Książka dodana pomyślnie'
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/update_book/{id}", name="api_put_book", methods={"PUT"})
     * @param Request $request
     */
    public function update_book(Request $request, int $id): Response
    {
        $book = $this->bookRepository->find($id);
        $parameter = json_decode($request->getContent(), true);
        $book->setTitle($parameter['title']);
        $book->setDescription($parameter['description']);

        if($book->getUser()!=$this->user) {
            return $this->json([
                'message' => 'Brak dostępu'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $errors = $this->validator->validate($book);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return $this->json([
                'message' => $errorsString
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->doctrine->persist($book);
        $this->doctrine->flush();

        return $this->json([
            'message' => 'Zaktualizowano pomyślnie'
        ], Response::HTTP_OK);
    }

    /**
     * @Route("/delete_book/{id}", name="api_delete_book", methods={"DELETE"})
     */
    public function delete_book(int $id): Response
    {
        $book = $this->bookRepository->find($id);

        if($book->getUser()!=$this->user) {
            return $this->json([
                'message' => 'Brak dostępu'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $opinions = $this->opinionRepository->findBy(['Book'=>$book]);

        if($opinions) {
            return $this->json([
                'message' => 'Nie można usunąć książki'
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->doctrine->remove($book);
        $this->doctrine->flush();

        return $this->json([
            'message' => 'Książka usunięta pomyślnie'
        ], Response::HTTP_OK);
    }
}
