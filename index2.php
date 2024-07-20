<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT *FROM registro $where";
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
<!--<link rel="stylesheet" type="text/css" href="estilos.css">-->
	</head>
	
	<body>
	
	
		<div class="container">
			<div class="row">
				<h2 style="color: white ;text-align:center">EMPRESAS REGISTRADAS</h2>
			</div>
			<br>
			<br>
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><h4 style="color:white">ID </th></h4>
							<th><h4 style="color:white">Nombre</th></h4>
							<th><h4 style="color:white">Apellido</th></h4>
							<th><h4 style="color:white">Email</th></h4>
							<th><h4 style="color:white">Telefono</th></h4>
							<th><h4 style="color:white">Tipo de Empresa</th></h4>
							<th><h4 style="color:white">Exporta</th></h4>
							<th><h4 style="color:white">Importa</th></h4> 
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['apellido']; ?></td>
								<td><?php echo $row['correo']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['tipo_empresa']; ?></td>
								<td><?php echo $row['exporta']; ?></td>
								<td><?php echo $row['intereses']; ?></td> 
								
								<td><a href="modificar.php?id=<?php echo $row['id'];?>"class="btn btn-danger btn-ok">Modificar</a>
								<td><a href="eliminar.php" data-href="eliminar.php?id=<?php echo $row
								['id']; ?>" data-toggle="modal" data-target="#confirm-delete">
								<span class="btn btn-danger btn-ok">Eliminar</span></a></td>
								
								
							<!--	<td><a href="modificar.php?id=<?php echo $row
								['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								-->
								
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!--<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						
						<a href="index.php" class="btn btn-danger btn-ok">REGRESAR</a>-->
				</div>
<div class="row">
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b><center>Nombre: <center></b><input type="text" id="campo" name="campo" />
					<center><a href="indexR.php" class="btn btn-danger btn-ok">REGRESAR</a>
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-danger" /><center>
				</form>
			
			</div>	
	
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>