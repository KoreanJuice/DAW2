<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CursoRepository")
 */
class Curso
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $horas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Temas", mappedBy="idCurso")
     */
    private $temas;

    public function __construct()
    {
        $this->temas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getHoras(): ?int
    {
        return $this->horas;
    }

    public function setHoras(int $horas): self
    {
        $this->horas = $horas;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return Collection|Temas[]
     */
    public function getTemas(): Collection
    {
        return $this->temas;
    }

    public function addTema(Temas $tema): self
    {
        if (!$this->temas->contains($tema)) {
            $this->temas[] = $tema;
            $tema->setIdCurso($this);
        }

        return $this;
    }

    public function removeTema(Temas $tema): self
    {
        if ($this->temas->contains($tema)) {
            $this->temas->removeElement($tema);
            // set the owning side to null (unless already changed)
            if ($tema->getIdCurso() === $this) {
                $tema->setIdCurso(null);
            }
        }

        return $this;
    }
}
