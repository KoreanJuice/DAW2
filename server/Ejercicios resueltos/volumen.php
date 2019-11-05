<?php
if(session_name()!='hola'){
  session_name('hola');
}

session_start();
echo session_id(). ' '.session_name(). "<br>";
/*$error=[];
$datos=[];*/
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
  header('Location: volumenCil.php');
}else {
  $volumen = M_PI * $diametro * $altura;
  echo "Volumen = $volumen<br>";
  $_SESSION=[];
  setcookie(session_name(),'',time()-1,'/');
  session_destroy();
  echo session_name(). " ",session_id();
}
