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
	$sql = "SELECT *FROM registros $where";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
<head>
 
	     <link rel="stylesheet" type="text/css" href="estilos.css">
         <meta name="viewport" content="widht=devide-width, initial-scale=1">
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



</body>
</html>

<html>
<body>



<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
<!--<form action="/action_page.php">-->
  <fieldset>
    <legend><h2> REGISTRO :</h2></legend>
    
	<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
			    <div class="form-group">
				    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-5">
					    <input type="text" class="form-control" id="nombre" name="nombre"
						placeholder="Nombre" required>
                    </div>
				</div>
				<div class="form-group">
				    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-5">
					    <input type="text" class="form-control" id="apellido" name="apellido"
						placeholder="apellido" required>
                    </div>
				</div>
				<div class="form-group">
				    <label for="nombre" class="col-sm-2 control-label">email</label>
					<div class="col-sm-5">
					    <input type="text" class="form-control" id="nombre" name="email"
						placeholder="email" required>
                    </div>
				</div>
				<div class="form-group">
				    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
					    <input type="tel" class="from-control" id="telefono" name="telefono"
						placeholder="Telefono">
                    </div>
				</div>
				
				<div class="form-group">
				    <label for="tipo_empresa" class="col-sm-2 control-label">Tipo de Empresa</label>
					<div class="col-sm-10">
					    <select class="form control" id="estado_civil" name="tipo_empresa">
						    <option value="COMERCIANTE">COMERCIANTE</option>
							<option value="UNIPERSONAL">UNIPERSONAL</option>
							<option value="LTDA">LTDA</option>
							<option value="OTRO">OTRO</option>
						<select>
					</div>
				</div>
				
				<div class="form-group">
				    <label for="exporte" class="col-sm-2 control-label">Exporta</label>
					
					<div class="col-sm-10">
					    <label class="radio-inline">
						    <input type="radio" id="exporta" name="exporta" value="1" cheked> SI 
						</label>
						
						<label class="radio-inline">
						    <input type="radio" id="exporta" name="exporta" value="0" > NO 
						</label>
					</div>
				</div>
				
				<div class="form-group">
				    <label for="intereses" class="col-sm-2 control-label">IMPORTA</label> 
                        <label class="checkbox-inline">
						     <input type="checkbox" id="intereses[]" name="intereses[]" value="Electrodomesticos"> Electrodomesticos
						</label>	 
					    <label class="checkbox-inline">
						    <input type="checkbox" id="intereses[]" name="intereses[]" value="Ropa"> Ropa
                        </label>

                        <label class="checkbox-inline">
						    <input type="checkbox" id="intereses[]" name="intereses[]" value="Cueros"> Cueros
                        </label>
						
						<label class="checkbox-inline">
						    <input type="checkbox" id="intereses[]" value="Otros">Otros
							
					    </label>
					</div>
				</div>
				
				
				
				
				
   <!-- <label for="lname">Tiene usted un negocio:</label><br>
    <select id="country" name="country">
    <option value="au">SI</option>
    <option value="ca">NO</option>-->
    <label for="text" id="lname" name="lname" value=" "><br>
    </select>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      .button {
       background-color: Aqua;
       border: none;
       color: Black;
       padding: 16px 32px;
       text-align: center;
       font-size: 18px;
       margin: 4px 2px;
       opacity: 0.6;
       transition: 0.3s;
       display: inline-block;
       text-decoration: none;
       cursor: pointer;
}

.button:hover {opacity: 1}
    </style>
</head>
<div class="from-group">
				    <div class="col-sm-offset-2 col-sm-10">
					    
						<button type="sumint" class="btn btn-danger">Hecho</button>
					
					</div>

<a href="index.php"	class="btn btn-primary">Regresar</a>

  </fieldset>
</form>

</body>
</html>