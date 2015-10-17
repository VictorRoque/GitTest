<?php
	$enlace = mysqli_connect("localhost", "root", "", "gaby");

	/* comprobar la conexión */
	if (mysqli_connect_errno()) {
	    printf("Falló la conexión: %s\n", mysqli_connect_error());
	    exit();
	}

	$consulta = "SELECT * FROM jugador";

	if ($resultado = mysqli_query($enlace, $consulta)) {

	    /* obtener el array asociativo */
	    while ($row = mysqli_fetch_object($resultado)) {
	        $datos[] = $row;
	    }
	    echo json_encode($datos) ;
	    /* liberar el conjunto de resultados */
	    /*mysqli_free_result($resultado);*/
	}

	/* cerrar la conexión */
	mysqli_close($enlace);
?>