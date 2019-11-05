<?php
function añadir_algo(&$cadena)
{
  $cadena .= 'y algo mas. ';
}
$cad = 'esto es una cadena, ';
añadir_algo($cad);
echo $cad;
//////////////////////////////////////////
echo "//<br><br>";
function hacerCafe($var = "capuchino")
{
  return "hacer una taza de $var\n";
}
echo hacerCafe();
echo hacerCafe(null);
echo hacerCafe("espresso");
//////////////////////////////////////////
echo "//<br><br>";
function hacerCafe2($var=["capuchino"], $fabricanteCafe = null)
{
  $aparato = is_null($fabricanteCafe)?"las manos":$fabricanteCafe;
  return "hacer una taza de ".join(", ",$var)." con $aparato\n";
}
echo hacerCafe2();
echo hacerCafe2(array("capuchino","lavazza"),"una tetera");
//////////////////////////////////////////
echo "//<br><br>";
function prueba ()//boolean $param)
{
}
prueba(true);
//////////////////////////////////////////
echo "//<br><br>";
function sum2(...$numeros)
{
  $acc = 0;
  foreach ($numeros as $n)
  {
    $acc += $n;
  }
  return $acc;
}
echo sum2(1,2,3,4);
//////////////////////////////////////////
echo "//<br><br>";
