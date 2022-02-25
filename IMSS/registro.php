<?php
include("php/conexion.php");
?>

<?php
	if (isset($_POST['registrar'])) 
	{
		if (!empty($_POST['nombre']) && !empty($_POST['paterno']) && !empty($_POST['materno']) && !empty($_POST['correo']) && !empty($_POST['genero']) && !empty($_POST['fecha']) && !empty($_POST['pais']) && !empty($_POST['estado']) && !empty($_POST['institucion']) && !empty($_POST['grado']) && !empty($_POST['contrasena']) )
			{
				mysqli_query($cnx,"INSERT into regis values
					 ( '$_POST[nombre]',
					   '$_POST[paterno]',
					   '$_POST[materno]',
					   '$_POST[correo]',
					   '$_POST[genero]',
					   '$_POST[fecha]',
					   '$_POST[pais]',
					   '$_POST[estado]',
					   '$_POST[institucion]',
					   '$_POST[grado]',
					   '$_POST[contrasena]' )");
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<!--Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #151C13">

  <!-- Navbar brand -->
  <img src="images/mexicoo.png">

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Tramites
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gobierno</a>
      </li>
     

      <!-- Dropdown -->
     

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>




<ul class="nav justify-content-end lighten-4 py-4" style="background-color: #0F2309" >
  <li class="nav-item">
    <a class="nav-link active" href="#!">inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#!">Conoce al IMSS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#!">Transparencia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#!">Directorio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#!">Contacto Ciudadanos</a>
  </li>


</ul>
<center><h2>Registrate</h2></center>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">

	<form method="post">
		<h5>Nombre</h5>
		<input class="form-control"type="text" name="nombre" placeholder="nombre"><br>
		<h5>Apellido Paterno</h5>
		<input class="form-control"type="text" name="paterno" placeholder="apellido paterno" ><br>
		<p>Apellido Materno</p>
		<input class="form-control"type="text" name="materno" placeholder="apellido materno"><br>
		<p>Correo Electronico </p>
		<input class="form-control" type="mail" name="correo" placeholder="correo Electronico"><br>
		<p>Contraseña</p>
		<input class="form-control" type="text" name="contrasena" placeholder="Contraseña"><br>
		<p>Genero</p>
		<input class="form-control" type="text" name="genero" placeholder="genero"><br>
		<p>Fecha Nacimiento</p>
		<input class="form-control" type="text" name="fecha" placeholder="fecha Nacimiento"><br>
		<p>Pais</p>
		<select class="form-control" type="text" name="pais" placeholder="Pais"><br>
		<option>Estados Unidos</option>
		<option>Canada</option>
		<option>Mexico</option>
		<option>Brasil</option>
		<option>Puerto Rico</option>
		<option>Francia</option>
		<option>Rusia</option>
		<option>China</option>
		<option>Holanda</option>
		<option>Italia</option></select>
		<p>Estado</p>
		<select class="form-control" type="text" name="estado" placeholder="estado">
			<option>Monterrey</option>
			<option>Tamaulipas</option>
			<option>Coahuila</option>
			<option>Chihuahua</option>
			<option>Sonora</option>
			<option>Edo.Mexico</option>
			<option>Puebla</option>
			<option>Guadalajara</option>
			<option>Michoacan</option>
		</select><br>
		<p>institucion</p>
		<input class="form-control" type="text" name="institucion" placeholder="institucion"><br>
		<p>Grado Institucional </p>
		<select class="form-control" type="text" name="grado" placeholder="Grado Institucional">
			<option>Elige una opcion</option>
			<option>Ninguno</option>
			<option>Estudiante</option>
			<option>Pasante</option>
			<option>Tecnico</option>
			<option>Licenciatura</option>
			<option>Residente</option>
			<option>Especialidad</option>
			<option>Maestria</option>
			<option>Doctorado</option>
		</select><br>
		<p>Contraseña</p>
		<input class="form-control" type="text" name="contrasena" placeholder="Contraseña"><br>
		
			<button type="submit" class="btn btn-primary btn-lg btn-warning" name="registrar">registrar</button>
			
	</form>
			Ya tienes cuenta?<a href="sesion.php">Inicia Sesion</a>
	</div>

	<div class="col-sm-4">

	</div>
</div>
</body>
</html>