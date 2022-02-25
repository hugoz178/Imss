<?php  
include 'php/conexion.php';

$tarj=$_POST['tar'];
$tarj2=$_POST['tar2'];
$tarj3=$_POST['tar3'];
$tarj4=$_POST['tar4'];

$com = $tarj.'-'.$tarj2.'-'.$tarj3.'-'.$tarj4;

$in = "INSERT INTO card (card) VALUES ('$com');";

$res = mysqli_query($cnx,$in);

if ($res) {
	header("Location: tarjeta.php");
}else{
	echo "error";
}

?>
