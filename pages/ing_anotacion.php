 <div class="col-md-11">
    <h2>Ingreso de anotación</h2>
    <h5>Registrar una anotación en el libro de Obra de [Nombre de la Obra]</h5><br>

    <form role="form" class="form-horizontal">
    	<div class="row">
    		<div class="col-md-12">
		    	<div class="form-group">
		    		<label for="fecha" class="col-md-10 control-label"> </label>
		    		<div class="col-md-2">
		    			<input type="text" class="form-control text-center" placeholder="DD/MM/AAAA" readonly="true" value="<?php echo date('d-m-Y') ?>">
		    		</div>	
		    	</div> 			
		    	<div class="form-group">
		    		<label for="emisor" class="col-md-1 control-label">De:</label>
		    		<div class="col-md-11">
		    			<input type="text" class="form-control" placeholder="Emisor">
		    		</div>	
		    	</div>
		    	<div class="form-group">
		    		<label for="receptor" class="col-md-1 control-label">Para:</label>
		    		<div class="col-md-11">
		    			<input type="text" class="form-control" placeholder="Receptor">
		    		</div>	
		    	</div>	
		    	<div class="form-group">
		    		<div class="col-md-11 col-md-offset-1">
		    			<textarea class="form-control" id="summernote" name="content">
					</textarea>
		    		</div>
		    	</div>			    		    	
		    </div>	
	    </div>


    <div class="row pull-right"> <!-- fila para botones -->
      <div class="col-md-12">
        <p>
          <button class="btn btn-default">Cancelar</button>
          <button class="btn btn-primary">Guardar</button>
        </p>
      </div>
    </div>

    </form>

</div><!-- .span11 -->


 <script type="text/javascript"> 
 	$(document).ready(function(){
 		$('#summernote').summernote({
  			height: 300,  //set editable area's height
  			 toolbar: [
    			// ['style', ['style']], 
   				['style', ['bold', 'italic', 'underline', 'clear']],
    			['fontsize', ['fontsize']],
    			['color', ['color']],
    			['para', ['ul', 'ol', 'paragraph']],
    			//['height', ['height']],
    			//['insert', ['picture', 'link']],
    			//['table', ['table']], 
    			//['help', ['help']] 
  ]
		});
 	});	
 </script>	
