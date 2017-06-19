<?php
	include('conect.php');

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_GET["id_carrera"])){
		$id_carrera = $_GET["id_carrera"];

		$sql = "DELETE FROM carreras WHERE id_carrera = '$id_carrera'";


		if (mysqli_query($link, $sql)){
			header("Location: carreras.php");
		}
		else{
			header("Location: carreras.php");
		}
	}
	else{
		header("Location: carreras.php");
	}
?>
