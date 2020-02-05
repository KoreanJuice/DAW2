
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina 2</title>
  </head>
  <body>
    <div>
      <?php
      if (isset($_COOKIE['nombre'])) {
        echo "\$_COOKIE[\'nombre\'] =". $_COOKIE['nombre']."<br>";
      } else {echo "\$_COOKIE['nombre'] = <br>";}
      if (isset($_COOKIE['apellido'])) {
        echo "\$_COOKIE['apellido'] =". $_COOKIE['apellido']."<br>";
      } else {echo "\$_COOKIE['apellido'] = <br>";}
      ?>
      <a href="cookiePagina2.php">pagina 2</a>
    </div>
  </body>
</html>
