<?php

namespace App\Entity;

use App\Repository\OpinionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=OpinionRepository::class)
 */
class Opinion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Polę ocena nie może być puste")
     * @Assert\Range(
     *    min = 1,
     *    max = 10,
     *    notInRangeMessage = "Ocena musi wynosić od {{ min }} do {{ max }}"
     * )
     */
    private $rating;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Polę opisu nie może być puste")
     * @Assert\Length(
     *    min=2,
     *    max=500, 
     *    minMessage = "Minimalna liczba znaków opisu to {{ limit }}",
     *    maxMessage = "Maksymalna liczba znaków opisu to {{ limit }}"
     *)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Polę autora nie może być puste")
     * @Assert\Length(
     *    min=2,
     *    max=100, 
     *    minMessage = "Minimalna liczba znaków autora to {{ limit }}",
     *    maxMessage = "Maksymalna liczba znaków autora to {{ limit }}"
     *)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email(message="E-mail niewłaściwy")
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity=Book::class, inversedBy="Opinions")
     */
    private $Book;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(): self
    {
        $this->created = new \DateTime("now");
        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->Book;
    }

    public function setBook(?Book $Book): self
    {
        $this->Book = $Book;

        return $this;
    }
}
