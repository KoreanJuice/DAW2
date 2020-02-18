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
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var \Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiante_id", referencedColumnName="id")
     * })
     */
    private $estudiante;


}
