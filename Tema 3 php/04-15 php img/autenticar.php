<?php session_start();
include('conexion.php');
$correo=$_POST["correo"];
$password=sha1($_POST["password"]);
$sql="select correo,nivel from usuarios where correo=? and password=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("ss",$correo,$password);
if($stmt->execute())    
{
    $consulta=$stmt->get_result();
    $usuario = mysqli_fetch_array($consulta);
    if(isset($usuario["correo"])){
        $_SESSION["correo"]=$usuario["correo"];
        $_SESSION["nivel"]=$usuario["nivel"];
        
         header("Location:read.php");
    }
    else{
        session_destroy();
        echo("no esta autentificado");
        ?>
        <meta http-equiv="refresh" content="3;url=form-login.html">

        <?php 
    }
}
?>