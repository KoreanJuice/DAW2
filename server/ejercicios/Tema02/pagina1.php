<?php
  session_start();
  $_SESSION['nombre'] = 'unNombre';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 1</title>
  </head>
  <body>
    <div class="">
      <strong>pagina 1</strong><br>
      <?php
        echo 'hola ',$_SESSION['nombre'],'<br>';
        echo 'session_id() = ',session_id(),'<br>';
        ?>
        <a href="pagina3.php">pagina 3</a>
    </div>
  </body>
</html>
