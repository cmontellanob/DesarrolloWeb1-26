<?php
$ci=$_POST['ci'];
$nombres=$_POST['nombres'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$celular=$_POST['celular'];
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


