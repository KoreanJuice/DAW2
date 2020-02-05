<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesion pagina 2</title>
  </head>
  <body>
    <div class="">
      <?php
      echo '$_SESSION["nombre"] =',
        isset($_SESSION['nombre'])?$_SESSION['nombre']:'','<br>';
      echo '$_SESSION["informacion"]["apellido"]',
        isset($_SESSION['informacion']['apellido'])?
        $_SESSION['informacion']['apellido']:'','<br>';
      ?>
    </div>
  </body>
</html>
