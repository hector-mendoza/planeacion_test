<?php
	include('conect.php');
	extract($_POST);

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_POST["id_carrera"])){

		$sql = "UPDATE carreras SET carrera = '$carrera', id_direccion = '$id_direccion' WHERE id_carrera = '$id_carrera'";

		if (mysqli_query($link, $sql)){
			header("Location: carreras.php");
		}
		else{
			echo "Error en el update";
		}
	}
	else{
		$sql = "INSERT INTO carreras VALUES('','$carrera','$id_direccion')";


		if (mysqli_query($link, $sql)){
			header("Location: carreras.php");
		}
		else{
			echo "Error en el insert";
		}
	}
?>
