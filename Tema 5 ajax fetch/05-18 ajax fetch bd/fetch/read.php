
    <?php
    include "conexion.php";
    $sql = "select id,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular from personas";
    $consulta = mysqli_query($con, $sql);
     while ($persona = mysqli_fetch_array($consulta)) { ?> <tr>
                        <td><?php echo $persona['ci']; ?></td>
                        <td><?php echo $persona['nombres']; ?></td>
                        <td><?php echo $persona['primer_apellido']; ?></td>
                        <td><?php echo $persona['segundo_apellido']; ?></td>
                        <td><?php echo $persona['sexo']; ?></td>
                        <td><?php echo $persona['fecha_nacimiento']; ?></td>
                        <td><?php echo $persona['celular']; ?></td>
                        <td>
                            <a href="javascript:cargarEditar(<?php echo $persona['id']; ?>)">Editar</a>
                            <a href="delete.php?id=<?php echo $persona['id']; ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php }
                $con->close();

                ?>
            </table>




</body>

</html>