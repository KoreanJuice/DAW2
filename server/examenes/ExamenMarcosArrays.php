<?php
error_reporting(E_ALL & ~E_NOTICE);
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
    <title>Examen Marcos</title>
    <style media="screen">
      th, td {
        border: 1px solid blue;
        border-collapse: separate;
      }
    </style>
  </head>
  <body>
    <h1>Solo se puede tener un archivo abierto</h1>
    <h2>No se puede conectar medio de almacenamiento externo alguno</h2>
    <h3>Cambiar el nombre del archivo</h3>
    <p> <a href="https://www.php.net/manual/es/" target="_blank">Enlace documentación PHP</a> </p>
    <p> <a href="https://www.w3schools.com/" target="_blank">Enlace a w3schools.com</a> </p>
    <!---->
    <form action="ExamenMarcos.php" method="POST">
      <label for="ej01">Introduce un numero entero</label>
      <input type="number" id="ej01" name="ej01" required>
      <input type="submit" value="Enviar">
    </form>
    <hr>
    <?php
      /*EJ01*/
      $input = $_POST['ej01'];
      function cubo($input) : int {
        return $input * $input * $input;
      }
      echo "el cubo es " . cubo($input);
    ?>
    <hr>
    <table>
      <tr>
        <th></th>
        <th>Nalda</th>
        <th>Haro</th>
        <th>Zafra</th>
        <th>Alba</th>
        <th>Calpe</th>
      </tr>
      <tr>
        <td>Nalda</td>
        <!--<?php
        for ($i=0; $i < count($b['Nalda']); $i++) {
          echo "<td>".$b['Nalda']['$i']['Resultado']."</td>";
        }?>-->
        <td></td>
        <td><?= $b['Nalda']['Haro']['Resultado'] ?></td>
        <td><?= $b['Nalda']['Zafra']['Resultado'] ?></td>
        <td><?= $b['Nalda']['Alba']['Resultado'] ?></td>
        <td><?= $b['Nalda']['Calpe']['Resultado'] ?></td>
      </tr>
      <tr>
        <td>Haro</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Zafra</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Alba</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Calpe</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    <span>Resultados del torneo</span>
    <br><br>
    <table>
      <tr>
        <th></th>
        <th colspan="4">Nalda</th>
        <th colspan="4">Haro</th>
        <th colspan="4">Zafra</th>
        <th colspan="4">Alba</th>
        <th colspan="4">Calpe</th>
      </tr>
      <tr>
        <th></th>
        <th>Resultado</th>
        <th>Amarillas</th>
        <th>Rojas</th>
        <th>Penalty</th>
        <th>Resultado</th>
        <th>Amarillas</th>
        <th>Rojas</th>
        <th>Penalty</th>
        <th>Resultado</th>
        <th>Amarillas</th>
        <th>Rojas</th>
        <th>Penalty</th>
        <th>Resultado</th>
        <th>Amarillas</th>
        <th>Rojas</th>
        <th>Penalty</th>
        <th>Resultado</th>
        <th>Amarillas</th>
        <th>Rojas</th>
        <th>Penalty</th>
      </tr>
      <tr>
        <td>Nalda</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Haro</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Zafra</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Alba</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Calpe</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </body>
</html>
