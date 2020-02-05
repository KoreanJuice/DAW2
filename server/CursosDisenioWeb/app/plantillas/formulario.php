<?php ob_start() ?>


    <?php $contenido = ob_get_clean() ?>
    <?php
        $nombre_espectaculo = '';
        $actuacion = '';
        $contenido = '
        <h2>Venta de entradas</h2>
        <p>Para '.$nombre_espectaculo.', siendo la actuacion nº '.$actuacion.'</p>'.
        '<form action="index.php?ctl=recibir" method="post">
            <label for="name">Nombre</label><br>
            <input type="text" name="name" maxlength="25" minlength="3" placeholder="nombre" required autofocus><br>
            <label for="tel"></label>Telefono<br>
            <input type="tel" name="tel" maxlength="9" minlength="9" placeholder="666666666" required><br>
            <input type="submit" value="Enviar">
        </form>';
    ?>
    <?php require_once 'base.php' ?>
