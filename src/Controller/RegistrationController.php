<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var PassEncoder
     */
    private $passEncoder;

    /**
     * @var Doctrine
     */
    private $doctrine;

    /**
     * @var Validator
     */
    private $validator;

    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $passEncoder, ManagerRegistry $doctrine, ValidatorInterface $validator)
    {
        $this->userRepository = $userRepository;
        $this->passEncoder = $passEncoder;
        $this->doctrine = $doctrine->getManager();
        $this->validator = $validator;
    }

    /**
     * @Route("/api/register", name="api_register", methods={"POST"})
     * @param Request $request
     */
    public function register(Request $request): Response
    {
        $parameter = json_decode($request->getContent(), true);

        $user = $this->userRepository->findOneBy([
            'email' => $parameter['email']
        ]);

        if(!is_null($user)) {
            return $this->json([
                'message' => 'Użytkownik już istnieje'
            ], Response::HTTP_CONFLICT);
        }

        $user = new User();
        $user->setEmail($parameter['email']);
        $user->setName($parameter['name']);
        $user->setSurname($parameter['surname']);
        $user->setRoles(array("ROLE_USER"));
        $user->setPassword(
            $this->passEncoder->hashPassword($user, $parameter['password'])
        );

        if(!preg_match('/[A-Z]/', $parameter['password'])||!preg_match('/[a-z]/', $parameter['password'])) {
            return $this->json([
                'message' => 'Object(App\\Entity\\User).password:\n Hasło musi zawierać jedną małą i jedną dużą literę'
            ], Response::HTTP_BAD_REQUEST);
        }

        if($parameter['password']!=$parameter['repeated']) {
            return $this->json([
                'message' => 'Object(App\\Entity\\User).password:\n Hasła nie są takie same'
            ], Response::HTTP_BAD_REQUEST);
        }

        $errors = $this->validator->validate($user);

        if (count($errors) > 0) {
        $errorsString = (string) $errors;
        return $this->json([
            'message' => $errorsString
        ], Response::HTTP_BAD_REQUEST);
        }

        $this->doctrine->persist($user);
        $this->doctrine->flush();

        return $this->json([
            'message' => 'Konto zostało utworzone'
        ], Response::HTTP_CREATED);
    }
}
