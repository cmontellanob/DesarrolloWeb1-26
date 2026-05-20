
    <?php
    include "conexion.php";
    $sql = "select id,tiporeceta from tiporeceta";
    $consulta = mysqli_query($con, $sql);
    $arreglo = array();
    while ($persona = mysqli_fetch_array($consulta)) {
        $arreglo[] = $persona;
    }
    $con->close();
    echo json_encode($arreglo);
    ?>