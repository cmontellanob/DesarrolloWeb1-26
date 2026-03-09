<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cuadro {
            margin: 0 auto;
            width: 150px;
            padding: 10px;
            border: 1px solid black;

        }
    </style>
</head>

<body>

    <div class="cuadro">
        <?php
        include ('operaciones.php');
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $suma = sumar($num1,$num2);
        echo "la suma es " . $suma;

        ?>
        



    </div>

</body>

</html>