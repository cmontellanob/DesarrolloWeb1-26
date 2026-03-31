<?php 
$a=$_POST['a'];
$b=$_POST['b'];
$operacion=$_POST['operacion'];
echo $operacion;
switch ($operacion)
{
    case "Sumar":
    $resultado=$a+$b;
    break;
    case "Restar":
    $resultado=$a-$b;
    break;
    case "Multiplicar":
    $resultado=$a*$b;
    break;
}
echo "el resultado de $operacion es $resultado";