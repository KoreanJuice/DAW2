<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ImproveYourself</title>
  <link rel="stylesheet" type="text/css" href='css/main.css'>
</head>
<body>
  <header>
    <h1>Bienvenidos a Summers in Logroño</h1>
  </header>
  <nav>
    <hr>
    <!-- En general, la mayoría de los enlaces serán a la página index.php
           y una asignación a la variable 'ctl'. El valor de la variable deberá
           ser analizada en la página index.php de cara a encontrar la ruta del
           controlador (y método) que debe procesar la petición
    -->
    <a href="index.php?ctl=inicio">Inicio</a> |
    <a href="index.php?ctl=verTodosEspectaculos">Ver Actuaciones</a> |
    <a href="index.php?ctl=noticias">Noticias</a> |
    <a href="index.php?ctl=actualizar">Actualizar espectaculos</a> |
    <a href="index.php?ctl=identificacion">Identificación</a> |
    <a href="index.php?ctl=registro">Registro</a>
    <hr>
  </nav>
  <div id="contenido">
    <?= $contenido ?>
  </div>
  <footer>
    <hr>
    <p align="center">- Pie de página -</p>
  </footer>
</body>
</html>