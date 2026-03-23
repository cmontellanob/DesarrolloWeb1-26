<?php include("pila.php");
session_start();
$elemento=$_GET["elemento"];
if (!isset($_SESSION['p']))
    {
    $_SESSION['p']=new Pila(10);
    }

$_SESSION['p']->insertar($elemento);
?>

<meta http-equiv="refresh" content="3; url=menu.html">