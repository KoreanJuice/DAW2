<?php
class Prueba {
  static public function getNew(){
    return new static;
  }
}
class Hija extends Prueba {}
$obj1 = new Prueba();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
$obj3 = Prueba::getNew();
var_dump($obj3 instanceof Prueba);
$obj4 = Hija::getNew();
var_dump($obj4 instanceof Hija);
?>
