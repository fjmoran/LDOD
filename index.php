<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Libro de Obra Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="recursos/bootstrap3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- jQuery FileUload-->
          
    <!-- Jquery-ui -->
    <link href="recursos/jquery-ui/css/zhi/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
    <!-- Utilizado por Summernote Editor -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="recursos/summernote/summernote.css" rel="stylesheet">
    <!-- Zhi CSS -->
    <link href="recursos/zhi/css/zhi.css" rel="stylesheet"> 
    <!-- Fonts -->
    <link href='fonts/fonts.css' rel='stylesheet' type='text/css'>
    <!-- Fav Icon -->    
    <link href="img/favicon.ico" rel="SHORTCUT ICON">
 
  </head>
  <body>
	<?php 
	include('header.php');
	include('sidebar.php');
	?>

	<div id="cuerpo">

   <?php 
		
   include('pages/default.php'); 
   ?>

	</div>

	<?php
	include('footer.php');
	?>

<iframe name="IframeOutput" class="hide"></iframe>

 <!-- javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="recursos/jquery/jquery-1.10.2.min.js"></script>    
  <script src="recursos/bootstrap3/js/bootstrap.min.js"></script> 
  <script src="recursos/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="recursos/summernote/summernote.min.js"></script>

  <script type="text/javascript"> 
    
    $(document).ready(function(){
      
      /* Menu activo */
      $('ul.bs-sidenav > li').click(function (e) {
         // e.preventDefault();
          $('ul.bs-sidenav > li').removeClass('active');
          $(this).addClass('active');                
      }); 
      
       jQuery(function($){
              $.datepicker.regional['es'] = {
                      closeText: 'Cerrar',
                      prevText: '&#x3c;Ant',
                      nextText: 'Sig&#x3e;',
                      currentText: 'Hoy',
                      monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                      'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                      monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                      'Jul','Ago','Sep','Oct','Nov','Dic'],
                      dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                      dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                      weekHeader: 'Sm',
                      dateFormat: 'dd-mm-yy',
                      firstDay: 1,
                      isRTL: false,
                      showMonthAfterYear: false,
                      yearSuffix: ''};
              $.datepicker.setDefaults($.datepicker.regional['es']);
      });
  })
  </script>

 </body>
</html>