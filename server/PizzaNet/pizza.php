<?php
  error_reporting(error_reporting() & ~E_NOTICE);
  session_name('pizzaNet');
  session_start();
  if (isset($_POST['submit'])) {
    echo '<meta http-equiv="Refresh" content="0; url=factura.php">';
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['pizzanet'] =
    [
      'name'=>$_POST['name'],
      'surname'=>$_POST['surname'],
      'tlf'=>$_POST['tlf'],
      'email'=>$_POST['email'],
      'pizza-tipo'=>$_POST['pizza-tipo'],
      'pizza-tamanno'=>$_POST['pizza-tamanno'],
      'pizza-masa'=>$_POST['pizza-masa'],
      'pizza-extra'=>$_POST['pizza-extra'],
      'cantidad'=>$_POST['cantidad'],
    ];
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PizzaNet</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
          rel="stylesheet">
    <style>
      * {
        font-family: 'Open Sans', sans-serif;
      }
      body{
        margin: 0 auto;
        width: 800px;
      }
      h3{
        font-weight: normal;
        margin: 0px;
        padding: 0px;
      }
      #red{
        color: red;
      }
      input {
        display: block;
        margin: 5px;
      }
      div input{
        width: 300px;
      }
      select {
        width: 150px;
      }
      #pizzaSet div {
        display: flex;
        margin: 5px;
      }
      input#number {
        height: 50px;
        width: 70px;
      }
    </style>
  </head>
  <body>
    <h1>PizzaNet</h1>
    <h2>Formulario de pizzas</h2>
    <form action="pizza.php" method="post">
      <fieldset>
        <legend>Datos personales</legend>
        <div>
          <div>
            <label for="name">Nombre<span id="red">*</span></label>
          </div>
          <div>
            <input type="text" name="name" id="name"
            value="<?php
                  if (isset($_POST['name'])) {
                    echo $_POST['name'];
                  }
                  ?>" required>
          </div>
          <div>
            <label for="surname">Primer apellido<span id="red">*</span></label>
          </div>
          <div>
            <input type="text" name="surname" id="surname"
            value="<?php
                  if (isset($_POST['surname'])) {
                    echo $_POST['surname'];
                  }
                  ?>" required>
          </div>
          <div>
            <label for="tlf">Telefono<span id="red">*</span></label>
          </div>
          <div>
            <input type="tel" name="tlf" id="tlf"
            value="<?php
                  if (isset($_POST['tlf'])) {
                    echo $_POST['tlf'];
                  }
                  ?>"
              pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required>
          </div>
          <div>
            <label for="email">Correo electrónico<span id="red">*</span></label>
          </div>
          <div>
            <input type="email" name="email" id="email"
            value="<?php
                  if (isset($_POST['email'])) {
                    echo $_POST['email'];
                  }
                  ?>" required>
          </div>
        </div>
      </fieldset>
      <fieldset id="pizzaSet">
        <legend>Pizzas</legend>
        <div>
          <label for="pizza-tipo">Tipo<span id="red">*</span></label>
          <select class="pizza-tipo" name="pizza-tipo" size="7" required>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === 'margarita')?'selected':'';?>
             value="margarita">Margarita</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === '4quesos')?'selected':'';?>
             value="4quesos">4 quesos</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === 'bbq')?'selected':'';?>
             value="bbq">Barbacoa</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === '4estaciones')?'selected':'';?>
             value="4estaciones">4 Estaciones</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === 'carbonara')?'selected':'';?>
             value="carbonara">Carbonara</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === 'romana')?'selected':'';?>
             value="romana">Romana</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tipo'] === 'mediterranea')?'selected':'';?>
             value="mediterranea">Mediterranea</option>
          </select>
          <label for="pizza-tamanno">Tamaño<span id="red">*</span></label>
          <select class="pizza-tamanno" name="pizza-tamanno" size="7" required>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tamanno'] === 'normal')?'selected':'';?>
             value="normal">Normal</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tamanno'] === 'grande')?'selected':'';?>
             value="grande">Grande</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-tamanno'] === 'familiar')?'selected':'';?>
             value="familiar">Familiar</option>
          </select>
          <label for="pizza-masa">Masa<span id="red">*</span></label>
          <select class="pizza-masa" name="pizza-masa" size="7" required>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-masa'] === 'fina')?'selected':'';?>
             value="fina">Fina</option>
            <option
            <?php echo ($_SESSION['pizzaNet']['pizza-masa'] === 'normal')?'selected':'';?>
             value="normal">Normal</option>
          </select>
        </div>
        <div>
          <?php // TODO: array con los extras ?>
        <label for="pizza-extra">Extra</label>
        <select class="pizza-extra" name="pizza-extra" size="7" multiple>
          <option
          <?php echo ($_SESSION['pizzaNet']['pizza-extra'] === 'queso')?'selected':'';?>
           value="queso">Queso</option>
          <option
          <?php echo ($_SESSION['pizzaNet']['pizza-extra'] === 'pimiento')?'selected':'';?>
           value="pimiento">Pimientos</option>
          <option
          <?php echo ($_SESSION['pizzaNet']['pizza-extra'] === 'cebolla')?'selected':'';?>
           value="cebolla">Cebolla</option>
          <option
          <?php echo ($_SESSION['pizzaNet']['pizza-extra'] === 'jamon')?'selected':'';?>
           value="jamon">Jamón</option>
          <option
          <?php echo ($_SESSION['pizzaNet']['pizza-extra'] === 'pollo')?'selected':'';?>
           value="pollo">Pollo</option>
        </select>
        Cantidad<span id="red">*</span>
        <input type="number" name="cantidad" id="number"
        value="<?php echo ($_SESSION['pizzaNet']['cantidad'])?>" required>
        </div>
        <hr>
        <input type="submit" name="submit" value="Terminar">
      </fieldset>
    </form>
  </body>
</html>
