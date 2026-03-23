<?php 
class Examen {
    private $cadena1;
    private $cadena2;

    function __construct($cadena1, $cadena2)
    {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }
    function cruzar(){
        $posicioni = -1;
        $posicionj = -1;
        for($i=0; $i<strlen($this->cadena1);$i++){
            for($j=0; $j<strlen($this->cadena2);$j++){
                if($this->cadena1[$i]==$this->cadena2[$j]){
                    $posicioni = $i;
                    $posicionj = $j;
                }
            }
        }
        if($posicioni == -1){
            echo "no existen letras comunes";
            return 0;
        }

        echo "<table>";
        for($i=0; $i<strlen($this->cadena1);$i++){
            echo "<tr>";
            for($j=0; $j<strlen($this->cadena2);$j++){
            echo"<td>";    
            if($i==$posicioni){
                $this->cadena1[$i];
            }
            echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}