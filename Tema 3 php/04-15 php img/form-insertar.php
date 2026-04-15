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
    include ("conexion.php");
    $sql="SELECT id,nombre  from carreras";
    $consulta=mysqli_query($con,$sql);
    ?>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label for="fotografia">fotografia</label>
        <input type="file" name="fotografia" >
        <label for="nombres">nombre</label>
        <input type="text" name="nombres">

        <br>

        <label for="Papellido"> primer apellido</label>
        <input type="text" name="primer_apellido">

        <br>

        <label for="Sapellido">segundo apellido</label>
        <input type="text" name="segundo_apellido">

        <br>

        <label for="sexo">Sexo</label>
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>

        <br>

        <label for="ci">carnet de identidad</label>
        <input type="number" name="ci">

        <br>

        <label for="celular"> celular</label>
        <input type="number" name="celular">

        <br>

        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento">
         <br>
         <label for="carrera_id">Carrera</label>
         <select name="carrera_id" >
            <?php while ($carrera = mysqli_fetch_array($consulta)) 
            { ?>
            <option value="<?php echo $carrera['id']; ?>"><?php echo $carrera['nombre'];?> </option>
            <?php  }?>
         </select>
<br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>