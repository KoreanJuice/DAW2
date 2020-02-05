<?php ob_start(); ?>
<h2>NOTICIAS</h2>
<?php foreach ($noticias as $key => $value) : ?>
    <h3><?= $value['titular']; ?></h3><br>
    <p>
        <?= $value['desarrollo']; ?><br>
    </p>
<?php endforeach; ?>
<?php $contenido = ob_get_clean();
include 'base.php'; ?>