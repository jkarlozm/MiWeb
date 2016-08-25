<?php
	require_once("../bd/settingConexion.php");

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
			$foto = date("Ymd").str_replace(' ', '', $_GET["title"]).".".$extencion[1];
			$ruta = "../img/trabajos/".$foto;
			if(move_uploaded_file($_FILES["image"]["tmp_name"], $ruta)){
				if(mysqli_query($conexion, "INSERT INTO trabajos VALUES(null, '".$_GET["title"]."', '$foto', '".$_GET["description"]."', '".$_GET["githubUrl"]."', '".$_GET["url"]."', '".date("Y-m-d")."', 'Juan Carlos')")){
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