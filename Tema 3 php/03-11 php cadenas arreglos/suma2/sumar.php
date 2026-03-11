<?php
$suma=0;
$numero=$_POST['numero'];
for ($i=0;$i<$numero;$i++)
    {
    $suma+=$_POST['num'.$i];
    
    }
    echo "la suma es <br>".$suma; 
   ?> 