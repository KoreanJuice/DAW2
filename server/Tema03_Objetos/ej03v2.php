<?php
  const UNO = 1;

  class foo {
    const DOS = UNO*2;
    const TRES = UNO + self::DOS;
    const SENTENCIA = 'El valor de TRES es '.self::TRES;
  }
  echo UNO;
  echo foo::DOS;
  echo foo::TRES;
  echo foo::SENTENCIA;
?>
