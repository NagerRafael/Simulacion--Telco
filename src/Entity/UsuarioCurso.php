<?php

namespace App\Entity;

use App\Repository\UsuarioCursoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioCursoRepository::class)]
class UsuarioCurso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Curso::class)]
    private Collection $Id_Usuario1;

    #[ORM\ManyToMany(targetEntity: Usuario::class)]
    private Collection $Id_Curso2;

    public function __construct()
    {
        $this->Id_Usuario1 = new ArrayCollection();
        $this->Id_Curso2 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Curso>
     */
    public function getIdUsuario1(): Collection
    {
        return $this->Id_Usuario1;
    }

    public function addIdUsuario1(Curso $idUsuario1): self
    {
        if (!$this->Id_Usuario1->contains($idUsuario1)) {
            $this->Id_Usuario1->add($idUsuario1);
        }

        return $this;
    }

    public function removeIdUsuario1(Curso $idUsuario1): self
    {
        $this->Id_Usuario1->removeElement($idUsuario1);

        return $this;
    }

    /**
     * @return Collection<int, Usuario>
     */
    public function getIdCurso2(): Collection
    {
        return $this->Id_Curso2;
    }

    public function addIdCurso2(Usuario $idCurso2): self
    {
        if (!$this->Id_Curso2->contains($idCurso2)) {
            $this->Id_Curso2->add($idCurso2);
        }

        return $this;
    }

    public function removeIdCurso2(Usuario $idCurso2): self
    {
        $this->Id_Curso2->removeElement($idCurso2);

        return $this;
    }
}
