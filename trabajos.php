<?php
	// conexion
	require_once'bd/settingConexion.php';
	$comentariosTotal = mysqli_num_rows(mysqli_query($conexion, "SELECT id_trabajos FROM comentarios WHERE id_trabajos = ".$_POST["idt"]));
	$rSQLtrabajoDetalle = mysqli_query($conexion, "SELECT * FROM trabajos WHERE id_trabajos = ".$_POST["idt"]);
	while ($filaTrabajoDetalle = mysqli_fetch_assoc($rSQLtrabajoDetalle)) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<title>KarlozWeb | <?php echo $filaTrabajoDetalle['titulo']  ?></title>
		
		<!-- Hojas de estilo -->
		<?php include_Once 'include/hojaestilo.php'; ?>
	</head>
	<body>
		<!--[if lt IE 8]>
	        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->
		
		<!-- Menú -->
		<?php include_Once 'include/encabezado.php'; ?>

		<!-- Botón ir arriba -->
		<?php include_once 'include/botonarriba.php';?>

	    <!-- Contenido -->
	    <section class="imagen">
			<div class="container">
				<!--Cuerpo Noticia-->
				<div class="row masinfo">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center text-capitalize"><?php echo $filaTrabajoDetalle['titulo']; ?></h1>
						<p class="app-separador"></p>
						<figure>
							<img src="img/trabajos/<?php echo $filaTrabajoDetalle['imagen']; ?>" alt="<?php echo $filaTrabajoDetalle['imagen']; ?>" class="img-responsive img-rounded center-block" >
						</figure>
						</br>
						<div class="row form-group">
							<div class="col-md-4 col-xs-12 col-sm-4">
								<button type="button" id="irComentario" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-comment fa-lg"></i> Comentar ( <?php echo $comentariosTotal ?> )</button>
							</div>
							<div class="col-md-4 col-xs-12 col-sm-4">
								<a href="<?php echo $filaTrabajoDetalle['url'] ?>" class="share-fb btn btn-info btn-lg btn-block" target="_blank"><i class="glyphicon glyphicon-link fa-lg"></i> Visitar</a>
							</div>
							<div class="col-md-4 col-xs-12 col-sm-4">
								<a href="<?php echo $filaTrabajoDetalle['github'] ?> " target="_blank" class="btn btn-success btn-lg btn-block"><i class="fa fa-github fa-lg"></i> GitHub</a>
							</div>
						</div>						
					</div>

					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-1">
								<p class="text-justify"><?php echo $filaTrabajoDetalle['descripcion'] ?></p>
							</div>							
						</div>						
					</div>
					<?php }	?>
				</div>

				<hr>
				<div class="row">
					<div class="col-md-6 col-md-offset-1">
						<blockquote class="blockquote-reverse">
							<p>ICT Engineer | Web Developer | Geek | Fan of Open Source. <br>Working with heart !!</p>
							<footer>Juan Carlos Zárate Moguel</footer>
						</blockquote>
					</div>
					<div class="col-md-4">
						<figure class="sobreAutor center-block">
							<img src="img/JuanKarloz.jpg" alt="karloz" class="img-responsive img-circle">
						</figure>
					</div>
				</div>
				<hr>

				<!--Sección de comentarios-->			
				<div class="row">
					<div class="well well-sm">
						<h3><i class="fa fa-comments-o fa-lg"></i> <strong class="text-uppercase">Deja un comentario</strong></h3>
					</div>
				</div>

				<!-- Formulario de comentarios -->
				<div class="row form-group" id="hacerComentario">
					<div class="col-md-6 col-md-offset-3">
						<form>
							<div class="form-group form-group-lg">
								<input type="text" placeholder="Nombre" id="nombre" class="form-control">							
							</div>
							<div class="form-group form-group-lg">
								<input type="text" placeholder="Correo" id="correo" class="form-control">
							</div>
							<div class="form-group form-group-lg">
								<textarea placeholder="Haz tu comentario" id="comentario" class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<input type="hidden" id="idtrabajo" value="<?php echo $_POST['idt']; ?>">
								<button type="button" id="instcomen" class="btn btn-primary btn-lg col-xs-12 col-md-6 col-md-offset-3"> Comentar <span class="glyphicon glyphicon-pencil"></span></button>
							</div>
						</form>
					</div>
				</div>

				<!--Comentarios-->
				<div class="container" id="grupo-comentarios">
				</div>
			</div>
		</section>
		
		<!-- Pie de Página -->
		<?php include_Once 'include/pie.php'; ?>

		<!-- Scripts JS -->
		<?php include_Once 'include/javascript.php'; ?>
	</body>
</html>