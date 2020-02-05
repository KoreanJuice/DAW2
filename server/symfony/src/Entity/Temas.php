<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemasRepository")
 */
class Temas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $numTema;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\curso", inversedBy="temas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCurso;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objetivos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumTema(): ?int
    {
        return $this->numTema;
    }

    public function setNumTema(int $numTema): self
    {
        $this->numTema = $numTema;

        return $this;
    }

    public function getIdCurso(): ?curso
    {
        return $this->idCurso;
    }

    public function setIdCurso(?curso $idCurso): self
    {
        $this->idCurso = $idCurso;

        return $this;
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

    public function getObjetivos(): ?string
    {
        return $this->objetivos;
    }

    public function setObjetivos(string $objetivos): self
    {
        $this->objetivos = $objetivos;

        return $this;
    }
}
