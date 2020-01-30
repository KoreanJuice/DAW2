<?php

session_start();/*
if(isset($_SESSION['errores'])){
  $error = $_SESSION['errores'];
  $datos = $_SESSION['datos'];
}
*/
if(isset($_POST['ok'])){
  if($_POST['datos']['num1'] != 0){
    $diametro= $_POST['datos']['num1'];
  }else {
    $error['diametro']= 'Valor incorrecto. Debe ser númerico y distinto de 0';
  }
  if($_POST['datos']['num2']!=0){
    $altura= $_POST['datos']['num2'];
  }else {
    $error['radio']= 'Valor incorrecto. Debe ser númerico y distinto de 0';
  }

  if(!empty($error)){
  /*  foreach ($error as $key => $value) {
      echo "Error en $key. $value <br>";
    }*/
    $_SESSION['errores']=$error;
    $_SESSION['datos']=$_POST['datos'];
  }else {
    $volumen = M_PI * $diametro * $altura;
    echo "Volumen = $volumen<br>";
  }
}

 ?>

<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="<?=htmlentities($_SERVER['PHP_SELF'])?>" method="post">
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
      <input type="submit" name="ok" value="Calcular">
    </form>
    <?php if (isset($_POST['ok'])): ?>
      <label> Valor del volumen del cilindro:
        <input type="text" readonly name="vol" value="<?=$volumen?>">
      </label>
    <?php endif; ?>
  </body>
</html>
