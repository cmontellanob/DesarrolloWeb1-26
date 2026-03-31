<?php
$a = $_GET["a"];
$b = $_GET["b"];
?>

<ul>
    <li><a href="resultado.php?a=<?php echo $a ?>&b=<?php echo $b ?>&operacion=sumar">Sumar</a></li>
    <li><a href="resultado.php?a=<?php echo $a ?>&b=<?php echo $b ?>&operacion=restar">Restar</a></li>
    <li><a href="resultado.php?a=<?php echo $a ?>&b=<?php echo $b?>&operacion=multiplicar">Multiplicar</a></li>

</ul>