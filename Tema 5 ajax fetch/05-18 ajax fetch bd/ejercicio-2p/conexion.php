<?php 
$con=new mysqli("localhost","root","","bd_recetas");

if ($con->connect_error)
    {
      die("error  alc conectarse".$con->connect_error);
    }
?>