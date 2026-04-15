<?php session_start();
    include ("validar_sesion.php");
include "conexion.php";
$id=$_GET['id'];
$sql= "delete from personas where id=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("i",$id);
if($stmt->execute())
{
    echo "Se eliminoel registro";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">

