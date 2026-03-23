<?php
class Pila{
    private $tope;
    private $elementos=[];
    private $max;
    function __construct($max){
        $this->max=$max;
        $this->tope=0;
    }
    function insertar($elemento){
        

        if ($this->tope < $this->max){
            $this->elementos[$this->tope]=$elemento;
            $this->tope++;
            echo "Elemento insertado correctamente";   

        }
        else{
             echo "La pila esta llena";   
        }
            
    }
    function eliminar(){
        if ($this->tope!=0){
            $this->tope--;
            $valor=$this->elementos[$this->tope];
            return $valor;
        }
    }
    function mostrar(){
        for($i=0;$i<$this->tope;$i++){
            echo $this->elementos[$i]."<br>";
        }
    }
}
