<?php include("pila.php");
session_start();
if (isset($_SESSION['p'])) {
    $valor = $_SESSION['p']->mostrar();
} else {
    echo "No hay valores en la pila";
}


?>
<meta http-equiv="refresh" content="3; url=menu.html">