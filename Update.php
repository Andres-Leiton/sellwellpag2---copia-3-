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
                           $arrayIntereses .= $value.' ';
                           else
                           $arrayIntereses .= $value;
                           $contador++;
                }
        }
        $sql = "UPDATE registro SET nombre='$nombre', apellido='$apellido', correo='$email', telefono='$telefono', tipo_empresa='$tipo_empresa',
		exporta='$exporta', intereses='$arrayIntereses' WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
?>
<html lang="es">
          <head>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link href="css/bootstrap.min.css" rel="stylesheet">
                  <link href="css/bootstrap-theme.css" rel="stylesheet">
                  <script src="js/jquery-3.1.1.min.js"></script>
                  <script src="js/bootstrap.min.js"></script>
                  <style>
body {

    background: linear-gradient(135deg, #c44e17 0%, #1692a8 100%);
    --color-primary:#e96f36;
    --color-secondary: #1692a8;
    --boton-padding: 20px 40px;
}

</style>
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
						<h3 class="modal-title" id="myModalLabel">REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3 class="modal-title" id="myModalLabel">ERROR AL MODIFICAR</h3>
						<?php } ?>
				</div>
				
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
						<a href="index.php" class="btn btn-danger btn-ok">REGRESAR</a>
				</div>		   
										   
			<!--						   
				<?php if($resultado) { ?>
                <h3>REGISTRO MODIFICADO</h3>
                <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
                <?php } ?>
                <a href="index.php" class="btn btn-primary">Regresar</a>
             -->               
							   
							   
							   
							   
							   
							   </div>
                        </div>
                </div>
          </body>
</html>