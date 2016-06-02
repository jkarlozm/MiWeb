<?php
	require_once'bd/settingConexion.php';
	
	//Cabecera pag.
	include ('librerias/cabecera.php');
?>
	<section class="imagen">		
		<div class="container">
			<!--Cuerpo Noticia-->
			<div class="row masinfo">
				<?php
					$rSQLtrabajoDetalle = mysqli_query($conexion, "SELECT * FROM trabajos WHERE id_trabajos = ".$_POST["idt"]);
					while ($filaTrabajoDetalle = mysqli_fetch_assoc($rSQLtrabajoDetalle)) {					
				?>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h1><?php echo $filaTrabajoDetalle['titulo']; ?></h1>
					<p class="app-separador"></p>
					<figure>
						<img src="img/trabajos/<?php echo $filaTrabajoDetalle['imagen']; ?>" alt="<?php echo $filaTrabajoDetalle['imagen']; ?>" class="img-responsive img-rounded center-block" >
						<div class="btn-group" role="group">
							<a class="btn btn-success" target="_blank" href="<?php echo $filaTrabajoDetalle['url']; ?>"><span class="glyphicon glyphicon-link"></span> Visitar</a>
							<a class="btn btn-primary" href="portafolio.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar</a>
						</div>
					</figure>
					<br>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p class="text-justify"><?php echo $filaTrabajoDetalle['descripcion'] ?></p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php echo $filaTrabajoDetalle ['herramientas']; ?>
						</div>
					</div>
				</div>
				<?php }	?>
			</div>

			<!--Formulario de comentarios-->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" placeholder="Nombre" id="nombre" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
								<input type="text" placeholder="Correo" id="correo" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<textarea placeholder="Haz tu comentario" id="comentario" class="form-control" rows="3"></textarea>
						</div>
						<div class="form-group text-right">
							<input type="hidden" id="idtrabajo" value="<?php echo $_POST['idt']; ?>">
							<button type="button" id="instcomen" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Comentar</button>
						</div>					
					</form>
				</div>
			</div>
			
			<!--Comentarios-->
			<div class="container" id="grupo-comentarios">
			</div>
		</div>
	</section>

<?php
	//Pie de pag.
	include ('librerias/pie.php');
?>