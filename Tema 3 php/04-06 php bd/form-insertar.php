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
    ?>
    <form action="create.php" method="get">
        <label for="nombres">Introduce tu nombre</label>
        <input type="text" name="nombres">

        <br>

        <label for="Papellido">Introduce tu primer apellido</label>
        <input type="text" name="primer_apellido">

        <br>

        <label for="Sapellido">Introduce tu segundo apellido</label>
        <input type="text" name="segundo_apellido">

        <br>

        <label for="sexo">Introduce tu sexo</label>
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>

        <br>

        <label for="ci">Introduce tu carnet de identidad</label>
        <input type="number" name="ci">

        <br>

        <label for="celular">Introduce tu celular</label>
        <input type="number" name="celular">

        <br>

        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>