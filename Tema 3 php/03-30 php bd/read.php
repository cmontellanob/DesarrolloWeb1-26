<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dato Agenda</title>
</head>
<body>
<?php include('conexion.php');
$sql="select id,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular from personas";
$consulta=mysqli_query($con,$sql);
?>
<table style="border: 1px solid black">
    <tr>
        <th>Ci</th>
        <th>Nombres</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Sexo</th>
        <th>Fecha Nacimiento</th>
        <th>Celular</th>
        <th>Operaciones</th>
    </tr>
<?php while ($persona = mysqli_fetch_array($consulta)) 
    {?> <tr>
        <td><?php echo $persona['ci'];?></td>
        <td><?php echo $persona['nombres'];?></td>
        <td><?php echo $persona['primer_apellido'];?></td>
        <td><?php echo $persona['segundo_apellido'];?></td>
        <td><?php echo $persona['sexo'];?></td>
        <td><?php echo $persona['fecha_nacimiento'];?></td>
        <td><?php echo $persona['celular'];?></td>
        <td>
            <a href="form-editar.php?id=<?php echo $persona['id']; ?>">Editar</a>
            <a href="">Eliminar</a>
        </td>
         </tr>

    <?php }
$con->close(); 

?>
</table>
    <a href="form-insertar.html">Registrar nuevo usuario</a>
</body>
</html>