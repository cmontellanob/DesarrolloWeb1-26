<?php session_start();
    include ("validar_sesion.php");
$id=$_POST['id'];
$ci=$_POST['ci'];
$nombres=$_POST['nombres'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$celular=$_POST['celular'];
include('conexion.php');
$sql= "update personas set ci=?,nombres=?,primer_apellido=?,segundo_apellido=?,sexo=?,
fecha_nacimiento=?,celular=? where id=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("ssssssii",$ci,$nombres,$primer_apellido,$segundo_apellido,$sexo,
$fecha_nacimiento,$celular,$id);
if($stmt->execute())
{
    
    echo "atualización exitosa";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">


