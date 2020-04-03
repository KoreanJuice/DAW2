<?php

namespace App\Controladores;

class DefaultController
{ public function inicio()
  { 
    require __DIR__ . '/../../app/plantillas/inicio.php';
  }
}
