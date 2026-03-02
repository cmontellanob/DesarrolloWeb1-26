<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a=3; 
$b=4;
$c=5;

if($a>$b and $a>$c){
    echo "el numero mayor es:".$a;
}
if($b>$a and $b>$c){
    echo "el numero mayor es:".$b;
}
if($c>$b and $c>$a){
    echo "el numero mayor es:".$c;
}

?>
    
</body>
</html>