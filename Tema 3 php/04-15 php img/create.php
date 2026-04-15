<?php session_start();
include("validar_sesion.php");

$ci = $_POST['ci'];
$nombres = $_POST['nombres'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$sexo = $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$carrera_id = $_POST['carrera_id'];
$nuevo = "";
if (isset($_FILES['fotografia']['tmp_name'])) {
    $nombre_temporal = $_FILES['fotografia']['tmp_name'];
    $partes = explode(".", $nombre_temporal);
    $nuevo = uniqid() . '.' . $partes[1];
    copy($nombre_temporal, "images/" . $nuevo);
}

include('conexion.php');
$sql = "insert into personas (fotografia,ci,nombres,primer_apellido,segundo_apellido,sexo,
fecha_nacimiento,celular,carrera_id)
values (?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param(
    "sssssssii",
    $nuevo,
    $ci,
    $nombres,
    $primer_apellido,
    $segundo_apellido,
    $sexo,
    $fecha_nacimiento,
    $celular,
    $carrera_id
);
if ($stmt->execute()) {
    echo "registro exitoso";
}
?>
<meta http-equiv="refresh" content="2;url=read.php">