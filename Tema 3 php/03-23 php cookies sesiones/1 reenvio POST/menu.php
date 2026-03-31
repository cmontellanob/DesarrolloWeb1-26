<?php
$a = $_GET["a"];
$b = $_GET["b"];
?>

<ul>
    <li><form  action="resultado.php" method="POST">
        <input type="hidden" name="a" value="<?php echo $a ?>">
        <input type="hidden" name="b" value="<?php echo $b ?>">
        <input type="hidden" name="operacion" value="Sumar">
        <input type="submit" value="Sumar">
        </form>
        </li>
    <li><form  action="resultado.php" method="POST">
        <input type="hidden" name="a" value="<?php echo $a ?>">
        <input type="hidden" name="b" value="<?php echo $b ?>">
        <input type="hidden" name="operacion" value="Restar">
        <input type="submit" value="Restar">
        </form></li>
    <li><form  action="resultado.php" method="POST">
        <input type="hidden" name="a" value="<?php echo $a ?>">
        <input type="hidden" name="b" value="<?php echo $b ?>">
        <input type="hidden" name="operacion" value="Multiplicar">
        <input type="submit" value="Multiplicar">
        </form></li>

</ul>