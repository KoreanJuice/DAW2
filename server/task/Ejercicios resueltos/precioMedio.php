<?php
if(isset($_POST['ok'])){
  $pTs=$_POST['precio'];
  foreach ($pTs as $tienda => $precios) {
    foreach ($precios as $key => $precio) {
      if (empty($precio)) {
        $error[$tienda][$key]=true;
      }
    }
  }
  if(!isset($error) ){
    $mediaPrecio=[]; //precio de los productos p1, p2, p3
    $mediaTienda=[]; //precio de las tiendas t1, t2, t3
    $productos = array_keys($pTs['t1']);
    foreach ($productos as $key => $value) {
      $mediaPrecio[$value]=0;
    }
  foreach ($pTs as $tienda => $precios) {
      $sumP=0;
      foreach ($precios as $key => $precio) {
        $sumP+=$precio;
        $mediaPrecio[$key]+=$precio;
      }
      $mediaTienda[]=$sumP/3;
    }
    foreach ($mediaPrecio as $key => $value) {
      $mediaPrecio[$key]/=3;
    }
  }
}
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>
      <form  action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table>
          <thead>
            <tr>
              <th></th>
              <th>Tienda 1</th>
              <th>Tienda 2</th>
              <th>Tienda 3</th>
              <?php if (isset($mediaPrecio)): ?>
                <th>Precio medio</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Producto 1</th>
              <td>
                <input type="text" name="precio[t1][p1]" value="<?= isset($pTs['t1']['p1'])?$pTs['t1']['p1']:''?>">
                <?=isset($error['t1']['p1'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t2][p1]" value="<?= isset($pTs['t2']['p1'])?$pTs['t2']['p1']:''?>">
                <?=isset($error['t2']['p1'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t3][p1]" value="<?= isset($pTs['t3']['p1'])?$pTs['t3']['p1']:''?>">
                <?=isset($error['t3']['p1'])?'<span style="color:red">*</span>':''?>
              </td>
              <?php if (isset($mediaPrecio)): ?>
                <td><?=$mediaPrecio['p1']?></td>
              <?php endif; ?>
            </tr>
            <tr>
              <th>Producto 2</th>
              <td> <input type="text" name="precio[t1][p2]" value="<?= isset($pTs['t1']['p2'])?$pTs['t1']['p2']:''?>">
                <?=isset($error['t1']['p2'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t2][p2]" value="<?= isset($pTs['t2']['p2'])?$pTs['t2']['p2']:''?>">
                <?=isset($error['t2']['p2'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t3][p2]" value="<?= isset($pTs['t3']['p2'])?$pTs['t3']['p2']:''?>">
                <?=isset($error['t3']['p2'])?'<span style="color:red">*</span>':''?>
              </td>
              <?php if (isset($mediaPrecio)): ?>
                <td><?=$mediaPrecio['p2']?></td>
              <?php endif; ?>

            </tr>
            <tr>
              <th>Producto 3</th>
              <td> <input type="text" name="precio[t1][p3]" value="<?= isset($pTs['t1']['p3'])?$pTs['t1']['p3']:''?>">
                <?=isset($error['t1']['p3'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t2][p3]" value="<?= isset($pTs['t2']['p3'])?$pTs['t2']['p3']:''?>">
                <?=isset($error['t2']['p3'])?'<span style="color:red">*</span>':''?>
              </td>
              <td> <input type="text" name="precio[t3][p3]" value="<?= isset($pTs['t3']['p3'])?$pTs['t3']['p3']:''?>">
                <?=isset($error['t3']['p3'])?'<span style="color:red">*</span>':''?>
              </td>
              <?php if (isset($mediaPrecio)): ?>
              <td><?=$mediaPrecio['p3']?></td>
              <?php endif; ?>
          </tr>
        </tbody>
          <?php if (isset($mediaTienda)): ?>
            <tfoot>
              <tr>
                <th>Precio Medio en Tienda</th>
                <?php foreach ($mediaTienda as $key => $value): ?>
                  <td><?=$value?></td>
                <?php endforeach; ?>
              </tr>
            </tfoot>
          <?php endif; ?>
  <!--          <tr>
              <td colspan="4">
                <input type="submit" name="ok" value="Calcular Medias" style="display: block; margin:auto">
              </td>
            </tr> -->
        </table>
        <input type="submit" name="ok" value="Calcular Medias" style="display: block; margin:auto">
    </form>
      <?php if (isset($error)): ?>
        <p style="color:red">Todos los campos son obligatorios.</p>
      <?php endif; ?>
    </main>
  </body>
</html>
