<?php 
$a=$_GET['a'];
$b=$_GET['b'];
$operacion=$_GET['operacion'];
switch ($operacion)
{
    case "sumar":
    $resultado=$a+$b;
    break;
    case "restar":
    $resultado=$a-$b;
    break;
    case "multiplicar":
    $resultado=$a*$b;
    break;
}
echo "el resultado de $operacion es $resultado";