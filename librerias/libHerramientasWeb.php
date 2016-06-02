<?php
	require_once("../bd/settingConexion.php");

	switch ($_POST["type"]) {
		case 1:
			if(mysqli_query($conexion, "INSERT INTO herramientasWeb VALUES ('', '".$_POST["nombre"]."', '".$_POST["icono"]."')")) {
				echo 1;
			}
			else{
				echo 2;
			}
			break;
		case 2:
			$rSQLmuestraHerramientas = mysqli_query($conexion, "SELECT * FROM herramientasWeb");
			if (mysqli_num_rows($rSQLmuestraHerramientas) > 0) {
				$contar = 1;
				while ($filaHerramientasWeb = mysqli_fetch_array($rSQLmuestraHerramientas)) { ?>
					<tr>
						<td class="text-center text-capitalize"><?php echo $contar ?></td>
						<td class="text-center text-capitalize"><?php echo $filaHerramientasWeb["nombre"] ?></td>
						<td class="text-center text-capitalize"><span class="<?php echo $filaHerramientasWeb["iconoHerramienta"] ?>"></span></td>
						<td class="text-center text-capitalize">
							<div class="btn-group" role="group" aria-label="...">
						  		<button type="button" class="btn btn-info" onclick="modificarHerramienta(this.id)" id="<?php echo $filaHerramientasWeb["idHerramienta"] ?>"><span class="fa fa-pencil-square-o"></span></button>
						  		<button type="button" class="btn btn-warning" onclick="eliminarHerramienta(this.id)" id="<?php echo $filaHerramientasWeb["idHerramienta"] ?>"><span class="fa fa-trash"></span></button>
							</div>
						</td>
					</tr>
				<?php 
					$contar++;
				}
				
			} else { ?>
				<tr>
					<td class="text-center text-capitalize" colspan="4">No hay herramientas web aún</td>
				</tr>
			<?php }
			
			break;
		case 3:
			//Eliminar Herramienta
			if (mysqli_query($conexion, "DELETE FROM herramientasWeb WHERE idHerramienta = ".$_POST["idHerramientaEliminar"])) {
				echo "1";
			} else {
				echo "2";
			}			
			break;
		case 4:
			//Mostrar datos formulario
			$rSQLdatosHerramienta = mysqli_query($conexion, "SELECT * FROM herramientasWeb WHERE idHerramienta = ".$_POST["idHerramientaM"]);
			while ($filaDatosHerramienta = mysqli_fetch_array($rSQLdatosHerramienta)) {
				$idHerramienta = $filaDatosHerramienta["idHerramienta"];
				$nombreHerramienta = $filaDatosHerramienta["nombre"];
				$iconoHerramienta = $filaDatosHerramienta["iconoHerramienta"];
			}
			$datos = array('idh' => $idHerramienta ,'nombreh' => $nombreHerramienta, 'iconoh' => $iconoHerramienta);
			echo json_encode($datos);
			break;
		case 5:
			if(mysqli_query($conexion, "UPDATE herramientasWeb SET nombre = '".$_POST["nombre"]."', iconoHerramienta = '".$_POST["icono"]."' WHERE idHerramienta = ".$_POST["id"])){
				echo "1";
			}
			else{
				echo "2";
			}
			break;
	}
?>