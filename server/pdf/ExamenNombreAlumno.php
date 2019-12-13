<?php
$b=["Nalda"=>["Nalda"=>["Resultado"=>" ","Amarillas" =>" ","Rojas"=>" ","Penalty"=>" ",],
              "Haro"=>["Resultado"=>"3-2","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"1",],
              "Zafra"=>["Resultado"=>"5-3","Amarillas"=>"0","Rojas"=>"1","Penalty"=>"2",],
              "Alba"=>["Resultado"=>"7-1","Amarillas" => "5","Rojas"=>"2","Penalty"=>"1",],
              "Calpe"=>["Resultado"=>"0-2","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
             ],
    "Haro"=>["Nalda"=>["Resultado"=>"0-11","Amarillas"=>"4","Rojas"=>"2","Penalty"=>"4",],
             "Haro"=>["Resultado"=>" ","Amarillas"=>" ","Rojas"=>" ","Penalty"=>" ",],
             "Zafra"=>["Resultado"=>"2-1","Amarillas"=>"0","Rojas"=>"0","Penalty"=>"2",],
             "Alba"=>["Resultado"=>"1-0","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
             "Calpe"=>["Resultado"=>"1-2","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
            ],
    "Zafra"=>["Nalda"=>["Resultado"=>"0-0","Amarillas"=>"0","Rojas"=>"1","Penalty"=>"1",],
              "Haro"=>["Resultado"=>"1-3","Amarillas"=>"2","Rojas"=>"0","Penalty"=>"1",],
              "Zafra"=>["Resultado"=>" ","Amarillas"=>" ","Rojas"=>" ","Penalty"=>" ",],
              "Alba"=>["Resultado"=>"1-4","Amarillas"=>"2","Rojas"=>"1","Penalty"=>"1",],
              "Calpe"=>["Resultado"=>"2-0","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
             ],
    "Alba"=>["Nalda"=>["Resultado"=>"1-0 ","Amarillas"=>"4","Rojas"=>"1","Penalty"=>"2",],
             "Haro"=>["Resultado"=>"6-3","Amarillas"=>"1","Rojas"=>"2","Penalty"=>"3",],
             "Zafra"=>["Resultado"=>"14-3","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
             "Alba"=>["Resultado"=>" ","Amarillas"=>" ","Rojas"=>" ","Penalty"=>" ",],
             "Calpe"=>["Resultado"=>"1-0","Amarillas"=>"3","Rojas"=>"1","Penalty"=>"0",],
            ],
    "Calpe"=>["Nalda"=>["Resultado"=>"1-1","Amarillas"=>"0","Rojas"=>"0","Penalty"=>"1",],
              "Haro"=>["Resultado"=>"2-3","Amarillas"=>"1","Rojas"=>"0","Penalty"=>"0",],
              "Zafra"=>["Resultado"=>"0-1","Amarillas"=>"0","Rojas"=>"0","Penalty"=>"0",],
              "Alba"=>["Resultado"=>"1-1","Amarillas"=>"1","Rojas"=>"2","Penalty"=>"0",],
              "Calpe"=>["Resultado"=>" ","Amarillas"=>" ","Rojas"=>" ","Penalty"=>" ",],
            ],
   ];

 ?>
<!DOCTYPE html>
<html lang="es-Es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      th, td{
        border: 1px solid blue;
      }
      caption{ caption-side: bottom;}
    </style>
  </head>
  <body>
    <h1>Solo se puede tener un archivo abierto</h1>
    <h2>No se puede conectar medio de almacenamiento externo alguno</h2>
    <h3>Cambiar el nombre del archivo</h3>
    <p> <a href="https://www.php.net/manual/es/" target="_blank">Enlace documentación PHP</a> </p>
    <p> <a href="https://www.w3schools.com/" target="_blank">Enlace a w3schools.com</a> </p>

    <table>
      <caption>Resultados del torneo</caption>
      <thead>
        <tr>
          <th></th>
          <?php foreach ($b as $key => $value): ?>
            <th><?=$key?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($b as $key => $value): ?>
            <tr>
            <th><?=$key?></th>
            <?php foreach ($value as $clave => $valor): ?>
              <td><?=$valor['Resultado']?></td>
            <?php endforeach; ?>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
</body>
</html>
