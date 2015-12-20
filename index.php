<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Notificaciones... by Andrés Domínguez</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="flexboxgrid.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="notificaciones.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: "Lato", sans-serif;
		}
		form{
			width: 80%;
			margin: 10px auto;
		}
		form label{
			margin-top: 15px;
			margin-bottom: 15px;
		}
		form .btn{
			float: right;
			margin: 15px;
		}
		#Label-nuevo{
			width: 100%;
			padding: 5px;
			margin-top: 0;
			font-size: .7em;
			font-stretch: semi-condensed;

		}
		.bg{
			background: #ccc;
			border-radius: 5px;
			padding: 10px;
			margin: 10px;
		}
		.center{
			margin: 0 auto;
		}
		.form-control{
			border-radius: 5px;
			border: 1px solid #ccb;
			padding: 5px;
			width: 100%;
		}
		#Label-nuevo{
			display: inline-block;
		}
		header{
			background: #273b47;
			padding: 1.1em;
			margin-bottom: 1.3em;
		}
		.btn{
			border: 3px solid #273b47 ;
			padding: .6em 1em;
			text-decoration: none;
			color:inherit;
		}
	</style>
</head>
<body>
	<header >
		<div>
			<img width="200px" src="http://www.andresdominguez.mx/img/logo2.png">
		</div>
	</header>
	<?php 
		include("http://andresdominguez.mx/con.php");
		//selecciono campos para mostrarlos(todos)
		$result=pg_query($conexion, "SELECT nombre FROM notificaciones;");
		$result1=pg_query($conexion, "SELECT last FROM notificaciones;");
		$result2=pg_query($conexion, "SELECT pais FROM notificaciones;");

		$row = pg_fetch_array($result);
		$row1 = pg_fetch_array($result1);
		$row2 = pg_fetch_array($result2);

	?>


	<div class="row container center">
		<section class="col-xs bg">
			<form method="post" action="user.php">
				<h3>Nombre</h3>
				<input onclick="this.value=='';"class="form-control" id="nombre" type="text"  name="name">
				<h3>Apellido</h3>
				<input class="form-control" type="text" id="apellido" name="last">
				<h3>Pais</h3>
				<input class="form-control" type="text" id="pais" name="pais">
				<h3>Comentarios</h3>
				<textarea class="form-control" type="text" name="comentario"></textarea>
				<!--<input class="btn btn-success btn-lg" type="submit" id="boton" value="Enviar">-->
				<!--<a href="#Label-nuevo" class="btn" id="boton">Enviar</a>-->
				<input type="submit" class="btn" id="boton" />
			</form>
		</section>
		<section class="col-xs bg row">
			<div class="tabla-nombre col-xs">
				<h3 class="col-xs" id="nombrealumno">Nombre</h3>
				<?php while($row=pg_fetch_array($result)){ ?>
					<h3 id="Label-nuevo"><?php echo $row[0] ?></h3>
				<?php } ?>

			</div>
			<div class="tabla-apellidos col-xs">
				<h3 class="col-xs" id="apellidoalumno">Apellido</h3>
				
				<?php while($row1=pg_fetch_array($result1)){ ?>
					<h3 id="Label-nuevo"><?php echo $row1[0] ?></h3>
				<?php } ?>
			</div>
			<div class="tabla-pais col-xs">
				
				<h3 class="col-xs" id="pais">Pais</h3>
				<?php while($row2=pg_fetch_array($result2)){ ?>
					<h3 id="Label-nuevo"><?php echo $row2[0] ?></h3>
				<?php } ?>
			</div>		
		</section>

	</div>
	<br />
	<hr class="col-xs-10 col-xs-offset-1" />
	<div class=" container center">
		<p>API de Notificaciones</p>
		<p>Andrés Dominguez | 2015</p>
	</container>
		
	<!--<a href="javascript:agregarElemento();" >Agregar elemento</a>-->
</body>
</html>
