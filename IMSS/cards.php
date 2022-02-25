<?php
include 'bt.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
      <title></title>
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
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                  <div class="card">
                              <table>
      <br>
       <tr>
        <?php
        include 'php/conexion.php';
        $con=0;
        $sql = $cnx->query("SELECT * FROM regis");
      while ($row=mysqli_fetch_array($sql)) {

?>
<td>
            <?php echo '
            <div class="card card-cascade narrower" >
  <div class="view view-cascade overlay">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body card-body-cascade">
  <center>
  <h2>Registro:</h2>
      <h4>Nombre:</h4>
    <p class="font-weight-bold card-title">'.$row['nombre'].'</p>
    <h4>Apellido Paterno:</h4>
    <p class="card-text">'.$row['paterno'].'</p>
    <h4>Apellido Materno:</h4>
    <p class="card-text">'.$row['materno'].'</p>
    <h4>Correo:</h4>
    <p class="card-text">'.$row['correo'].'</p>
    <h4>Genero</h4>
    <p class="card-text">'.$row['genero'].'</p>
    <h4>Fecha:</h4>
    <p class="card-text">'.$row['fecha'].'</p>
    <h4>Pais:</h4>
    <p class="card-text">'.$row['pais'].'</p>
    <h4>Estado:</h4>
    <p class="card-text">'.$row['estado'].'</p>
    <h4>institucion:</h4>
    <p class="card-text">'.$row['institucion'].'</p>
    <h4>Grado:</h4>
    <p class="card-text">'.$row['grado'].'</p>
    </center>
  </div>
</div>
';
?>
</td>
<?php
$con=$con+1;
if($con==3){
echo "</tr>
<tr>";
$con=0;
}
          }
          ?>  
          </tr>         
      </table>
                  </div>
            </div>
            <div class="col-sm-2"></div>
      </div>
              


</body>
</html>      			






