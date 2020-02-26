<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="web/css/main.css">
</head>

<body>
    <header>
        <h1>Biblioteca</h1>
    </header>
    <hr>
    <nav>
        <a href="#">Inicio</a> |
        <a href="#">Ver libros</a> |
        <a href="#">Recoger libro</a> |
        <a href="#">Devolver libro</a> |
        <a href="#">Log in</a> |
        <a href="#">Registrarse</a>
    </nav>
    <hr>
    <div id="contenido">
        <?= $contenido ?>
    </div>
    <hr>
    <footer>
        <p style="text-align: center;">
            - Pie de página -
        </p>
    </footer>
</body>

</html>