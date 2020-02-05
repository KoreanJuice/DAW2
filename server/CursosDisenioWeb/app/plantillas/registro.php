<?php ob_start() ?>
<h2>Registro</h2>
<form method="post">
    <label for="name">Nombre</label><br>
    <input type="text" name="usuario[name]" value="<?= isset($_POST['usuario']['name'])? $_POST['usuario']['name']: ''; ?>" minlength="3" maxlength="25" placeholder="nombre" required autofocus><br>
    <label for="dni"></label>DNI<br>
    <input type="dni" name="usuario[dni]" value="<?= isset($_POST['usuario']['dni'])? $_POST['usuario']['dni']: ''; ?>" maxlength="9" minlength="9" placeholder="666666666" required><br>
    <input type="submit" name="registrar" value="Enviar">
</form>


<?php $contenido = ob_get_clean() ?>
<?php require_once 'base.php' ?>

