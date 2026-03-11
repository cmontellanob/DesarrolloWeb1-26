<?php
$suma=0;
foreach ($_POST as $valor)
    {
    $suma+=$valor;
    
    }
    echo "la suma es <br>".$suma; 
   ?> 