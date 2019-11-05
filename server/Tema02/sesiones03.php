<?php
session_start();
echo 'Bienvenido a la pagina #1';
//el formato para inicializar la variable de sesion es
//$_SESSION['nombre_var_sesion'] = 'valor de la variable'
// a continuacion, inicaimos tres variables de enchant_dict_add_to_session
$_SESSION['colorfav'] = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['time'] = time();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 1</title>
  </head>
  <body>
    <div class="">
      <strong>pagina 1</strong>
      <?php
        echo 'animal = ',$_SESSION['animal'],'<br>';
      ?>
      <a href="pagina2.php">pagina 2</a>
    </div>
  </body>
</html>
