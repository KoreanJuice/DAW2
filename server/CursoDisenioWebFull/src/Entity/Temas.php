<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temas
 *
 * @ORM\Table(name="temas", indexes={@ORM\Index(name="IDX_336D9430D710A68A", columns={"id_curso_id"})})
 * @ORM\Entity
 */
class Temas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tema", type="smallint", nullable=false)
     */
    private $numTema;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivos", type="string", length=255, nullable=false)
     */
    private $objetivos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_curso_id", referencedColumnName="id")
     * })
     */
    private $idCurso;

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

    public function getIdCurso(): ?Curso
    {
        return $this->idCurso;
    }

    public function setIdCurso(?Curso $idCurso): self
    {
        $this->idCurso = $idCurso;

        return $this;
    }


}
