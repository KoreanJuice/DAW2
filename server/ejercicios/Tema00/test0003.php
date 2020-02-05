<!--array-->
<?php
  $array = array (
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
  );
  var_dump($array);
?>
<!----><br>
<?php
  $array = ["foo", "bar", "hello", "world", "0", 1, 01, true];
  var_dump($array);
?>
<!----><br>
<?php
  $array = [
    "a",
    "b",
6 =>"c",
    "d",
  ];
  var_dump($array);
?>
<!----><br>
<?php
  $array = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
      "dimensional" => array(
        "array" => "foo"
      )
    )
  );
  var_dump($array{"foo"});//con llaves
  var_dump($array[42]);//con corchetes
  var_dump($array["multi"]{"dimensional"}["array"]);//both
  ?>
<!----><br>
<?php
  function getArray(){
    return array(1, 2, 3);
  }
  // a partir de PHP 5.4
  $secondElement = getArray()[1];
  echo $secondElement;
?>
<!----><br><br>
<?php
  $arr = array (5 => 1, 12 => 2);
  $arr[] = 56; // array[13] = 56
    var_dump($arr);
  $arr["x"] = 42;
    var_dump($arr);
  unset($arr[5]);
    var_dump($arr);
  unset($arr);
    var_dump($arr);
  ?>
<!----><br><br>
<?php
$array = array(1,2,3,4,5);
print_r($array);

foreach($array as $i => $value)
{
  unset($array[$i]);
}
?>
<!----><br><br>
<?php
  $array = array(1,2,3,4);
  foreach ($array as &$valor)
  {
    $valor = $valor * 2;
  }
  // $array ahora...
  unset($valor);
?>
