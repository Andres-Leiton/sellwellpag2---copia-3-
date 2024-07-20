<?php  
  
  require 'conexion.php';
  
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $email = $_POST['email'];
   $telefono = $_POST['telefono'];
   $tipo_empresa = $_POST['tipo_empresa'];
   $exporta = isset ($_POST['exporta']) ? $_POST['exporta'] : 0;
   $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
   
   $arrayIntereses = null;
   
   $num_array = count($intereses);
   $contador = 0;

   if($num_array>0){
        foreach ($intereses as $key => $value) {
            if ($contador != $num_array-1)
            $arrayIntereses .=$value.' ';
            else
            $arrayIntereses .=$value;
            $contador++;
        }
    }
    $sql = "INSERT INTO registro (nombre, apellido, correo, telefono, tipo_empresa, exporta, intereses) VALUES 
	('$nombre', '$apellido', '$email', '$telefono', '$tipo_empresa', '$exporta', '$arrayIntereses')";
    $resultado = $mysqli->query($sql);    
?>
<html lang="es">
     <head>
         <meta name="viewport" content="widht=devide-width, initial-scale=1">
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/bootstrap-theme.css" rel="stylesheet">
		 <script src="js/jquery-3.1.1.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
	</head>	 
    <body>
	    <div class="container">
		    <div class="row">
			     <div class="row" style="text-align:center">
				    
<!-- Modal -->				
				<div class="modal-dialog">
				<div class="modal-content">
				
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<?php if($resultado) { ?>
						<h3 class="modal-title" id="myModalLabel">REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3 class="modal-title" id="myModalLabel">ERROR AL GUARDAR</h3>
						<?php } ?>
				</div>
				
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
						<a href="index2.php" class="btn btn-danger btn-ok">REGRESAR</a>
				</div>
					
					
					
					
					<!--<?php if($resultado) { ?>
					      <h2>REGISTRO GUARDADO</h2>
					      <?php } else { ?>
						  <h2>ERROR AL GUARDAR</h2>
				    <?php } ?>	
                    <a href="index.php"	class="btn btn-primary">Regresar</a>
-->	







	</div>
			</div>
        </div>			
    </body>
</html>	