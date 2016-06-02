<?php
	date_default_timezone_set('America/Mexico_City');
	$conexion = mysqli_connect('127.0.0.1', 'root', '', 'karlozw') or die (mysqli_error($conexion)) ;
	//mysqli_autocommit($conexion,false);
	mysqli_set_charset($conexion, "utf8");

	//Función para obtener un campo
	function get_campo($conn,$c,$t,$cb,$i)
	{
		$q=mysqli_query($conn, "select $c from $t where $cb=$i");
		if(mysqli_num_rows($q)==0)
			return "";
		else
		{
			$f=mysqli_fetch_assoc($q);
			return $f[$c];
		}
	}