 <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Libro de Obra Digital</a>
        </div>
        <div class="navbar-form navbar-right">
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
            	<?php
            	if (isset($_SESSION[nombreUsuario])) {
            		echo " ".$_SESSION[nombreUsuario];
            	}
            	else {
            		echo " Usuario";
            	}
            	?>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li onclick="$('#cuerpo').load('pages_admin/usr_mi_perfil.php');"><a href="#usr_mi_perfil">Mi perfil</a></li>
              <li><a href="login.php">Cambiar usuario</a></li>
            </ul>
          </div> 
        </div>
      </div>
 </div> <!--.navbar-->