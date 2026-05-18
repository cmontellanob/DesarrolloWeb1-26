<?php 
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


