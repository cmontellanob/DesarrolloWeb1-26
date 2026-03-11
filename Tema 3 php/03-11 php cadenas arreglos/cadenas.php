<?php
$cadena = $_GET['cadena'];
echo strlen($cadena), "<br>";
$palabras = explode(" ", $cadena);
foreach ($palabras as $indice=>$palabra)
    {
    echo "palabras en su posicion $indice es:".  $palabra. "<br>";
    }

?>
