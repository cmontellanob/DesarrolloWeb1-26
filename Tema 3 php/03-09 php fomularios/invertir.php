<?php 
$cadena=$_POST["cadena"];
$invertido="";
for($i=0;$i<strlen($cadena);$i++){
    $invertido=$cadena[$i].$invertido;
}
echo $invertido;