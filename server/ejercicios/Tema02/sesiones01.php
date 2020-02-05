<?php
//recuperar el valor de sesion id
$idAnterior = session_id();
//abrir /reactivar sesion
session_start();
//recuperar el valor de la sesion id despues
$idPosterior = session_name();
//mostrar valores
$hora = date("H:i:s");
echo "hora: $hora<br>\n";
echo "antes: $idAnterior<br>\n";
echo "despues: $idPosterior<br>\n";
?>
