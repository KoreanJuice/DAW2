<?php
  spl_autoload_register(function ($nombre_clase)
  {
    include $nombre_clase.'.php';
  });

  $obj = new MiClase();
  $obj1 = new MiClase1(); // no existe
  $obj2= new MiClase2(); // no existe

  echo $obj::CONSTANTE;
?>
