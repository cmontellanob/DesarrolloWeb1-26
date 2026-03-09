<?php 
$n = $_GET["n"];
$operacion = $_GET["operacion"];
include("operaciones.php");
switch($operacion){
    case "fibonacci":
        echo "el fibonacci es:".fibonacci($n);
        break;
    case "factorial":
        echo "el facorial es:".factorial($n);
        break;
    default: echo "no existe esa operacion";
}