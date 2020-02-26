<?php
session_start();

require_once __DIR__ . '/fuente/controller/defaultController.php';
require_once __DIR__ . '/app/config/rutas.php';

if (isset($_GET['ctl'])) {
    if (isset($mapeoRutas[$_GET['ctl']])) {
        $ruta = $_GET['ctl'];
        $param = isset($_GET['act']) ? unserialize(urldecode(stripslashes($_GET['act']))) : '';
    } else {
        header('Status: 404 Not Found');
        echo '<html><body>
                <h1>Error 404: No existe la ruta <i>' . $_GET['ctl'] . '</i></h1>
              </body></html>';
        exit;
    }
} else {
    $ruta = 'index';
}

$controlador = $mapeoRutas[$ruta];

if (method_exists($controlador['controller'], $controlador['action'])) {
    if (empty($param)) {
        call_user_func(array(new $controlador['controller'], $controlador['action']));
    } else {
        call_user_func(array(new $controlador['controller'], $controlador['action']), $param);
    }
} else {
    header('Status: 404 Not found');
    echo '<html><body>
            <h1>Error 404: No existe el controlador <i>' .
            $controlador['controller'] .
            '->' . $controlador['action'] . '</i></h1>
          </body></html>';
}