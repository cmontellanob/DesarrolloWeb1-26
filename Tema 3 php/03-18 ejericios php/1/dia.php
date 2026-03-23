<select name="">
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
    foreach ($dias as $indice => $dia) { ?>
        <option value="<?php echo $indice; ?>"
            <?php if ($indice == $numero) {
                echo "selected";
            }
            ?>><?php echo $dia; ?> </option>
    <?php }
    ?>
</select>

