<div class="container">
<div class="row">
  <div class="col-md-2">
    <div class="bs-sidebar">
      <ul class="nav bs-sidenav">
        <li class="nav-header">Ingreso</li>
        <li onclick="$('#cuerpo').load('pages/ing_anotacion.php');"><a href="#ing_anotacion"><span class="glyphicon glyphicon-chevron-right"></span> Nueva anotación</a></li>
        <li onclick="$('#cuerpo').load('pages/ing_sinfirma.php');"><a href="#ing_sinfirma"><span class="glyphicon glyphicon-chevron-right"></span> Anotaciones sin firmar</a></li>
        <li onclick="$('#cuerpo').load('pages/ing_vencidas.php');"><a href="#ing_vencidas"><span class="glyphicon glyphicon-chevron-right"></span> Anotaciones vencidas</a></li> 
        <li class="nav-header">Revisión</li>
        <li onclick="$('#cuerpo').load('pages/rev_buscar.php');"><a href="#rev_buscar"><span class="glyphicon glyphicon-chevron-right"></span> Buscar anotación</a></li>         
      </ul>
    </div>
  </div>
 <div class="col-md-10"> 
   <div class="container">

    <div class="btn-group pull-right">
      <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>      
      <a class="btn btn-default" href="admin.php"><span class="glyphicon glyphicon-wrench"></span> Administración</a>
      <a class="btn btn-default" href="login.php"><span class="glyphicon glyphicon-off"></span> Salir</a>
    </div>

   </div>

 <div class="row" id="main-box">
  <!-- divs se cierran en footer -->