<?php error_reporting(E_ALL /*& ~E_NOTICE*/) ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primer ejemplo</title>
  </head>
  <body>
    <h1>Primer ejemplo: </h1>
    <?php echo "Hola mundo.";?>
    <p>Esto es ignorado por PHP y se muestra en el navegador</p>
    <?php echo 'Mientras que esto va a ser interpretado'; ?>
    <p>Esto tambien es ignorado por PHP y se muestra en el navegador</p>
    <!---->
    <?php // esto es un comentario de una linea ?>
    <?php # esto es otra forma de comnentario de una linea ?>
    <?php /* esta es la forma de
    escribir comentarios
    de varias lineas*/ ?>
    <!---->
    <?php // echo puede imprimir mas de un argumento a diferencia de print ?>
    <?php echo "ejemplo de impresion de <br>". "cadena ", "de caracteres<br>" ?>
    <?php print "ejemplo de impresion de cadena de caracteres<br>" ?>
    <?php echo 17703,"<br>" ?>
    <!--?php echo $owo ?-->
    <?php $variableResultado = 'owo' ?>
    <?= $variableResultado,"<br>"?>
    <?php echo ($variableResultado."<br>") ?>
    <?php #echo ("no ", "se pueden varias cadenas con parentesis") ?>
    <?php #print ("no ", "se pueden varias cadenas con parentesis") ?>
    <?php echo "tatata ' ' <br>" ?>
    <?php echo "escapar comillas en mismas comillas con \\\"<br>" ?>
    <?php echo "tambien se puede escapar simbolos con \\\$<br>" ?>
    <!---->
    <?php $a=1 ?>
    <?php
      $b=$a;
      if($a == $b)
      { echo '$a mantiene el mismo valor que $b => ' , $a , "<br>";}
      { echo "$a mantiene el mismo valor que $b => " , $a, "<br>";}
    ?>
    <!---->
    <?php $parrafo = <<<IDHeredoc
    Esto es "una" cadena 'Heredoc' en
    mas de una linea "$a" '$a' \$a = $a
    IDHeredoc;?>
    <?php $parrafo = <<<'IDNowdoc'
    Esto es "una" cadena 'Heredoc' en
    mas de una linea "$a" '$a' \$a = $a<br>
    IDNowdoc;?>
    <?= $parrafo ?>
    <!---->
    <?php $var1 = 15 ?>
    <?php
      $var2 = true;
      if($var2 == true)
      { echo 'mentira<br>';}
    ?>
    <!---->
    <?php
      $foo = 'Bob';                 // asigna el valor 'Bob' a $foo
      $bar = &$foo;                 // referenciar $foo via $bar
      $bar = "Mi nombre es $bar";   // modifica $bar..
      echo $bar,"<br>";
      echo $foo,"<br>";
    ?>
    <!---->
    <?php
      // una variable no definida y no referenciada (sin contexto de uso)
      // imprime NULL
      var_dump($variable_indefinida);
      // uso boolean
      // imprime 'false'
      echo ($booleano_indefinido ? "true\n" : "false\n");
      // uso de una cadena
      // imprime string(3) "abc"
      $cadena_indefinida .= 'abc';
      var_dump($cadena_indefinida);
      // uso de un entero
      // imprime int(25)
      /*$int_indefinido += 25;  // 0 + 25 = 25
      var_dump($int_indefinido);
      echo "<br>";*/
    ?>
    <!---->
    <?php
      var_dump($int_indefinido);
      echo "<br>";
      // comprobacion de existencia de variable y asignacion de valor
      $int_indefinido = (isset($int_indefinido))? $int_indefinido : 0;
      var_dump($int_indefinido);
    ?>
  </body>
</html>
