<?php
session_start();
//guardar dos informaciones den la session
$_SESSION['nombre'] = 'owo';
$_SESSION['informacion'] =
  ['nombre'=>'awa', 'apellido'=>'de uwu'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesion pagina 2</title>
  </head>
  <body>
    <div class="">
      <a href="pagina2.php">pagina 2</a>
    </div>
  </body>
</html>
