<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="usu", type="string", length=60, nullable=false)
     */
    private $usu;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=255, nullable=false)
     */
    private $pwd;


}
