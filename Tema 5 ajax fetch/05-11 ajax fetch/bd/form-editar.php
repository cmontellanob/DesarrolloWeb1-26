<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <?php session_start();
    include ("validar_sesion.php");
    
    $id=$_GET['id'];
    include('conexion.php');
    $sql="select id,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular from personas
    where id=$id";
    $consulta=mysqli_query($con,$sql);
    $persona = mysqli_fetch_array($consulta)
    ?>
    <form action="update.php" method="post">
        <label for="nombres">Introduce tu nombre</label>
        <input type="text" name="nombres" value="<?php echo $persona['nombres'];?>">
        <br>

        <label for="Papellido">Introduce tu primer apellido</label>
        <input type="text" name="primer_apellido" value="<?php echo $persona['primer_apellido'];?>">

        <br>

        <label for="Sapellido">Introduce tu segundo apellido</label>
        <input type="text" name="segundo_apellido" value="<?php echo $persona['segundo_apellido'];?>">

        <br>

        <label for="sexo">Introduce tu sexo</label>
        <select name="sexo">
            <option value="masculino" <?php echo $persona["sexo"]=='Masculino'?'selected':'';?>  >Masculino</option>
            <option value="femenino" <?php echo $persona["sexo"]=='Femenino'?'selected':'';?>>Femenino</option>
        </select>

        <br>

        <label for="ci">Introduce tu carnet de identidad</label>
        <input type="number" name="ci" value="<?php echo $persona['ci'];?>" > 

        <br>

        <label for="celular">Introduce tu celular</label>
        <input type="number" name="celular" value="<?php echo $persona['celular'];?>">

        <br>

        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $persona['fecha_nacimiento'];?>">
        <input type="hidden" name="id" value="<?php echo $persona['id']?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>