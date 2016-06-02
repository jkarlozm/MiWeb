<?php
	require_once '../bd/settingConexion.php';
	
	switch ($_POST["type"]) {
		case 1:
			session_start();
			$rSQLcredencialUsuario = mysqli_query($conexion, "SELECT user, pass FROM sesion WHERE user = '".$_POST["u"]."' AND pass = md5('".$_POST["p"]."')");
			if (mysqli_num_rows($rSQLcredencialUsuario) > 0) {
				while($filaCredenciales = mysqli_fetch_assoc($rSQLcredencialUsuario)){
					if($filaCredenciales['user'] == $_POST["u"]){
						echo "1";
						$_SESSION["usuario"] = $filaCredenciales["user"];
					}
				}				
			} else {
				echo "2";
			}			
						
			break;
		case 2:
			session_start();			
			$_SESSION = array();
			
			if (ini_get("session.use_cookies")) {
			    $params = session_get_cookie_params();
			    setcookie(session_name(), '', time() - 42000,
			        $params["path"], $params["domain"],
			        $params["secure"], $params["httponly"]
			    );
			}
			
			session_destroy();			
			break;
	}
?>