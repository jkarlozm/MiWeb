<?php
	/*
		Fecha creacion: 15 Abril 2016
		Autor: Juan Carlos Zárate Moguel
		Descripción: Contiene los menus que se mostran en cada una de las vistas y perfiles
	*/

	//Conexion base de datos
	require_once("../bd/settingConexion.php");
	
	switch ($_POST["type"]) {
		case 1:
			//Menú para el index
			$rSQLmenu1 = mysqli_query($conexion, "SELECT titulo, enlace FROM menu WHERE perfil = 1 AND estado = 1");
			if(mysqli_num_rows($rSQLmenu1) > 0 ){ ?>
				<div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> Karloz Web</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                    	<?php
                			while($filaMenu1 = mysqli_fetch_assoc($rSQLmenu1)) {
                		?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo $filaMenu1['enlace']; ?>"><?php echo $filaMenu1['titulo']; ?></a></li>
                        </ul>
                        <?php
                    		}
                    	?>
                    </div>
                </div>
			<?php }
			break;
        case 2:
            //Menú inferior
            $rSQLmenuInferior = mysqli_query($conexion, "SELECT titulo, enlace FROM menu WHERE perfil = 1 AND estado = 1");
            if(mysqli_num_rows($rSQLmenuInferior) > 0 ){
                while($filaMenuInferior = mysqli_fetch_assoc($rSQLmenuInferior)) { ?>
                    <a href="<?php echo $filaMenuInferior["enlace"] ?>"><?php echo $filaMenuInferior["titulo"] ?></a> |
                <?php }
            }
            break;
        case 3:
            //Menú secciones Portafilio, Aboutme y Comunícate
            $rSQLmenuDos = mysqli_query($conexion, "SELECT titulo, enlace FROM menu WHERE perfil = 1 AND estado = 1");
            if(mysqli_num_rows($rSQLmenuDos) > 0 ){ ?>
                <div class="container">         
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> Karloz Web</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <?php while($filaMenuDos = mysqli_fetch_assoc($rSQLmenuDos)) { ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo $filaMenuDos['enlace']; ?>"><?php echo $filaMenuDos['titulo']; ?></a></li>
                            </ul>
                        <?php  } ?>
                    </div>            
                </div>
            <?php }
            break;
        case 4:
            //Muestra todas las opciones del menú
            $rSQLopcionesMenu = mysqli_query($conexion, "SELECT * FROM menu");
            if(mysqli_num_rows($rSQLopcionesMenu) > 0){
                $contador = 1;
                while ($filaOpcionesMenu = mysqli_fetch_assoc($rSQLopcionesMenu)) { ?>
                    <tr>
                        <td class="text-center text-capitalize">
                            <?php echo $contador ?>
                        </td>
                        <td class="text-center text-capitalize">
                            <?php echo $filaOpcionesMenu["titulo"] ?>
                        </td>
                        <td class="text-center text-capitalize">
                            <?php echo $filaOpcionesMenu["enlace"] ?>
                        </td>
                        <td class="text-center text-capitalize">
                            <span class="glyphicon <?php if($filaOpcionesMenu["perfil"] == 1){ ?> glyphicon-globe <?php } else{ ?> glyphicon-user <?php } ?>"></span>
                        </td>
                        <td class="text-center text-capitalize">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-primary" onclick="mostrarDatosOpcion(this.id)" id="<?php echo $filaOpcionesMenu["id_menu"] ?>" title="Modificar"><span class="fa fa-pencil-square-o"></span></button>
                                <button type="button" class="btn btn-warning" onclick="eliminarOpcionMenu(this.id)" id="<?php echo $filaOpcionesMenu["id_menu"] ?>" title="Eliminar"><span class="fa fa-trash"></span></button>
                                <button type="button" class="btn btn-info" onclick="activarOpcionMenu(this.id)" id="<?php echo $filaOpcionesMenu["id_menu"] ?>" title="Activar/Desactivar"><span class="fa <?php if ($filaOpcionesMenu["estado"] == 1) { ?> fa-eye <?php } else { ?> fa-eye-slash <?php }
                                 ?>"></span></button>
                            </div>
                        </td>
                    </tr>
                <?php $contador++;
                }
            }else{ ?>
                <tr>
                    <td class="text-center text-capitalize" colspan="5">no hay opciones para el menú</td>
                </tr>
            <?php }

            break;
        case 5:
            //Insertar opcion de menú
            if (mysqli_query($conexion, "INSERT INTO menu VALUES(null, '".$_POST["titulo"]."', '".$_POST["enlace"]."', '".$_POST["privilegio"]."', '1')")) {
                echo "1";
            } else {
                echo "2";
            }            
            break;
        case 6:
            //Eliminar opción menú
            if (mysqli_query($conexion, "DELETE FROM menu WHERE id_menu = ".$_POST["idMenuEliminar"])) {
                echo "1";
            } else {                
                echo "2";
            }
            
            break;
        case 7:
            //Cambiar estado de la opción

            $rSQLestadoOpcion = mysqli_query($conexion, "SELECT estado FROM menu WHERE id_menu = ".$_POST["idOpcionMenu"]);
            while ($filaEstadoOpcion = mysqli_fetch_assoc($rSQLestadoOpcion)) {
                $estado = $filaEstadoOpcion["estado"];
            }

            switch ($estado) {
                case 1:
                    if (mysqli_query($conexion, "UPDATE menu SET estado = 2 WHERE id_menu = ".$_POST["idOpcionMenu"])) {
                        echo "1";
                    } else {
                        echo "3";
                    }                    
                    break;                
                case 2:
                    if (mysqli_query($conexion, "UPDATE menu SET estado = 1 WHERE id_menu = ".$_POST["idOpcionMenu"])) {
                        echo "2";
                    } else {
                        echo "3";
                    }                    
                    break;
            }
            

            break;
        case 8:
            //Mostrar datos de opción para modificación
            $rSQLdatosOpcion = mysqli_query($conexion, "SELECT * FROM menu WHERE id_menu = ".$_POST["idOpcionDatos"]);
            while ($filaDatoOpcion = mysqli_fetch_assoc($rSQLdatosOpcion)) {
                $titulo = $filaDatoOpcion["titulo"];
                $enlace = $filaDatoOpcion["enlace"];
                $privilegio = $filaDatoOpcion["perfil"];
            }
            $datosMostrar = array('titulo' => $titulo, 'enlace' => $enlace, 'privilegio' => $privilegio);
            echo json_encode($datosMostrar);
            break;
        case 9:
            //Actualizar datos de opción de menú
            if (mysqli_query($conexion, "UPDATE menu SET titulo = '".$_POST["titulo"]."', enlace = '".$_POST["enlace"]."', perfil = '".$_POST["privilegio"]."' WHERE id_menu = ".$_POST["id"])) {
                echo "1";
            } else {
                echo "2";
            }
            
            break;
        case 10:
            //Menú Para Administrador
            $rSQLmenuTres = mysqli_query($conexion, "SELECT titulo, enlace FROM menu WHERE perfil = 2 AND estado = 1");
            if(mysqli_num_rows($rSQLmenuTres) > 0 ){ ?>
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> Karloz Web</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                while($filaMenuTres = mysqli_fetch_assoc($rSQLmenuTres)) {
                            ?>                            
                                <li><a href="<?php echo $filaMenuTres['enlace']; ?>"><?php echo $filaMenuTres['titulo']; ?></a></li>                            
                            <?php
                                }
                            ?>
                            <li role="presentation" class="dropdown">
                                <figure data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="../img/JuanKarloz.jpg" alt="User" class="img-responsive img-circle">
                                </figure>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);" onclick="cerrarSesion()" id="closesesion">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php }            
            break;
    }
?>