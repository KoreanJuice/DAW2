<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatriculaRepository")
 */
class Matricula
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\curso")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\estudiante", inversedBy="matriculas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $estudiante;

    /**
     * @ORM\Column(type="date")
     */
    private $fMatricula;

    /**
     * @ORM\Column(type="date")
     */
    private $fInicio;

    /**
     * @ORM\Column(type="date")
     */
    private $fFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurso(): ?curso
    {
        return $this->curso;
    }

    public function setCurso(?curso $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getEstudiante(): ?estudiante
    {
        return $this->estudiante;
    }

    public function setEstudiante(?estudiante $estudiante): self
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    public function getFMatricula(): ?\DateTimeInterface
    {
        return $this->fMatricula;
    }

    public function setFMatricula(\DateTimeInterface $fMatricula): self
    {
        $this->fMatricula = $fMatricula;

        return $this;
    }

    public function getFInicio(): ?\DateTimeInterface
    {
        return $this->fInicio;
    }

    public function setFInicio(\DateTimeInterface $fInicio): self
    {
        $this->fInicio = $fInicio;

        return $this;
    }

    public function getFFin(): ?\DateTimeInterface
    {
        return $this->fFin;
    }

    public function setFFin(\DateTimeInterface $fFin): self
    {
        $this->fFin = $fFin;

        return $this;
    }
}
