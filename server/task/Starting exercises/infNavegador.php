<!--ejercicio01-->
<?php
  echo ">> ejercicio01<br>";
  echo $_SERVER['HTTP_USER_AGENT'];
?>
<!--ejercicio03-->
<?php
  echo "<br>>> ejercicio03<br>";
  $var1 = 5;
  $var2 = 10;
  echo "$var1 + $var2 son ", ($var1+$var2), "<br>";
  echo "$var1 * $var2 son ", ($var1*$var2), "<br>";
  echo "$var1 / $var2 (division entera) es ", (int)($var1/$var2), "<br>";
  echo "$var1 / $var2 (division real) es ", ($var1/$var2), "<br>";
  echo "$var1 modulo $var2 es ", ($var1%$var2);
?>
<!--ejercicio02-->
<?php
  echo "<br>>> ejercicio02<br>";
  phpinfo()
?>
