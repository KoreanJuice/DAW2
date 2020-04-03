<?php ob_start() ?>

<h1>MUCHAS GRACIAS! ha completado tu registro</h1>
<h2>Si tiene alguna duda vuelva al inicio</h2>
<a href="index.php?ctl=inicio">Vuelta al inicio!</a>
<h2>Si quiere registrarse en algo más puede volver al formulario</h2>
<a href="index.php?ctl=formulario">Vuelta al formulario!</a>

<?php $contenido = ob_get_clean() ?>

<?php include 'base.php' ?>
