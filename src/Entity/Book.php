<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Polę tytułu nie może być puste")
     * @Assert\Length(
     *    min=1,
     *    max=200, 
     *    minMessage = "Minimalna liczba znaków hasła to {{ limit }}",
     *    maxMessage = "Maksymalna liczba znaków hasła to {{ limit }}"
     *)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Polę opisu nie może być puste")
     * @Assert\Length(
     *    min=1,
     *    max=65000, 
     *    minMessage = "Minimalna liczba znaków hasła to {{ limit }}",
     *    maxMessage = "Maksymalna liczba znaków hasła to {{ limit }}"
     *)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=13, unique=true)
     * @Assert\NotBlank(message="Polę isbn nie może być puste")
     * @Assert\Length(
     *    min=4,
     *    max=13, 
     *    minMessage = "Minimalna liczba znaków hasła to {{ limit }}",
     *    maxMessage = "Maksymalna liczba znaków hasła to {{ limit }}"
     *)
     */
    private $isbn;

    /**
     * @ORM\Column(type="date")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="books")
     */
    private $User;

    /**
     * @ORM\OneToMany(targetEntity=Opinion::class, mappedBy="Book")
     */
    private $Opinions;

    public function __construct()
    {
        $this->Opinions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

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

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return Collection<int, Opinion>
     */
    public function getOpinions(): Collection
    {
        return $this->Opinions;
    }

    public function addOpinion(Opinion $opinion): self
    {
        if (!$this->Opinions->contains($opinion)) {
            $this->Opinions[] = $opinion;
            $opinion->setBook($this);
        }

        return $this;
    }

    public function removeOpinion(Opinion $opinion): self
    {
        if ($this->Opinions->removeElement($opinion)) {
            // set the owning side to null (unless already changed)
            if ($opinion->getBook() === $this) {
                $opinion->setBook(null);
            }
        }

        return $this;
    }
}
