	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		
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
<div class="row">
	

<div class="col-md-6" style="background-color: #E5ECE3"><br><br><br>
                <form action="iniciar.php" method="post" >
	<center><h1>iniciar sesion</h1>

		<h4>Correo Electronico</h4>
		<input class="form-control" type="text" name="inicio" placeholder="Correo Electronico" style="width: 50%">
		<h4>Contraseña</h4>
		<input class="form-control" type="password" name="contra" placeholder="Contraseña" style="width: 50%"><br><br>
		
		<input class="btn btn-success" type="submit" name="botonsito">
	</form>	
	No tienes cuenta?<a href="registro.php">Registrate</a><br><br></center>
	

		
	</div>
	
	
			<div class="col-md-6" style="background-color: #E5ECE3"><br><br>
			<img src="images/familia.png">
			</div>

   </div>
	</div>
	</body>
	</html>









