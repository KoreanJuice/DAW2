<?php ob_start() ?>


    <?php $contenido = ob_get_clean() ?>
    <?php
        $contenido = '<h2>FUNCIONES DE TEATRO - PRONTO</h2>'.
        '<a href="index.php?ctl=formulario">link a formulario de venta</a>';
    ?>
    <?php require_once 'base.php' ?>
