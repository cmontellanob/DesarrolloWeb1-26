<form action="sumar.php" method="post">

<?php
    $numero = $_GET["numero"];
    for($i=0; $i<$numero; $i++){
        ?>
        <input type="number" name="num[]"><br>
        <?php
    }
?>
<input type="submit" value="calcular">

</form>