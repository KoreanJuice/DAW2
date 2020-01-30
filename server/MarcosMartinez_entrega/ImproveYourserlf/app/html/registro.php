<?php ob_start(); ?>
<h2>REGISTRO</h2>
<form>
    <input type="text" placeholder="Usuario" minlength="4" maxlength="16" require>
    <input type="password" placeholder="Contraseña" minlength="8" maxlength="16" require>
    <button type="submit">Registrarse</button>
</form>
<?php $contenido = ob_get_clean();
include 'base.php'; ?>