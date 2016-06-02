<?php
	require_once("../bd/settingConexion.php");

	//Herramientas
	
	$herramientas = '<div class="media">
		<div class="pull-left">
			<span class="glyphicon glyphicon-cog app-glyphicon1"></span>
		</div>
		<div class="media-body container">
			<h4 class="media-heading">Herramientas</h4>
			<div class="row">';				
				$rSQLidIconoHerramienta = mysqli_query($conexion, "SELECT idHerramienta FROM herramientasWeb");
				while ($filaIdIconoHerramienta = mysqli_fetch_assoc($rSQLidIconoHerramienta)) {
					$id = $filaIdIconoHerramienta["idHerramienta"];
					if(empty($_GET["check-".$id])){
						$_GET["check-".$id] = 0;
					}
					if($filaIdIconoHerramienta["idHerramienta"] == $_GET["check-".$id]) {
						$rSQLiconosHerramientas = mysqli_query($conexion, "SELECT * FROM herramientasWeb WHERE idHerramienta = ".$_GET["check-".$id] );
						while ($filaIconoHerramienta = mysqli_fetch_assoc($rSQLiconosHerramientas)) {
							$herramientas.= '<div class="col-xs-4 col-sm-4 col-md-4">
								<div class="app-contenedor">
									<p class="'.$filaIconoHerramienta["iconoHerramienta"].' glyphicon2"></p>
									<h4>'.$filaIconoHerramienta["nombre"].'</h4> 
								</div>
							</div>';
						}
					}					
				}
			$herramientas.= '</div>
		</div>
	</div>';

	//Comprobar si ha ocurrido un error
	if ($_FILES["image"]["error"] > 0) {
		//Hay errorres al subir el archivo
		echo "1";
	}
	else{
		$permitidos = array("image/jpg", "image/jpeg", "image/png");
		if (in_array($_FILES["image"]["type"], $permitidos)) {
			//NombreFoto
			$extencion = explode("/", $_FILES["image"]["type"]);			
			$foto = date("Ymd").$_GET["title"].".".$extencion[1];
			$ruta = "../img/trabajos/".$foto;
			if(move_uploaded_file($_FILES["image"]["tmp_name"], $ruta)){
				if(mysqli_query($conexion, "INSERT INTO trabajos VALUES(null, '".$_GET["title"]."', '$foto', '".$_GET["description"]."', '$herramientas', '".$_GET["url"]."', '".date("Y-m-d")."', 'Juan Carlos')")){
					echo "4";
				}
				else{
					//Error al registar los datos
					echo "5";
				}

			}
			else{
				//No se pudo subir el archivo
				echo "3";
			}
			
		}
		else{
			//El archivo es diferente a una imagen o no coincide con la extención de la imagen
			echo "2";
		}
	}
?>