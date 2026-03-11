<?php
$suma=0;

foreach ($_POST['num'] as $valor)
    {
    $suma+=$valor;
    
    }
    echo "la suma es <br>".$suma; 
   ?> 