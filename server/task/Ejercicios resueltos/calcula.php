<?php
$num1= is_numeric($_POST['num1'])?$_POST['num1']:0;
$num2= is_numeric($_POST['num2'])?$_POST['num2']:0;

echo "$num1 + $num2 = ".($num1 + $num2) . "\n<br>";
echo "$num1 - $num2 = ".($num1 - $num2). "\n<br>";
echo "$num1 * $num2 = ".($num1 * $num2). "\n<br>";
echo "$num1 / $num2 = ".((!$num2)?"infinito":($num1 / $num2)). "\n<br>";
echo "$num1 / $num2 = ".((!$num2)?"infinito":intdiv($num1,$num2)). "\n<br>";
echo "$num1 % $num2 = ".((!$num2)?"Denominador 0. No es posible realizar la operación":($num1 % $num2)). "\n<br>";
 ?>
