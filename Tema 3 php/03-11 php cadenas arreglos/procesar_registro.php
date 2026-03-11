<?php
echo "<table border='1'>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>";
foreach ($_POST as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";

?>
<h2>codigo espagueti</h2>
<table border="1">
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>
    <?php foreach ($_POST as $key => $value) {
    ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php } ?>

</table>