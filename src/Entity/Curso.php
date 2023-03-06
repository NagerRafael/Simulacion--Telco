<?php

namespace App\Entity;

use App\Repository\CursoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CursoRepository::class)]
class Curso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private array $Estado = [];

    #[ORM\Column]
    private ?int $Duración = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $Id_Creador1 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): array
    {
        return $this->Estado;
    }

    public function setEstado(array $Estado): self
    {
        $this->Estado = $Estado;

        return $this;
    }

    public function getDuración(): ?int
    {
        return $this->Duración;
    }

    public function setDuración(int $Duración): self
    {
        $this->Duración = $Duración;

        return $this;
    }

    public function getIdCreador1(): ?Usuario
    {
        return $this->Id_Creador1;
    }

    public function setIdCreador1(?Usuario $Id_Creador1): self
    {
        $this->Id_Creador1 = $Id_Creador1;

        return $this;
    }
}
