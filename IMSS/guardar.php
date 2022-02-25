<?php  
include 'php/conexion.php';
session_start();
ob_start();


$correo=$_SESSION['s_correo'];

$cur=$_POST['curso'];


$in = "INSERT INTO cursos (correo,curso) VALUES ('$correo','$cur');";

$res = mysqli_query($cnx,$in);

if ($res) {
	header("Location: miscursos.php");
}else{
	echo "error";
}


?>