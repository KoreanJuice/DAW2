<?php
header("Content-Type: application/xml");

$aficiones["01"]["0014"] = "Fútbol";
$aficiones["01"]["0029"] = "Baloncesto";
$aficiones["01"]["0034"] = "Balonmano";
$aficiones["02"]["0035"] = "Rock";
$aficiones["02"]["0066"] = "Blues";
$aficiones["02"]["0376"] = "Rap";
$aficiones["02"]["0040"] = "Clásica";
$aficiones["03"]["0005"] = "Terror";
$aficiones["03"]["0007"] = "Ciencia Ficción";
$aficiones["03"]["0010"] = "Musical";
$aficiones["04"]["0055"] = "Novela Negra";
$aficiones["04"]["0050"] = "Novela Romántica";
$aficiones["04"]["0058"] = "Novela Histórica";

$categoria = $_POST["categoria"];
$lasAficiones = $aficiones[$categoria];

foreach($lasAficiones as $codigo => $nombre) {
   $elementos_xml[] = "<aficion>".
                           "<codigo>$codigo</codigo>".
                           "<nombre>$nombre</nombre>".
                       "</aficion>";
}

echo "<aficiones>".join("", $elementos_xml)."</aficiones>";

?>
