<?php
$arreglo=['laravel.png','yii.png','zend.png'];
// elegir al azar nunaposicion del arreglo
$posicion = array_rand($arreglo);
$imagen = imagecreatefrompng('images/'.$arreglo[$posicion]);
// agregar texto a la imagen
$color = imagecolorallocate($imagen, 255, 255, 255);
imagestring($imagen, 5, 10, 10, 'Framework PHP', $color);
// mostrar la imagen
header("Content-Type: image/png");
imagepng($imagen);

?>
