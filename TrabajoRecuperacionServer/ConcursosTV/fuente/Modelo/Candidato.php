<?php

namespace App\Modelos;
use Exception;

class Candidato {
    private $nombre;
    private $apellido;
    private $tlfno;
    private $eCorreo;
    private $direccion;
    private $concursos;

    function __construct($nombre, $apellido, $tlfno, $eCorreo, $direccion, $concursos)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setTlfno($tlfno);
        $this->setECorreo($eCorreo);
        $this->setDireccion($direccion);
        $this->setConcursos($concursos);
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setTlfno($tlfno){
        $regTlf = '/(6|7)[0-9]{8}/';
        if (preg_match($regTlf, $tlfno)) {
            $this->tlfno = $tlfno;
        } else {
            throw new Exception('error al introduccir el tflno');
        }

    }

    public function setECorreo($eCorreo){
        $regECorreo = '/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/';
        if (preg_match($regECorreo, $eCorreo)) {
            $this->eCorreo = $eCorreo;
        } else {
            throw new Exception('error al introduccir el eCorreo');
        }
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setConcursos($concursos){
        if (!empty($concursos)) {
            $this->concursos = $concursos;
        } else {
            throw new Exception('marca algún concurso');
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getTlfno(){
        return $this->tlfno;
    }

    public function getECorreo(){
        return $this->eCorreo;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getConcursos(){
        return $this->concursos;
    }
}