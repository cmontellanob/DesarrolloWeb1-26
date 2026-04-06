<?php
if (!isset($_SESSION['correo']))
    {?>
         <meta http-equiv="refresh" content="3;url=form-login.html">
    <?php
        die (" No esta permitido esta accion");
    }
    ?>