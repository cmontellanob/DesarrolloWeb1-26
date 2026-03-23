<?php
include("pila.php");
$elemento=$_GET["elemento"];

$p=new Pila(10);
$p->insertar($elemento);
?>

<meta http-equiv="refresh" content="3; url=menu.html">