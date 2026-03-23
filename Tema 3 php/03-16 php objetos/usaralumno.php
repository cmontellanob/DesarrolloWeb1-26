<?php 
include ("alumno.php");
$materias=["SIS-256","SIS-258","MAT-103"];
$a1=new Alumno("35-239","Carlos","Apelldios",$materias);
$a1->mostrar();
?>