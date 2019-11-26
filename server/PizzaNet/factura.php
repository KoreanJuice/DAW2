
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Factura</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
        rel="stylesheet">
  <style>
    * {
      font-family: 'Open Sans', sans-serif;
      font-size: 1.05em;
    }
  </style>
</head>
<body>
  <?php
    session_name('pizzaNet');
    session_start();
    if (isset($_SESSION['pizzanet']['name'])) {
      echo "<strong>nombre: </strong>".$_SESSION['pizzanet']['name']."<br>";
    }
    if (isset($_SESSION['pizzanet']['surname'])) {
      echo "<strong>apellido: </strong>".$_SESSION['pizzanet']['surname']."<br>";
    }
    if (isset($_SESSION['pizzanet']['tlf'])) {
      echo "<strong>telefono: </strong>".$_SESSION['pizzanet']['tlf']."<br>";
    }
    if (isset($_SESSION['pizzanet']['email'])) {
      echo "<strong>email: </strong>".$_SESSION['pizzanet']['email']."<br>";
    }
    if (isset($_SESSION['pizzanet']['pizza-tipo'])) {
      echo "<strong>tipo pizza: </strong>".$_SESSION['pizzanet']['pizza-tipo']."<br>";
    }
    if (isset($_SESSION['pizzanet']['pizza-tamanno'])) {
      echo "<strong>tamaño pizza: </strong>".$_SESSION['pizzanet']['pizza-tamanno']."<br>";
    }

    if (isset($_SESSION['pizzanet']['pizza-extra'])) {
      echo "<strong>extras: </strong>".$_SESSION['pizzanet']['pizza-extra']."<br>";
    }/* elseif ((isset($_SESSION['pizzanet']) && (!isset($_SESSION['pizzanet']['pizza-extra']))) {
      echo "<strong>extras: </strong>ninguno<br>";
    } else { echo ""; }*/

    if (isset($_SESSION['pizzanet']['cantidad'])) {
      echo "<strong>cantidad: </strong>".$_SESSION['pizzanet']['cantidad']."<br>";
    }
  ?>
</body>
</html>
