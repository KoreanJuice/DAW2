<!-- Esto una vista. Trae los datos del repositorio -->
<?php ob_start();
setlocale(LC_ALL, 'es'); ?>
<h2>Espectáculos programados para esta temporada</h2>
<?php foreach ($actuaciones as $key => $value) : ?>
    <details>
        <summary>
        Grupo: <a href="index.php?ctl=reservar&act=<?= urlencode(serialize($value)); ?>"><?= $value['Grupo']; ?></a><br>
        </summary>
        Día: <?= $value['Fecha']; ?><br>
        Hora: <?= $value['Hora']; ?><br>
        Entradas disponibles: <?= $value['Disponibles']; ?><br>
        Precio: <?= $value['Precio']; ?>€<br>
    </details>
<?php endforeach; ?>
<?php $contenido = ob_get_clean();
include 'base.php'; ?>