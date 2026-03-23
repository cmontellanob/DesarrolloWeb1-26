<?php 
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
} else {
    $contador = 1;
}
setcookie('contador', $contador, time() + 3600); // La cookie expirará en 1 hora
echo "Has visitado esta página $contador veces.";
?>