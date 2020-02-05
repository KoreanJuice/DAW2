<?php
  class foo {
    public static $variable = 'sample text';
    public function unMetodoEstatico() {
      echo 'estaticOwO'."<br>";
      echo self::$variable."<br>";
    }
  }

foo::unMetodoEstatico();
$nombre_clase = 'foo';
$nombre_clase::unMetodoEstatico(); // php 5.3.0
echo foo::$variable;
?>
