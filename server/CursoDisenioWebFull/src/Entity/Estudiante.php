<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EstudianteRepository")
 */
class Estudiante
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $calle;

    /**
     * @ORM\Column(type="string", length=18)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $tlfno;

    /**
     * @ORM\Column(type="date")
     */
    private $fNacimiento;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Usuario", inversedBy="estudiante", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Matricula", mappedBy="idEstudiante")
     */
    private $matriculas;

    public function __construct()
    {
        $this->matriculas = new ArrayCollection();
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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getTlfno(): ?string
    {
        return $this->tlfno;
    }

    public function setTlfno(string $tlfno): self
    {
        $this->tlfno = $tlfno;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getFNacimiento(): ?\DateTimeInterface
    {
        return $this->fNacimiento;
    }

    public function setFNacimiento(\DateTimeInterface $fNacimiento): self
    {
        $this->fNacimiento = $fNacimiento;

        return $this;
    }

    /**
     * @return Collection|Matricula[]
     */
    public function getMatriculas(): Collection
    {
        return $this->matriculas;
    }

    public function addMatricula(Matricula $matricula): self
    {
        if (!$this->matriculas->contains($matricula)) {
            $this->matriculas[] = $matricula;
            $matricula->setEstudiante($this);
        }

        return $this;
    }

    public function removeMatricula(Matricula $matricula): self
    {
        if ($this->matriculas->contains($matricula)) {
            $this->matriculas->removeElement($matricula);
            // set the owning side to null (unless already changed)
            if ($matricula->getEstudiante() === $this) {
                $matricula->setEstudiante(null);
            }
        }

        return $this;
    }
}
