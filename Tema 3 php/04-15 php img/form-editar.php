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
    $sql="select id,fotografia,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular,carrera_id from personas
    where id=$id";
    $consulta=mysqli_query($con,$sql);
    $persona = mysqli_fetch_array($consulta);
    $sql2="SELECT id,nombre  from carreras";
    $consulta2=mysqli_query($con,$sql2);
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <label for="fotografia">fotografia</label>
        <img src="images/<?php echo $persona['fotografia'];?>" alt="">
        <input type="file" name="fotografia">
        <label for="nombres">nombre</label>
        <input type="text" name="nombres" value="<?php echo $persona['nombres'];?>">
        <br>

        <label for="Papellido">primer apellido</label>
        <input type="text" name="primer_apellido" value="<?php echo $persona['primer_apellido'];?>">

        <br>

        <label for="Sapellido">segundo apellido</label>
        <input type="text" name="segundo_apellido" value="<?php echo $persona['segundo_apellido'];?>">

        <br>

        <label for="sexo">sexo</label>
        <select name="sexo">
            <option value="masculino" <?php echo $persona["sexo"]=='Masculino'?'selected':'';?>  >Masculino</option>
            <option value="femenino" <?php echo $persona["sexo"]=='Femenino'?'selected':'';?>>Femenino</option>
        </select>

        <br>

        <label for="ci">carnet de identidad</label>
        <input type="number" name="ci" value="<?php echo $persona['ci'];?>" > 

        <br>

        <label for="celular">celular</label>
        <input type="number" name="celular" value="<?php echo $persona['celular'];?>">

        <br>


        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $persona['fecha_nacimiento'];?>">
         <br>
         <label for="carrera_id">Carrera</label>
         <select name="carrera_id" >
            <?php while ($carrera = mysqli_fetch_array($consulta2)) 
            { ?>
            <option value="<?php echo $carrera['id']; ?>"
                <?php echo $carrera['id']==$persona['carrera_id']?'selected':'';  ?>
            ><?php echo $carrera['nombre'];?> </option>
            <?php  }?>
         </select>
         <br>
        
        <input type="hidden" name="id" value="<?php echo $persona['id']?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>