<?php
declare(strict_types = 1);
function sum(int $a, int $b)
{
  return $a + $b;
}
var_dump(sum(1,2));
//error var_dump(sum(1.5,2.5));
//////////////////////////////////////////
echo "//<br><br>";
function &devolver_referencia()
{
  $algunaref = 'test';
  return $algunaref;
}
$nuevaref =& devolver_referencia();
//////////////////////////////////////////
echo "//<br><br>";
function total_intevals($unit, DateInterval ...$intervals)
{
  $time = 0;
  foreach ($intervals as $interval)
  {
    $time += $interval->$unit;
  }
  return $time;
}
$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intevals('d', $a, $b).' days';
//fallo debido a que nnull no es un objeto DateInterval
//error echo total_intevals('d', null);
//////////////////////////////////////////
echo "//<br><br>";
