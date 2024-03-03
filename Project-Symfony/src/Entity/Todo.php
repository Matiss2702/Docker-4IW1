<?php

namespace App\Entity;

use App\Repository\TodoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TodoRepository::class)]
class Todo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $aa = null;

    #[ORM\Column(length: 255)]
    private ?string $bbb = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAa(): ?string
    {
        return $this->aa;
    }

    public function setAa(string $aa): static
    {
        $this->aa = $aa;

        return $this;
    }

    public function getBbb(): ?string
    {
        return $this->bbb;
    }

    public function setBbb(string $bbb): static
    {
        $this->bbb = $bbb;

        return $this;
    }
}
