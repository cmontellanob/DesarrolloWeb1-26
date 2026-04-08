<?php
class pizarra
{
    private $palabra;
    private $color;
    private $color_fondo;
    function __construct($palabra, $color, $color_fondo)
    {
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }
    function cuadrado()
    {
        $longitud = strlen($this->palabra);
        echo '<table >';

        for ($i = 0; $i < $longitud; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $longitud; $j++) {
                if ($i == 0) {
                    echo '<td style="color:' . $this->color . ';background-color:' . $this->color_fondo . '">';
                    echo $this->palabra[$j] . '</td>';
                } else
                if ($i == $longitud - 1) {
                    echo '<td style="color:' . $this->color . ';background-color:' . $this->color_fondo . '">';
                    echo $this->palabra[$longitud - 1 - $j] . '</td>';
                } else
                if ($j == 0) {
                    echo '<td style="color:' . $this->color . ';background-color:' . $this->color_fondo . '">';
                    echo $this->palabra[$i] . '</td>';
                } else
                if ($j == $longitud - 1) {
                    echo '<td style="color:' . $this->color . ';background-color:' . $this->color_fondo . '">';
                    echo $this->palabra[$longitud - 1 - $i] . '</td>';
                } else {

                    echo '<td>&nbsp;</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table';
    }
    function diagonal()
    {
        $longitud = strlen($this->palabra);
        echo '<table >';

        for ($i = 0; $i < $longitud; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $longitud; $j++) {
                if ($i == $j) {
                    echo '<td style="color:' . $this->color . ';background-color:' . $this->color_fondo . '">';
                    echo $this->palabra[$j] . '</td>';
                } {

                    echo '<td>&nbsp;</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table';
    }
}
?>