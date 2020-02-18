<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_3B3F3FAD7EB2C349", columns={"id_usuario_id"})})
 * @ORM\Entity
 */
class Estudiante
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=60, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=100, nullable=false)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=60, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=18, nullable=false)
     */
    private $provincia;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_id", referencedColumnName="id")
     * })
     */
    private $idUsuario;


}
