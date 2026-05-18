<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dato Agenda</title>
    
</head>

<body>
    
    <?php
    if (!isset($_GET['tipo'])) {
        $tipo = '';
     } else {
        $tipo = 'WHERE tiporeceta = "' . $_GET['tipo'] . '"';
    }
    include "conexion.php";
    $sql = "select recetas.id,fotografia,titulo,tiporeceta as tipo,preparacion from recetas
    left join tiporeceta on recetas.idtiporeceta=tiporeceta.id " . $tipo;
    $consulta = mysqli_query($con, $sql);
    $sql2 = "select id,tiporeceta from tiporeceta";
    $consulta2 = mysqli_query($con, $sql2);
    
    if ($tipo == '') { ?>
    
    <select name="tipo" id="tipo" onchange="cargarContenido2('listar-recetas.php?tipo='+this.value)">
        <option value="">Todos</option>
        <?php while ($tipo = mysqli_fetch_array($consulta2)) { ?>
            <option value="<?php echo $tipo['tiporeceta']; ?>"><?php echo $tipo['tiporeceta']; ?></option>
        <?php } ?>
    </select>
    <?php } ?>
    <div class="tabla">

    <table style="border: 1px solid black">
                <tr>
                    <th>Fotografía</th>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>Preparación</th>
                </tr>
                <?php while ($recetas = mysqli_fetch_array($consulta)) { ?> <tr>
                    
                    <td><img width="100px" src="images\<?php echo $recetas['fotografia']; ?>" alt=""> </td>
                    <td><?php echo $recetas['titulo']; ?></td>
                    <td><?php echo $recetas['tipo']; ?></td>
                        <td><?php echo $recetas['preparacion']; ?></td>
                        
                        
                    </tr>

                <?php }
                $con->close();

                ?>
            </table>

    </div>
        



</body>

</html>