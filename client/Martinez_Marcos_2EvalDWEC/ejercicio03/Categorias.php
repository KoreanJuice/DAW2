<?php
header("Content-Type: application/xml");

$categorias["01"] = "Deportes";
$categorias["02"] = "Música";
$categorias["03"] = "Cine";
$categorias["04"] = "Literatura";

//Para iterar sobre el array $categorias:
// En cada iteración: la clave del elemento actual se asigna a la variable $codigo
// y el valor del elemento actual se asigna a la variable $nombre   
//El puntero interno del array avanza una posición (así en la próxima iteración se estará observando el siguiente elemento). 
foreach($categorias as $codigo => $nombre) {
   $elementos_xml[] = "<categoria>".
                        "<codigo>$codigo</codigo>".
                        "<nombre>$nombre</nombre>".
                      "</categoria>";
}

echo "<categorias>".join("", $elementos_xml)."</categorias>";

?>
