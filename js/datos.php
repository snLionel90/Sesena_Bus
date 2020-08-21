<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("comentarios",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$comentario = $_POST['comuser'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($comentario)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$apellidos','$comentario')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		envio exitoso
	'
?>
