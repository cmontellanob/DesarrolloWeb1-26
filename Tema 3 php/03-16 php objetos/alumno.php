<?php 
class Alumno {
   private $cu ;
   private $nombres;
   private $apellidos;
   private $materias=[];
  
   function __construct($cu,$nombres,$apellidos,$materias)
   {
    $this->$cu=$cu;
    $this->nombres=$nombres;
    $this->apellidos=$apellidos;
    $this->materias=$materias;
   }
   function mostrar()
   {
    echo '<div style="display: flex;flex-direction: column;">';
    echo '<ul>';
    echo "<li> CU: $this->cu </li";
    echo "<li>Nombres: $this->nombres </li>";
    echo "<li>Apellidos: $this->apellidos </li>";
    echo "</ul>";
    echo '<div style="display: flex;flex-direction: row; gap:15px">Materias:';
    foreach ($this->materias as $materia)
        {
            echo "<div>$materia</div>";
        }
    echo "</div>";    
   }
   


}
