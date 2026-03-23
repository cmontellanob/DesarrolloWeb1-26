<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas</title>
    <style>
        .rojo {
            background-color: red;
        }

        .verde {
            background-color: green;
        }

        .amarillo {
            background-color: yellow;
        }

        td {
            width: 200px;
            border: 1px solid black;

        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <?php 
        $filas=$_GET["filas"];
        $columnas=$_GET["columnas"];
        for($i=0;$i<$filas;$i++){
            echo "<tr>";
            for($j=0;$j<$columnas;$j++){?>
                <td class="<?php 
                switch(($i+1)%3){
                    case 0:
                        echo "verde";
                        break;
                    case 1:
                        echo "rojo";
                        break;
                    case 2:
                        echo "amarillo";
                        break;
                }
                ?>">&nbsp;</td>
            <?php  }
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>