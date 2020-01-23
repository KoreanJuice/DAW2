<?php
// la location es de una url puesta en el hosts en nuestro caso
$cliente = new SoapClient(null, [
    'location' => 'http://Bliblioteca2.edu/servicioWeb/servicio.php',
    'uri' => 'urn:Bliblioteca2.edu/servicioWeb/servicio.php',
    'trace' => 1
]);
try {
    $libro = $cliente->getLibro(rand(1, 21));
} catch (Exception $ex) {
    echo ($cliente->__getLastResponse());
    echo PHP_EOL;
    echo ($cliente->__getLastRequest());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro del mes</title>
    <style>
        table {
            width: 80%;
            margin: auto;
        }

        th {
            text-align: right;
            vertical-align: top;
            font-family: cursive;
        }

        td {
            font-family: Verdana;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($libro)) : ?>
        <table>
            <?php foreach ($libro as $key => $value) : ?>
                <tr>
                    <th><?= $key ?></th>
                    <th><?= $value ?></th>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No hay ningun libro con ese identificador</p>
    <?php endif; ?>
</body>
</html>