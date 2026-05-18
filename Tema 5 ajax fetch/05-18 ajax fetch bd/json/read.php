
    <?php
    include "conexion.php";
    $sql = "select id,ci,nombres,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,celular from personas";
    $consulta = mysqli_query($con, $sql);
    $arreglo = array();
    while ($persona = mysqli_fetch_array($consulta)) {
        $arreglo[] = $persona;
    }
    $con->close();
    echo json_encode($arreglo);
    ?>