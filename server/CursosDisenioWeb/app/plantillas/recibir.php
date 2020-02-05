<?php ob_start() ?>

    <?php $contenido = ob_get_clean() ?>
    <?php
        $error = true;
        $errorText = (string)'';
        $nombre = $_POST['name'];
        $telefono = $_POST['tel'];
        if (!empty($nombre) && !empty($telefono)) {
            $error = false;
            $contenido =  '<h3>Reserva realizada</h3>'.
             "<strong>$nombre</strong> gracias por la compra<br>".
             "deberá aportar su numero de telefono: <strong>$telefono</strong> en la entrada del teatro<br>";
        } else {
            $errorText = '<h1>error general</h1>';
            $contenido = $errorText;
        }
    ?>
    <?php require_once 'base.php' ?>
