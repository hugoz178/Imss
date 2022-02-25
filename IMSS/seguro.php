
<!-- Códigos de CONEXION -->
<?php
	include("php/conexion.php");
	#require_once('php/conexio.php');
?>

<!-- Códigos de REGISTRAR -->
<?php
	if (isset($_POST['registrar'])) 
	{
		if (!empty($_POST['marca']) && !empty($_POST['ano']) && !empty($_POST['modelo']) && !empty($_POST['edad']) && !empty($_POST['genero']) && !empty($_POST['postal']) && !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) )
			{
				mysqli_query($cnx,"INSERT into seguro values
					 ( '$_POST[marca]',
					   '$_POST[ano]',
					   '$_POST[modelo]',
					   '$_POST[edad]',
					   '$_POST[genero]',
					   '$_POST[postal]',
					   '$_POST[nombre]',
					   '$_POST[email]',
					   '$_POST[telefono]' )");
			}
	}
?>

<!-- Códigos de BUSQUEDA -->
<?php
	if (isset($_POST['buscar'])) 
	{
		if (!empty($_POST['email'])|| $_POST['email']!="Ingresa email")
			{
				$sql="SELECT * from seguro where email='$_POST[email]'";
				$registro=mysqli_query($cnx,$sql);
				$campo=mysqli_fetch_array($registro);
			}
	}
?>

<!-- Códigos de ELIMINAR -->
<?php
	if (isset($_POST['eliminar'])) 
	{
		if (!empty($_POST['email']))
			{
			    error_reporting(0);
				$sql="DELETE from seguro where email='$_POST[email]'";
				$registro=mysqli_query($cnx,$sql);
				header("location:index.php");
			}
	}
?>

<!-- Códigos de ACTUALIZAR -->
<?php
	if (isset($_POST['actualizar'])) 
	{
		if (!empty($_POST['email']))
			{
				mysqli_query($cnx,"UPDATE seguro set
					 marca='$_POST[marca]',
					 ano='$_POST[ano]',
					 modelo='$_POST[modelo]',
					 edad='$_POST[edad]',
					 genero='$_POST[genero]',
					 postal='$_POST[postal]',
					 nombre='$_POST[nombre]',
					 email='$_POST[email]',
					 telefono='$_POST[telefono]'
					 where email='$_POST[email]'");
			}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agenda</title>
<link rel="icon" type="images/png" href="images/icono.png"  > 
	<!-- CSS -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

	<!-- JavaScript -->
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>


	
	
	<!-- Mis CSS -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	
</head>

<body>
	<!-- As a link -->
<nav class="navbar navbar-dark primary-color" style="background-color: #3DC9EB">
  <a class="navbar-brand" href="#"></a>
  <img src="images/summer.png">
</nav>
<!-- As a link -->
<nav class="navbar navbar-dark " style="background-color: #FAFAFA">
  <a class="navbar-brand" href="#"> </a>
  <img src="images/ahorro.png">
</nav>

<center><h1>El Mejor Comparador de Seguros de Autos, Compara en 10 Segundos</h1></center>
<center><p>Ingresa los datos de tu auto y encuentra el mejor precio comprando todas las aseguradoras en Mexico</p></center>

 <div class="container">
	 
 	<div class="row">
  		<div class="col-md-3" style="background-color: #FAFAFA">
  			<div class="card">
  				<img src="images/tarjeta.png" style="width: 100%">
  			 <br>
  				
  			</div>
		</div>
		
  		<div class="col-md-9" style="background: #FAFAFA">

				<br><br><br>
				 	 	
						<form class="" method="post">

    	   
		
			
    		<select type="text" class="form-control" placeholder="Marca" autofocus name="marca">
    			<option>Marca</option>
    			<option>Nissan</option>
    			<option>Chevrolet</option>
    			<option>Toyota</option>
    			<option>Mercedenz</option>
    		</select><br>


	          
			<input type="text" class="form-control" placeholder="año" name="ano" value="<?php if (isset($_POST['buscar'])) echo $campo['ano']?>"><br>

	
			<input type="text" class="form-control" placeholder="modelo" name="modelo" value="<?php if (isset($_POST['buscar'])) echo $campo['modelo']?>"><br>
			
		
			<select type="text" class="form-control" placeholder="edad " name="edad">
				<option>edad</option>

				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				<option>32</option>

			</select><br>

			<select type="text" class="form-control" placeholder="genero " name="genero">
				<option>genero</option>

				<option>Masculino</option>
				<option>Femenino</option>

			</select><br>

			<input type="text" class="form-control" placeholder="postal " name="postal" value="<?php if (isset($_POST['buscar'])) echo $campo['postal']?>"><br>

			<input type="text" class="form-control" placeholder="nombre " name="nombre" value="<?php if (isset($_POST['buscar'])) echo $campo['nombre']?>"><br>

			<input type="email" class="form-control" placeholder="email " name="email" value="<?php if (isset($_POST['buscar'])) echo $campo['email']?>"><br>

			<input type="text" class="form-control" placeholder="telefono " name="telefono" value="<?php if (isset($_POST['buscar'])) echo $campo['telefono']?>"><br>
	
			<button type="submit" class="btn btn-primary btn-lg btn-warning" name="registrar"><span class="glyphicon glyphicon-plus"></span></button>
			
			<button type="submit" class="btn btn-primary btn-lg btn-warning" name="eliminar"><span class="glyphicon glyphicon-minus"></span></button>
			
			<button type="submit" class="btn btn-primary btn-lg btn-warning" name="buscar"><span class="glyphicon glyphicon-search"></span></button>
			
			<button type="submit" class="btn btn-primary btn-lg btn-warning" name="actualizar"><san class="glyphicon glyphicon-refresh"></span></button>
		
		</form>
		
		</div>
		
	
	 </div>
	 					<table class="table table-hover table-condensed table-bordered">
			<tr>
				<td>Marca</td>
				<td>Año</td>
				<td>modelo</td>
				<td>edad</td>
				<td>genero</td>
				<td>postal</td>
				<td>nombre</td>
				<td>Email</td>	
				<td>telefono</td>				
			</tr>
			<?php
					$sql="SELECT * from seguro";
					$registro=mysqli_query($cnx,$sql);
					while($campo=mysqli_fetch_array($registro))
					{
			?>
      		<tr class="small">
				<td><?php echo $campo['marca'];?></td>
				<td><?php echo $campo['ano'];?></td>
				<td><?php echo $campo['modelo'];?></td>
				<td><?php echo $campo['edad'];?></td>
				<td><?php echo $campo['genero'];?></td>
				<td><?php echo $campo['postal'];?></td>
				<td><?php echo $campo['nombre'];?></td>
				<td><?php echo $campo['email'];?></td>
				<td><?php echo $campo['telefono'];?></td>
      		</tr>
			<?php
					}
			?>
			</table>
	 <div class="row">
		<div class="col-md-12">
	 		<p align="center">Copyright © 2020 Master-db. Todos los derechos reservados. Desarrollado por el David Belmares// <a>BootStraps HTML5 + CSS3 + PHP</a> <a href="https://postparaprogramadores.com/libro-bootstraps/"></a></p>
 		</div>
	 </div>
</div>
  	
</div>

</body>
</html>