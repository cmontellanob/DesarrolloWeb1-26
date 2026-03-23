    <?php
    $numero = $_GET['numero'];
    $dias = [
        1 => 'Lunes',
        2 => 'Martes',
        3 => "Miercoles",
        4 => "Jueves",
        5 => 'Viernes',
        6 => 'Sabado',
        7 => 'Domingo'
    ];
    echo '<select name="" >';
    foreach ($dias as $indice => $dia) {
        echo '<option value="' . $indice . '"';
        echo $indice == $numero ? "selected" : "";
    }
    echo "</select>";
?>
