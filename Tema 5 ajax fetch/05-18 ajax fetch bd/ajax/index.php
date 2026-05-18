<!DOCTYPE html>
<html lang="en">

<head>
    <script src="ajax.js" type="text/javascript"></script>
        
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dato Agenda</title>
    <style>
        .contendor {
            display: flex;
        }

        .contendor nav {
            margin: 10px;
            width: 20%;
            border: 1px solid black;
        }
        .contendor nav ul {
            list-style: none;
        }
        .contendor nav ul li {
            border: 1px solid black;
            margin: 5px;
            padding: 5px;
        }
        .contendor div {
            margin: 10px;
            width: 80%;
        }
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            
        }
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
       
    </style>
</head>

<body>
    <?php
    include "conexion.php";
    $sql = "select id,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular from personas";
    $consulta = mysqli_query($con, $sql);
    ?>
    <div class="contendor">
        <nav>
            <ul>
                <li><a href="javascript:cargarContenido('read.php')" >Listar</a></li>
                <li><a href="javascript:cargarContenido('form-insertar.php')">Insertar</a></li>
            </ul>
        </nav>
        <div id="contenido">
            &nbsp;
        </div>
    </div>

    <div class="modal">
        <div class="modal-content">
            Esta seguro que quiere eliminar este registro?
            <br>
            <button id="btn-confirmar">Confirmar</button>
            <button id="btn-cancelar">Cancelar</button>
        </div>
    </div>


</body>

</html>