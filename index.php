<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>CRUD Ajax PHp y MySQL</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">CRUD Ajax PHp y MySQL</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Observación</button>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">Id Alumno</label>
          <input  type="text" id="idalumno" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Cod. Alumno</label>
          <input type="text" id="codalumno" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Cod. Matri</label>
          <input type="text" id="codmatri" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="Observacion">Observacion</label>
          <textarea style="text-transform:uppercase" id="obs" class="form-control"></textarea>
          <!--<input type="text" id="obs" class="form-control"/>--> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="idalumno">Cod. Alumno</label>
          <input type="text" id="update_idalumno" value="" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="codalumno">Cod. Alumno</label>
          <input type="text" id="update_codalumno" placeholder="Last Name" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="obs">Observaciones</label>
          <textarea style="text-transform:uppercase" id="update_obs" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="js/script.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>