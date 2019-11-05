<?php

$ok1 = setcookie('nombre', 'juan');
$ok2 = setcookie('apellido', 'saez', time()+(30*24*3600));
if ($ok1 and $ok2) {
  $mensaje='cookie in';
}
else {
  $mensaje='no cookie';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 1</title>
  </head>
  <body>
    <div class="">
      <?=$mensaje;
      ?><br>
      <a href="cookiePagina2.php">pagina 2</a>
    </div>
  </body>
</html>
