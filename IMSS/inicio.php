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
      <li class="nav-item">
        <a class="nav-link" href="inicio.php">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="miscursos.php">Mis Cursos</a>
      </li>
     <li>
       <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
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
  <div class="col-sm-6">
      <h4>CLIMSS</h4>


  </div>
  <div class="col-sm-6">
    

</div>
  



</div>


<center><img src="images/insomnio.png"></center>




<h4>Nuestros Cursos</h4><br><br>

<!--Carousel Wrapper-->
<!--Carousel Wrapper-->
<center><div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
   
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" style="background-image: url(images/covid.png); width: 349px; height: 250px" >
  Curso de prevencion covid-19
      </button>

      <!--img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
        alt="First slide"-->
    </div>
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Curso de prevencion covid-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="guardar.php" method="post" >
      <div class="modal-body">
       <img src="images/sos.png"; width="100%" >
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" value="curso1" name="curso">Inscribirme</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal2" style="background-image: url(images/covid1.png); width: 349px; height: 250px" >
  Curso de sexualidad
      </button>
      <!--img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
        alt="Second slide"-->
    </div>
    <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Curso de Sexsualidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="images/lol.png" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="guardar.php" method="post">
        <button type="submit" class="btn btn-primary" value="curso2" name="curso">Inscribirme</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!--/Second slide-->
    <!--Third slide-->


    <div class="carousel-item">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal3" style="background-image: url(images/covid2.png); width: 349px; height: 250px" >
  Curso de sexualidad
      </button>
      <!--img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
        alt="Second slide"-->
    </div>
    <div class="modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Curso de Sexsualidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="images/lel.png" width="100%s">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="guardar.php" method="post">
        <button type="submit" class="btn btn-primary" value="curso2" name="curso">Inscribirme</button>
        </form>
      </div>
    </div>
  </div>
</div>







 
  </div>
</div>


</div></center>
    <!--/Third slide-->
</body>
</html>