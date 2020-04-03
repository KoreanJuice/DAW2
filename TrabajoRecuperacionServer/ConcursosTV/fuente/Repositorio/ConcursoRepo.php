<?php

namespace App\Repositorios;
require_once __DIR__ . '/../../core/conexionBd.inc';

use ConexionBd;
use PDO;
use PDOException;

class ConcursoRepo {
    
    public static function findAllConcursos(): array {
        $sql = 'SELECT idConcurso, nombre, descripcion FROM Concurso';

        try {
            $con = (new ConexionBd())->getConexion();
            $smt = $con->prepare($sql);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            throw $ex;
        } finally {
            $smt = null;
            $con = null;
        }
    }

}