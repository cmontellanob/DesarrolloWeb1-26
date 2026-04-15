<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dato Agenda</title>
</head>
<body>
<?php session_start();
 include('validar_sesion.php');
 include('conexion.php');
$orden="id";
if (isset($_GET['orden']))
    {
        $orden=$_GET['orden'];
    }
$bucar="";    
if (isset($_GET['buscar']))
    {
        $buscar="WHERE nombres like '%".$_GET['buscar']."%'";
    }

$sql="select p.id,fotografia,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular,nombre as carrera from personas p
 left join carreras c on p.carrera_id=c.id
 $buscar 
 order by ".$orden;
 
$consulta=mysqli_query($con,$sql);
?>
<form action="read.php" method="get">
    <div>
<label for="buscar">Buscar</label>
    <input type="text" name="buscar" value="<?php echo $_GET['buscar']?$_GET['buscar']:'' ?>" >
    <input type="submit" value="Buscar">
    </div>    
</form>
<table style="border: 1px solid black">
    <tr>
        <th>Fotografia</th>
        <th><a href="read.php?orden=ci">Ci</a> </th>
        <th><a href="read.php?orden=nombres">Nombres</a></th>
        <th><a href="read.php?orden=primer_apellido">Primer Apellido</a></th>
        <th><a href="read.php?orden=segundo_apellido">Segundo Apellido</a></th>
        <th><a href="read.php?orden=sexo">Sexo</a></th>
        <th><a href="read.php?orden=fecha_nacimiento">Fecha Nacimiento</a></th>
        <th><a href="read.php?orden=celular">Celular</a></th>
        <th><a href="read.php?orden=nombre">Carrera</a></th>
        <th>Operaciones</th>
    </tr>
<?php while ($persona = mysqli_fetch_array($consulta)) 
    {?> <tr>
        <td><img width="100px" src="images/<?php echo $persona['fotografia'];?>"></td>
        <td><?php echo $persona['ci'];?></td>
        <td><?php echo $persona['nombres'];?></td>
        <td><?php echo $persona['primer_apellido'];?></td>
        <td><?php echo $persona['segundo_apellido'];?></td>
        <td><?php echo $persona['sexo'];?></td>
        <td><?php echo $persona['fecha_nacimiento'];?></td>
        <td><?php echo $persona['celular'];?></td>
        <td><?php echo $persona['carrera'];?></td>
        <td>
            <a href="form-editar.php?id=<?php echo $persona['id']; ?>">Editar</a>
            <a href="delete.php?id=<?php echo $persona['id']; ?>">Eliminar</a>
        </td>
         </tr>

    <?php }
$con->close(); 

?>
</table>
    <a href="form-insertar.php">Registrar nuevo usuario</a>
</body>
</html>