<?php

$titulo = $_POST['titulo'];
$idtiporeceta = $_POST['idtiporeceta'];
echo $idtiporeceta;
$preparacion = $_POST['preparacion'];
$nuevo = "";
if (isset($_FILES['fotografia']['tmp_name'])) {
    $nombre_temporal = $_FILES['fotografia']['tmp_name'];
    $partes = explode(".", $nombre_temporal);
    $nuevo = uniqid() . '.' . $partes[1];
    copy($nombre_temporal, "images/" . $nuevo);
}

include('conexion.php');
$sql = "insert into recetas (fotografia,titulo,idtiporeceta,preparacion)
values (?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param(
    "ssss",
    $nuevo,
    $titulo,
    $idtiporeceta,
    $preparacion,
);
if ($stmt->execute()) {
    echo "registro exitoso";
}
?>