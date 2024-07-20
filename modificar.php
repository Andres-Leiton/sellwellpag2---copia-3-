<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM registro WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
			    <div class="form-group">
				    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value=" <?php echo $row['nombre']; ?>" required>					
                    </div>
				</div>
				
				<div class="form-group">
				    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-5">
					    <input type="text" class="form-control" id="apellido" name="apellido"
						placeholder="Apellido" value="<?php echo $row['apellido']; ?>" required>
                    </div>
				</div>
				
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
				    <label for="nombre" class="col-sm-2 control-label">email</label>
					<div class="col-sm-5">
					    <input type="text" class="form-control" id="nombre" name="email"
						placeholder="Email" value="<?php echo $row['correo']; ?>"  required>
                    </div>
				</div>
				
				<div class="form-group">
				    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
					    <input type="tel" class="from-control" id="telefono" name="telefono"
						placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
                    </div>
				</div>
				
				<div class="form-group">
				    <label for="tipo_empresa" class="col-sm-2 control-label">Tipo de Empresa</label>
					<div class="col-sm-5">
						<select class="form control" id="tipo_empresa" name="tipo_empresa">
							<option value="COMERCIENTE" <?php if($row['tipo_empresa']=='COMERCIENTE') echo 'selected'; ?>>COMERCIENTE</option>
							<option value="UNIOERSONAL" <?php if($row['tipo_empresa']=='UNIPERSONAL') echo 'selected'; ?>>UNIPERSONAL</option>
							<option value="LTDA" <?php if($row['tipo_empresa']=='LTDA') echo 'selected'; ?>>LTDA</option>
							<option value="OTRO" <?php if($row['tipo_empresa']=='OTROS') echo 'selected'; ?>>OTROS</option>
						</select>
					</div>
				</div>
				
								
				<div class="form-group">
				    <label for="exporte" class="col-sm-2 control-label">Exporta</label>
					
					<div class="col-sm-10">
					    <label class="radio-inline">
						    <input type="radio" id="exporta" name="exporta" value="1" <?php if($row['exporta']=='1') echo 'checked'; ?>> SI 
						</label>
						
						<label class="radio-inline">
						    <input type="radio" id="exporta" name="exporta" value="0" <?php if($row['exporta']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
				    <label for="intereses" class="col-sm-2 control-label">IMPORTA</label> 
                       
					   <div class="col-sm-5">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Electrodomesticos" <?php if(strpos($row['intereses'], "Electrodomesticos")!== false) echo 'checked'; ?>> Electrodomesticos
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Ropa" <?php if(strpos($row['intereses'], "Ropa")!== false) echo 'checked'; ?>> Ropa
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Cuero" <?php if(strpos($row['intereses'], "Cuero")!== false) echo 'checked'; ?>> Cuero
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php if(strpos($row['intereses'], "Otros")!== false) echo 'checked'; ?>> Otros
						</label>
					</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" color="brown" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>