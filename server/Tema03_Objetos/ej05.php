<?php
spl_autoload_register(function ($class_name)
{
  include $class_name.'.php';
});
  class OtraClase extends MiClase {
    public static $my_static = 'variable estatica';

    public static function doubleColon() {
      echo parent::CONSTANTE."\n";
      echo self::$my_static."\n";
    }
  }
  $nombreClase = 'OtraClase';
  echo $nombreClase::doubleColon(); //php 5.3.0
  OtraClase::doubleColon();
  ?>
