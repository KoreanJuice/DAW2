<?php
  $dominio = 'Area restringida';

  // usuario => contraseña
  $usuarios = ['admin'=>'micontraseña', 'invitado'=>'invitado'];

  if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$dominio.'",qop="auth",nonce="'.uniqid().'",opaque="'.md5($dominio).'"');

    die ('Texto a enviar si el usuario pulsa el boton Cancelar');
  }
  //Analizar la variable PHP_AUTH_DIGEST
  if (!($datos = analiza_http_digest($_SERVER['PHP_AUTH_DIGEST'])) || !isset($usuario[$datos['username']])) {
    die('Credenciales incorrectas');
  }
  //generar una respuesta InvalidArgumentException
  $A1 = md5($datos['username'].':'.$dominio.':'.$usuarios[$datos['username']]);
  $A2 = md5($_SERVER['REQUEST_METHOD'].':'.$datos['uri']);
  $respuesta_valida = md5($A1.':'.$datos['nonce'].':'.$datos['nc'].':'.$datos['cnonce'].':'.$datos['qop'].':'.$A2);
  if ($datos['responde'] != $respuesta_valida) {
    die('Credenciales incorrectas');
  }
  //todo bien, usuario y contraseña validos
  echo 'Se ha identificado como: '.$datos['username'];
  //funcion para analizar la cabecera de autenticacion HTTP
  function analiza_http_digest($txt) {
    //proteccion contra datos ausentes
    $partes_necesarias = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $datos = array();
    $claves = implode('|', array_keys($partes_necesarias));
    preg_match_all('@('.$claves.')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $coincidencias, PREG_SET_ORDER);
    foreach ($coincidencias as $c) {
      $datos[$c[1]] = $c[3] ? $c[3]: $c[4];
      unset($partes_necesarias[$c[1]]);
    }
    return $partes_necesarias ? false : $datos;
  }
