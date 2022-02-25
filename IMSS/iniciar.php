<?php
session_start();
include 'php/conexion.php'; 
$correo=$_POST['inicio'];
$contra=$_POST['contra'];

$proceso=$cnx->query("SELECT * FROM regis WHERE correo='$correo' and contrasena='$contra'");

if($resultado=mysqli_fetch_array($proceso)){
	$_SESSION['s_correo']=$correo;
	header("Location:inicio.php");
}else{
header("Location:registro.php");
}
?>