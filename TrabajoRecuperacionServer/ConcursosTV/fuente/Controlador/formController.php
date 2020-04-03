<?php

namespace App\Controladores;
use App\Repositorios\ConcursoRepo;
use App\Repositorios\CandidatoRepo;
use App\Modelos\Candidato;
use PDOException;
use Exception;

require_once __DIR__ . '/../Repositorio/ConcursoRepo.php';
require_once __DIR__ . '/../Repositorio/CandidatoRepo.php';
require_once __DIR__ . '/../Modelo/Candidato.php';
  
class FormController
{ public function setConcursos()
  { 
    try {
      $concursos = ConcursoRepo::findAllConcursos();
    } catch (PDOException $ex) {
      die($ex->getMessage());
    }

    try {
      if (isset($_POST['submit'])) {
        $candidato = new Candidato($_POST['nombre'], $_POST['apellido'],
                                  $_POST['tlfno'], $_POST['eCorreo'],
                                  $_POST['direccion'], (isset($_POST['concursos'])? $_POST['concursos']:[]));
        CandidatoRepo::insertCandidato($candidato);
      }
    } catch (Exception $ex) {
      $error = $ex->getMessage();
    }

    require __DIR__ . '/../../app/plantillas/form.php';
  }
  

}
