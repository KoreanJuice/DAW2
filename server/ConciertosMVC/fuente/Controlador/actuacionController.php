<?php
//Este método es el que se ejecuta. el backend, llamado por el frontend del index
class ActuacionController
{
    public function verActuaciones()
    {
        require_once __DIR__ . '/../Repositorio/ActuacionRepositorio.php';
        try {
            $actuaciones = (new ActuacionRepositorio)->findAllActuaciones(); //llamamos la metodo que devuelve un array; Solicita la informacion
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
        //la variable de arriba corresponde al primer foreach de verActuaciones.php
        include_once __DIR__ . '/../../app/plantillas/verActuaciones.php';
    }
}
