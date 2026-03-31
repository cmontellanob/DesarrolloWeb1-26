<?php 
$ci=$_GET['ci'];
$nombres=$_GET['nombres'];
$primer_apellido=$_GET['primer_apellido'];
$segundo_apellido=$_GET['segundo_apellido'];
$sexo=$_GET['sexo'];
$fecha_nacimiento=$_GET['fecha_nacimiento'];
$celular=$_GET['celular'];
include('conexion.php');
$sql= "insert into personas (ci,nombres,primer_apellido,segundo_apellido,sexo,
fecha_nacimiento,celular)
values (?,?,?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("ssssssi",$ci,$nombres,$primer_apellido,$segundo_apellido,$sexo,
$fecha_nacimiento,$celular);
if($stmt->execute())
{
    echo "registro exitoso";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">


