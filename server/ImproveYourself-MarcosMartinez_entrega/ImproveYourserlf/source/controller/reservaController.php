<?php
class ReservaController
{
    public function reservar(array $act)
    {
        //print_r($idAct);
        if (isset($_POST['enterado'])) {
            header("location: index.php");
        }
        if (isset($_POST['ok'])) {
            require_once __DIR__ . '/../Modelo/reserva.php'; //recibe los datos
            $reser = $_POST['reser'];
            $reser['idAct'] = $act['idAct'];
            $reser['pagado'] = false;
            try {
                $reserObj = new Reserva($reser); //crea un objetos
                require_once __DIR__ . '/../repo/reservaRepositorio.php';
                (new ReservaRepositorio())->addReserva($reserObj);
                $exito = true;
            } catch (PDOException $ex) {
                $errores['mens'] = $ex->getMessage();
            } catch (ReservaException $ex) {
                $errores = $ex->getErrores();
                $errores['mens'] = $ex->getMessage();
            }
        }
        require_once __DIR__ . '/../../app/html/reservar.php';
    }
}
