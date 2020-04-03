<?php

namespace App\Repositorios;
use ConexionBd;
use PDOException;
use App\Modelos\Candidato;

require_once __DIR__ . '/../../core/conexionBd.inc';
require_once __DIR__ . '/../Modelo/Candidato.php';

class CandidatoRepo {
    
    public static function insertCandidato(Candidato $candidato) {
        $sql1 = 'INSERT INTO candidato(nombre, apellido, tlfno, eCorreo, direccion) VALUES 
                (:nombre, :apellido, :tlfno, :eCorreo, :direccion)';

        $sql2 = 'INSERT INTO candidatoa(idCandidato, idConcurso) VALUES (:idCandidato, :idConcursos)';

        try {
            $con = (new ConexionBd())->getConexion();
            $con->beginTransaction();

            $smt = $con->prepare($sql1);
            $smt->bindValue(':nombre', $candidato->getNombre());
            $smt->bindValue(':apellido', $candidato->getApellido());
            $smt->bindValue(':tlfno', $candidato->getTlfno());
            $smt->bindValue(':eCorreo', $candidato->getECorreo());
            $smt->bindValue(':direccion', $candidato->getDireccion());
            $smt->execute();

            $idCandidato = $con->lastInsertId();
            foreach ($candidato->getConcursos() as $key => $value) {
                $smt = $con->prepare($sql2);
                $smt->bindValue(':idCandidato', $idCandidato);
                $smt->bindValue(':idConcursos', $value);
                $smt->execute();
            }
            $con->commit();
        } catch (PDOException $ex) {
            $con->rollBack();
            throw $ex;
        } finally {
            $smt = null;
            $con = null;
        }
    }

}