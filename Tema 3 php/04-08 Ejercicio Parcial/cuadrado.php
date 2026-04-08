<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>

</head>
<body>
    <?php  include ("pizarra.php");
    session_start();
    $_SESSION['pizarra']->cuadrado();
    ?>
    <meta http-equiv="refresh" content="2;url=menu.html">
</body>
</html>