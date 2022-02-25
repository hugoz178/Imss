<?php
include("php/conexion.php");
include 'bt.php';
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

	<?php 


if (isset($_POST['enviar']))
{

  //  $emailcontacto = "Tu email";
  $emailcontacto = $_POST['correo'];
  // asunto del email
  $asunto = "¡Gracias por suscribirte a MyTicketWallet!";
  // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $cabeceras .= 'From:MyTicketWallet';
  // Cuerpo del mensaje
  $mensaje =  '
  
  <div class="container" style="background-color: blue;">
  <center><h1 class="card-header-title mb-3"><font color="white">Gracias por averte registrado a Nuesra Pagina :) ,</font><font color="#175DE9"> '.$_POST['nombre'].' </font> </h1> 
  <h3><font color="white"> Tu email es:</font> '.$_POST['correo'].'</h3></center>

  <center><h3><font color="white"> Tu Apellido Paterno es:</font> '.$_POST['paterno'].'</h3></center>
  <center><h3><font color="white">Tu Apellido Materno es:</font> '.$_POST['materno'].'</h3></center>
  <center><h3><font color="white"> Tu contraseña es:</font> '.$_POST['contrasena'].'</h3></center>
  <center><h3><font color="white"> Tu genero es:</font> '.$_POST['genero'].'</h3></center>
  <center><h3><font color="white"> Fecha de registro:</font> '.$_POST['fecha'].'</h3></center>

  <center><h4><font color="white">En Hitmian47.com.mx encontraras muchas cosas interesantes. :)</font></h4></center>
  </div>
  <div class="container" style="background-color: red;">
  </div>';
  




  // Utilizamos la funcion mail de php para enviar el correo

  (mail($emailcontacto, $asunto, $mensaje, $cabeceras));
}

?>

<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>



</head>
<body>
	<!--Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #012322">

  <!-- Navbar brand -->
  <img src="images/mexicoo.png" style="width: 10%">
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

	<form method="post" id="form" name="form">
		<div class="form-group">
			<div class="md-form">
            <input type="text" id="nombre" class="form-control validate" name="nombre">
            <label for="nombre" data-success="right" class="disabled">Nombre:</label>
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
	
		<input class="form-control validate" type="text" name="paterno" id="paterno"  ><br>
    <label for="paterno" data-success="right" class="disabled">Ap paterno:</label>
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
				<input class="form-control validate" type="text" name="materno" id="materno" >
        <label for="materno" data-success="right" class="disabled">Materno:</label><br>		
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
				<input class="form-control validate" type="mail" name="correo" id="correo" >
        <label for="correo" data-success="right" class="disabled">Correo:</label><br>
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
				<input class="form-control validate" type="password" name="contrasena" id="contrasena" >
        <label for="contrasena" data-success="right" class="disabled">Contraseña:</label><br>
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
		<p>Genero</p>
		<input class="form-control validate" type="text" name="genero" placeholder="Genero"><br>
			</div>
		</div>		
		<div class="form-group">
			<div class="md-form">
		<p>Fecha</p>
		<input class="form-control validate" type="text" name="fecha" placeholder="fecha"><br>
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
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
			</div>
		</div>			
		<div class="form-group">
			<div class="md-form">
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
			</div>
		</div>
		<div class="form-group">
			<div class="md-form">
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
			</div>
		</div>		
		
			<center><input type="submit" class="btn btn-success" value="Registra" name="registrar"></center>

			
	</form>
			Ya tienes cuenta?<a href="sesion.php">Inicia Sesion</a>
	</div>


	<div class="col-sm-4">

	</div>
</div>
</body>
</html>

<script type="text/javascript">

//java

$( "#form" ).bootstrapValidator({

   feedbackIcons: {
 
     valid: 'glyphicon glyphicon-ok',
 
     invalid: 'glyphicon glyphicon-remove',
 
     validating: 'glyphicon glyphicon-refresh'
 
   },
 
   fields: {
 
     nombre: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar tu nombre'
 
         },

         regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          }
 
       }
 
     },

     paterno: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar tu nombre'
 
         },

         regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          }
 
       }
 
     },

     materno: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar tu apellido materno'
 
         },

         regexp: {

                regexp: /[a-zs]/i,

                message: 'El nombre de usuario no permite el uso de dígitos ni caracteres especiales.\n'

          }
 
       }
 
     },     

     correo: {
 
       validators: {

        emailAddress: {
 
           message: 'El correo electrónico debe ser válido.'
 
         },
 
         notEmpty: {
 
           message: 'Ingresa tu correo electrónico.'
 
         }
 
       }
 
     },


 
     contrasena: {
 
       validators: {
 
         notEmpty: {
 
           message: 'Debes ingresar una contraseña.'
 
         },
 
         stringLength: {
 
           min: 5,
     	   max:25,
 
           message: 'Maximo 5 caracteres y maximo 25.\n'
 
         }

       }
 
     }
 
}
 
});

</script>