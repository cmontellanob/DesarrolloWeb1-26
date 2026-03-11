<form action="sumar.php" method="post">

<?php
    $numero = $_GET["numero"];
    for($i=0; $i<$numero; $i++){
        ?>
        <input type="number" name="num<?php echo $i ?>"><br>
        <?php
    }
?>
<input type="hidden" name="numero" value="<?php echo $numero?>">
<input type="submit" value="calcular">

</form>