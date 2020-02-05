<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $usu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsu(): ?string
    {
        return $this->usu;
    }

    public function setUsu(string $usu): self
    {
        $this->usu = $usu;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }
}
