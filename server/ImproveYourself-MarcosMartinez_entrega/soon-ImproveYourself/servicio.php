<?php
// no tengo esta DB asi que no funciona, pero es la segunda parte de cliente
require_once "libros.ing";
$server = new SoapServer(null, ['uri'=>'localhost/biblioteca/servicioWeb/servicio.php']);
$server->setClass('Libros');
$server->handle(); ?>