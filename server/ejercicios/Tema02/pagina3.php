<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 3</title>
  </head>
  <body>
    <div class="">
      <strong>pagina 3</strong>
      <?php
        echo 'hola ',$_SESSION['nombre'], '<br>';
      ?>
    </div>
  </body>
</html>
