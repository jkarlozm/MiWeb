<?php
	/*
		Fecha creacion: 15 Abril 2016
		Autor: Juan Carlos Zárate Moguel
		Descripción: Muestra y registra los registros que corresponden a los trabajos realizados.
	*/

	//Conexion base de datos
	require_once("../bd/settingConexion.php");

	switch ($_POST["type"]) {
		case 1:
			//Muestra solo los ultimos 6 trabajos realizados.
			$rSQL6trabajos = mysqli_query($conexion, "SELECT titulo, imagen, url FROM trabajos ORDER BY id_trabajos DESC LIMIT 6");
			if(mysqli_num_rows($rSQL6trabajos) > 0){ ?>
				<h2 class="text-center text-capitalize">trabajos</h2>
				<?php
                	while($fila6Trabajos = mysqli_fetch_assoc($rSQL6trabajos)) { ?>
	                    <div class="panel panel-default trabajo">
	                    	<div class="panel-heading" style="background: url('img/trabajos/<?php echo $fila6Trabajos['imagen']; ?>'); background-size: cover;">
	                    	</div>
	                    	<div class="panel-body">
	                            <h2 class="text-center text-capitalize"><?php echo $fila6Trabajos['titulo']; ?></h2>
	                    	</div>	                        
	                    </div>
                	<?php }
			}
			break;
		case 2:
			//Paginado de trabajos en la sección de Portafolio
			$paginaActual = $_POST["partida"];
			$nroTrabajos = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM trabajos"));			
			$nroLotes = 6;
			$nroPaginas = ceil($nroTrabajos/$nroLotes);			
			$lista = '';
			$trabajo = '';

			if($paginaActual > 1){
				$lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
			}
			for($i=1; $i<=$nroPaginas; $i++){
				if ($i == $paginaActual) {
					$lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
				}
				else{
					$lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
				}
			}
			if ($paginaActual < $nroPaginas) {
				$lista = $lista.'<li><a href="javascript:pagination('.($paginaActual + 1).')">Siguiente</a></li>';
			}

			if ($paginaActual <= 1) {
				$limit = 0;
			}
			else{
				$limit = $nroLotes*($paginaActual-1);
			}

			$rSQLregistroTrabajos = mysqli_query($conexion, "SELECT * FROM trabajos LIMIT $limit, $nroLotes");
			
			while ($filaRegistrosTrabajos = mysqli_fetch_assoc($rSQLregistroTrabajos)) {
				$totalComentarios = mysqli_num_rows(mysqli_query($conexion, "SELECT id_trabajos FROM comentarios WHERE id_trabajos = ".$filaRegistrosTrabajos["id_trabajos"]));
				$trabajo = $trabajo.'<div class="panel panel-default trabajo">
					<div class="panel-heading" style="background: url(img/trabajos/'.$filaRegistrosTrabajos["imagen"].'); background-size: cover;"></div>
					<div class="panel-body">
						<figure class="center-block">
							<img src="img/JuanKarloz.jpg" alt="" class="img-responsive">
						</figure>
						<h3 class="panel-title text-center text-capitalize">
							<strong>'.$filaRegistrosTrabajos["titulo"].'</strong>
						</h3>
						<p class="text-center">
							<span class="glyphicon glyphicon-user"></span> 
							<small>by '.$filaRegistrosTrabajos["autor"].'</small>
						</p>
						<div class="row">
							<div class="col-md-6 col-xs-6 text-center">
								<span class="glyphicon glyphicon-calendar"></span> <small>'.$filaRegistrosTrabajos["fecha"].'</small>
							</div>
							<div class="col-md-6 col-xs-6 text-center">
								<span class="glyphicon glyphicon-comment"></span> <small>'.$totalComentarios.'</small>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<form action="trabajos.php" method="post">
									<input type="hidden" name="idt" value="'.$filaRegistrosTrabajos["id_trabajos"].'">
									<button type="submit" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-plus"> Info</span></button>
								</form>
							</div>
						</div>
					</div>					
				</div>';
			}

			$datos = array("trabajo" => $trabajo, "paginado" => $lista);
			echo json_encode($datos);
			break;
		case 3:
			//Muestra trabajos en la seccion de administración con paginado
			$paginaActual = $_POST["partidaAdmin"];
			$nroTrabajos = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM trabajos"));			
			$nroLotes = 6;
			$nroPaginas = ceil($nroTrabajos/$nroLotes);			
			$lista = '';
			$trabajo = '';

			if($paginaActual > 1){
				$lista = $lista.'<li><a href="javascript:paginationAdmin('.($paginaActual-1).');">Anterior</a></li>';
			}
			for($i=1; $i<=$nroPaginas; $i++){
				if ($i == $paginaActual) {
					$lista = $lista.'<li class="active"><a href="javascript:paginationAdmin('.$i.');">'.$i.'</a></li>';
				}
				else{
					$lista = $lista.'<li><a href="javascript:paginationAdmin('.$i.');">'.$i.'</a></li>';
				}
			}
			if ($paginaActual < $nroPaginas) {
				$lista = $lista.'<li><a href="javascript:paginationAdmin('.($paginaActual + 1).')">Siguiente</a></li>';
			}

			if ($paginaActual <= 1) {
				$limit = 0;
			}
			else{
				$limit = $nroLotes*($paginaActual-1);
			}

			$rSQLregistroTrabajosAdmin = mysqli_query($conexion, "SELECT * FROM trabajos LIMIT $limit, $nroLotes");
			
			while ($filaRegistrosTrabajosAdmin = mysqli_fetch_assoc($rSQLregistroTrabajosAdmin)) {
				$totalComentariosAdmin = mysqli_num_rows(mysqli_query($conexion, "SELECT id_trabajos FROM comentarios WHERE id_trabajos = ".$filaRegistrosTrabajosAdmin["id_trabajos"]));
				$trabajo = $trabajo.'<article class="trabajosCRUD">
                        <h2 class="text-center">'.$filaRegistrosTrabajosAdmin["titulo"].'</h2>
                        <figure>
                            <img src="../img/trabajos/'.$filaRegistrosTrabajosAdmin["imagen"].'" class="img-responsive img-rounded" alt="">
                        </figure>
                        <hr>
                        <div class="container-fluid">
	                        <div class="row text-center">
	                        	<div class="col-md-4 col-xs-4"><span class="glyphicon glyphicon-user"></span> <small>'.$filaRegistrosTrabajosAdmin["autor"].'</small></div>
	                        	<div class="col-md-4 col-xs-4"><span class="glyphicon glyphicon-calendar"></span> <small>'.$filaRegistrosTrabajosAdmin["fecha"].'</small></div>
	                        	<div class="col-md-4 col-xs-4"><span class="glyphicon glyphicon-comment"></span> <small>'.$totalComentariosAdmin.'</small></div>
	                        </div>
                        </div>
                        <hr>
                        <p class="text-justify">'.$filaRegistrosTrabajosAdmin["descripcion"].'</p>
                        <div class="text-right">
                            <button type="button" class="btn btn-info editart" id="'.$filaRegistrosTrabajosAdmin["id_trabajos"].'" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
                            <button type="button" class="btn btn-warning" onclick="eliminarTrabajo(this.id)" id="'.$filaRegistrosTrabajosAdmin["id_trabajos"].'" ><span class="glyphicon glyphicon-trash"></span> Eliminar</button>
                        </div>
                    </article>';
			}

			$datos = array("trabajoAdmin" => $trabajo, "paginadoAdmin" => $lista);
			echo json_encode($datos);
			break;
		case 4:
			//Eiminar foto de trabajo del servidor
			$rSQLfotoTrabajo = mysqli_query($conexion, "SELECT imagen FROM trabajos WHERE id_trabajos = ".$_POST["idt"]);
			while ($filafotoTrabajo = mysqli_fetch_assoc($rSQLfotoTrabajo)) {
				//Ruta imagen a eliminar
				$foto = "../img/trabajos/".$filafotoTrabajo["imagen"];
			}
			//Eliminar trabajos de la base de datos
			if(mysqli_query($conexion, "DELETE FROM trabajos WHERE id_trabajos = ".$_POST["idt"])){
				//Se elimino el registro y el archivo				
				if(unlink($foto)){
					echo "1";
				}
				else{
					echo "3";
				}
			}
			else{
				//No se pudo eliminar el registor
				echo "2";
			}
			break;
	}

?>