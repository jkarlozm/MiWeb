<?php
	require_once("../bd/settingConexion.php");

	switch ($_POST["type"]) {
		case 1:
			//Insertar comentario realizado en trabajo y enviar mensaje a correo electrónico.
			$trabajo = get_campo($conexion, "titulo", "trabajos", "id_trabajos", $_POST["idt"]);			
			$destinatario = 'jkarloz2903@gmail.com';
			$asunto = 'Comentrario en la publicación: '.$trabajo;
			$contenido = '<!DOCTYPE html>
							<html lang="en">
								<head>
									<meta charset="UTF-8">
									<title>' . $asunto . '</title>
									<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
								</head>
								<body>
									<h1>
										Han realizado un comentario en la publicación:'.$trabajo.'
									</h1>
									<hr>
									<p class="text-center">
										El visitante <strong>' . $_POST['n'] . '</strong> hizo el siguiente comentario
									</p>
									<br>
									<p>
										Comentario: ' . $_POST['com'].'
									</p>
								</body>
							</html>';
			
			$encabezado = 'MIME-Version: 1.0'."\r\n";
			$encabezado .= 'Content-type: text/html; charset=UTF-8'."\r\n";			
			$encabezado .= 'From: karlozweb.esy.es <no-reply@karlozweb.esy.es>'."\r\n";

			$correoEnviado = mail($destinatario, $asunto, $contenido, $encabezado);
			if(mysqli_query($conexion, "INSERT INTO comentarios VALUES ('', '".$_POST["n"]."', '".$_POST["c"]."', '".$_POST["com"]."', '".$_POST["idt"]."')") && $correoEnviado ) {
				echo 1;
			}
			else{
				echo 2;
				
			}
			break;
		case 2:
			//Mostrar comentario en el trabajo que fue realizado
			$rSQLcomentarioTrabajo = mysqli_query($conexion, "SELECT * FROM comentarios WHERE id_trabajos = ".$_POST["idt"]);
			if(mysqli_num_rows($rSQLcomentarioTrabajo) > 0){ ?>
				<div class="list-group">
				<?php
					while($filaComentarioTrabajo = mysqli_fetch_assoc($rSQLcomentarioTrabajo)){
				?>
				<div class="list-group-item">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="col-xs-3 col-sm-3 col-md-3">
								<figure>
									<img src="img/user.png" alt="User" class="img-responsive">
								</figure>
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<p><strong><?php echo $filaComentarioTrabajo['nombre'] ?></strong> comento: </p>
								<p class="text-justify"><?php echo $filaComentarioTrabajo['comentario']; ?></p>
								
                                    <?php
                                    	$rSQLmostrarRespuestaComentario = mysqli_query($conexion, "SELECT * FROM respuestacomentario WHERE id_comentario = ".$filaComentarioTrabajo['id_comentario']." ORDER BY id_rc DESC");
                                    	if(mysqli_num_rows($rSQLmostrarRespuestaComentario) > 0){ ?>
                                    		<button onclick="mustraRespComentario()" class="btn btn-success">Ver Respuestas</button>
                                    		<div class="row comres" id="respuestaComentario" style="display: none;"> <?php
                                            while ($filaRespuestaComentario = mysqli_fetch_assoc($rSQLmostrarRespuestaComentario)) {
                                                if ($filaRespuestaComentario['id_comentario'] == $filaComentarioTrabajo['id_comentario']) {
                                                    ?>
                                                    <hr>
                                                    <ul class="media-list">
                                                        <li class="media">
                                                            <div class="pull-left">
                                                                <img src="img/JuanKarloz.jpg" alt="Usuario" class="media-objet" data-toggle="tooltip" data-placement="bottom" title="Juan Karloz">
                                                            </div>
                                                            <div class="media-body">
                                                                <p><strong>Juan Karloz</strong> respondio: </p>
                                                                <p class="text-justify"><?php echo $filaRespuestaComentario['respcom'] ?></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <?php
                                                }                                
                                            } ?>
                                            </div> <?php
                                        }
                                    ?>                                
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>				
			<?php }
			break;
		case 3:
			//Muestra comentatios en el administrador
			$rSQLcomentariosManager = mysqli_query($conexion, "SELECT * FROM comentarios");
			if(mysqli_num_rows($rSQLcomentariosManager) > 0){
				while($filaComentariosManager = mysqli_fetch_assoc($rSQLcomentariosManager)){ ?>
					<div class="list-group-item comentario">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="col-xs-4 col-sm-3 col-md-3">
                                    <figure>
                                        <img src="../img/user.png" alt="User" class="img-responsive" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $filaComentariosManager['nombre'] ?>">
                                    </figure>
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-9">
                                    <div class="row text-right">
                                    	<!--Botón responder comentario-->
                                        <button class="btn btn-info" name="modalrc" onclick="pasarId(this.id)" id="<?php echo $filaComentariosManager['id_comentario']; ?>" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-comment"></span> Responder</button>
                                    </div>
                                    <p>Comentario número: <?php echo $filaComentariosManager['id_comentario']; ?><br>                                    
                                    En el artículo: <strong><?php echo get_campo($conexion, "titulo", "trabajos", "id_trabajos", $filaComentariosManager['id_trabajos']) ?></strong></p>
                                    <p class="text-justify"> Comento: <br> <?php echo $filaComentariosManager['comentario']; ?></p>                                    
                                    <div class="row respuesta">
                                        <?php
                                        	//Mostrar respuesta comentario
                                        	$rSQLrespuestaComentario = mysqli_query($conexion, "SELECT * FROM respuestacomentario");
                                        	if(mysqli_num_rows($rSQLrespuestaComentario) > 0){
	                                            while ($filaRespuestaComentario = mysqli_fetch_assoc($rSQLrespuestaComentario)) {
	                                                if ($filaRespuestaComentario['id_comentario'] == $filaComentariosManager['id_comentario']) {
	                                                    ?>
	                                                    <hr>
	                                                    <ul class="media-list media1">
	                                                        <li class="media">
	                                                            <div class="pull-left">
	                                                                <img src="../img/JuanKarloz.jpg" alt="Usuario" class="media-objet" data-toggle="tooltip" data-placement="bottom" title="Juan Karloz">
	                                                            </div>
	                                                            <div class="media-body">
	                                                                <p>Publicado hace 20 minutos</p>
	                                                                <p class="text-justify"><?php echo $filaRespuestaComentario['respcom'] ?></p>
	                                                            </div>
	                                                        </li>
	                                                    </ul>
	                                                    <?php
	                                                }                                
	                                            }
                                        	}
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
				<?php }
			}
			else{ ?>
				<p class="text-center">No hay comentarios</p>
			<?php }
			break;
		case 4:
			//Registrar respuesta a comentario
			if(mysqli_query($conexion, "INSERT INTO respuestacomentario VALUES (NULL, '".$_POST["txtrc"]."', '".$_POST["id_c"]."')")){
				echo "1";
			}
			else{
				echo "2";
			}
			break;
	}
?>