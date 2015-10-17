<?php 
	$id = $_REQUEST["id"];

	$nombre = $_REQUEST["nombre"];

	$equipo = $_REQUEST["equipo"];

	$enlace = mysqli_connect("localhost", "root", "", "gaby");

	if (mysqli_connect_errno()) 
	{
	    printf("Falló la conexión: %s\n", mysqli_connect_error());
	    exit();
	}
	else
	{
		$insertar = "INSERT INTO jugador values('$id','$nombre','$equipo')";

		$resultado = mysqli_query($enlace, $insertar);
		echo $resultado;

		/* cerrar la conexión */
		mysqli_close($enlace);
	}
 ?>