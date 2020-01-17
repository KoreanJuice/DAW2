<?php
// Ejemplo de controlador para página home de la aplicación
class CarteleraController
{ 
  public function cartelera()
  {
    require __DIR__ . '/../../app/plantillas/cartelera.php';
  }
  public function cartelera2() {
    if (true) {
      $owo = 'viva';
    }
    require __DIR__ . '/../../app/plantillas/cartelera.php';
  }
}
