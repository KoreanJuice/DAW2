<!--?php
function duplicar ($var){
  $temp = $var * 2;
}
$variable = 5;
duplicar($variable);
echo "el valor de la variable \$temp es: $temp"
?-->
<!---->
<?php
$a = 1; /* ambito global */
function test(){
  echo $a; /* referencia a una variable del ambito local */
}
  test();
?>
<!---->
<?php
function duplicar ($var){
  global $temp;
  $temp = $var * 2;
}
$variable = 5;
duplicar($variable);
echo "el valor de la variable \$temp es: $temp"
?>
