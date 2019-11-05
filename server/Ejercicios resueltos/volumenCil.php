<?php
if(session_name()!='hola'){
  session_name('hola');
}

session_start();
if(isset($_SESSION['errores'])){
  $error = $_SESSION['errores'];
  $datos = $_SESSION['datos'];
}/*/else {
  $error = [];
  $datos = [];
}*/
echo session_name().'<br>';
 ?>

<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="volumen.php" method="post">
      <label>Diámetro de la base:
        <input type="text" name="datos[num1]" value="<?=isset($datos['num1'])?$datos['num1']:''?>">
          <?=isset($error['diametro'])?'<span style="color:red">'.$error['diametro'].'</span>':''?>
        <br>
      </label>
      <label>Altura del cilindro:
        <input type="text" name="datos[num2]" value="<?=isset($datos['num2'])?$datos['num2']:''?>">
          <?=isset($error['radio'])?'<span style="color:red">'.$error['radio'].'</span>':''?>
<br>
      </label>
      <input type="submit" name="Calcular" value="Calcular">
    </form>
  </body>
</html>
