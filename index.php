<?php 

	$con = mysql_connect($host,'root','asdas') or die('no se pudo conectar con el host'); 
	//conexion al servidor
	mysql_select_db($db,$con) or die("problemas al conectar db");

 ?>