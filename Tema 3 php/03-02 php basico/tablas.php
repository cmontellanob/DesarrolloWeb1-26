<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: 0;
            
        }
        .rrelleno{
            background-color: black;
        }
        tr {
            border: 2px solid black;
        }
        td {
            border: 2px solid black;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <?php
        $filas=10;
        $columnas=10;
        echo "<table>";
        for($i=0;$i<$filas;$i++){
            echo "<tr>";
            for($j=0;$j<$columnas;$j++){
               if(($i+$j)%2==0){
                 echo '<td class="rrelleno"> &nbsp; </td>';
               }else{
                 echo "<td> &nbsp; </td>";
               }
           
            }
        
            echo "</tr>";
        
        }
        echo "</table>"
    ?>
</body>
</html>