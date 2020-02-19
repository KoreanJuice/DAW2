<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matricula
 *
 * @ORM\Table(name="matricula", indexes={@ORM\Index(name="IDX_15DF188587CB4A1F", columns={"curso_id"}), @ORM\Index(name="IDX_15DF188559590C39", columns={"estudiante_id"})})
 * @ORM\Entity
 */
class Matricula
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
     * @var \DateTime
     *
     * @ORM\Column(name="f_matricula", type="date", nullable=false)
     */
    private $fMatricula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_inicio", type="date", nullable=false)
     */
    private $fInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_fin", type="date", nullable=false)
     */
    private $fFin;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiante_id", referencedColumnName="id")
     * })
     */
    private $estudiante;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCurso(): ?Curso
    {
        return $this->curso;
    }

    public function setCurso(?Curso $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getEstudiante(): ?Estudiante
    {
        return $this->estudiante;
    }

    public function setEstudiante(?Estudiante $estudiante): self
    {
        $this->estudiante = $estudiante;

        return $this;
    }

}
