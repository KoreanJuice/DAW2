<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>procesamiento de los datos del formulario</title>
  </head>
  <body>
    <?php
      $nombre = $_GET['nombre'];
      $modulos = $_GET['modulos'];
      echo "nombre: ".$nombre."<br>";
      foreach ($modulos as $modulo) {
        echo "modulo: ".$modulo."<br>";
      }
      print_r($_GET);
    ?>
  </body>
</html>
