<?php ob_start() ?>
  <h1>TeleConcurso</h1>
  <h3>La tele de los maratones de concursos</h3>
  <h2>¿Quiéres concursar en alguno de nuestros concursos?</h2>
  <h4>Pincha en el enlace que sigue y rellena el formulario para iniciar el proceso de selección</h4>
  <a href="index.php?ctl=formulario">¡¡¡Quiéro concursar!!!</a>
<?php $contenido = ob_get_clean() ?>

<?php include 'base.php' ?>
