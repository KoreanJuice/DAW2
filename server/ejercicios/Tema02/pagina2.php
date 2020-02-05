<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 2</title>
  </head>
  <body>
    <div class="">
      <strong>pagina 2</strong><br>
      <?php
        echo 'animal= ',$_SESSION['animal'], '<br>';
        $_SESSION['animal'] = '?'; //modifica los datos de sesion
        //session_abort();//anular la sesion .. no guarda, pero mantiene local
        session_reset();//anular la sesion .. desecha cambios local
        echo 'animal= ',$_SESSION['animal'],'<br>';
        ?>
        <a href="pagina3.php">pagina 3</a>
    </div>
  </body>
</html>
