<?php ob_start() ?>
  <head>
    <link rel="stylesheet" href="web/css/form.css">
  </head>
  <form action="index.php?ctl=registro" method="post">
    <label>Nombre
      <input type="text" name="nombre" minlength="2" maxlength="30" placeholder="Nombre..." required autofocus><br>
    </label>
    <label>Apellido
      <input type="text" name="apellido" minlength="2" maxlength="30" placeholder="Apellido..." required><br>
    </label>
    <label>Teléfono
      <input type="tel" name="tlfno" minlength="9" maxlength="9" placeholder="648126846" required><br>
    </label>
    <label>eCorreo
      <input type="email" name="eCorreo" minlength="5" maxlength="35" placeholder="ejemplo@gemail.com" required><br>
    </label>
    <label>Dirección
      <input type="text" name="direccion" minlength="2" maxlength="35" placeholder="c/ Gran Vía 75..." required><br>
    </label>

    <?php foreach ($concursos as $key => $value): ?>
      <label>
        <input type="checkbox" name="concursos[]" value="<?=$value['idConcurso']?>" >
        <span id="nameConcursos"><?=$value['nombre']?></span> - <span id="descConcursos"><?=$value['descripcion']?></span><br>
      </label>
    <?php endforeach; ?>

    <button type="submit" name="submit" value="submit">Enviar</button>
    <button type="reset" name="cancelar" value="cancelar">Cancelar</button>
  </form>
  <?php 
    if (isset($error)) {
      echo('<span id="error">'.$error.'</span>');
    }
  ?>
<?php $contenido = ob_get_clean() ?>

<?php include 'base.php' ?>
