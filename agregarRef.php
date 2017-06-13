<?php
	include('conect.php');
	$isbn = $_POST['isbn'];
	$autor = $_POST['autor'];
	$fecha = $_POST['fecha'];
	$titulo = $_POST['titulo'];
	$editorial = $_POST['editorial'];

	$sql = "INSERT INTO referencias (isbn, autor, fecha, titulo, editorial)
	VALUES ('$isbn', '$autor', '$fecha', '$titulo', '$editorial')";

	if ($link->query($sql) === TRUE) {
    echo "Guardado correctamente";
	} else {
	    echo "Error al guardar";
	}

?>