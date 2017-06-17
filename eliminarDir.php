<?php
	include('conect.php');

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_GET["id_dir"])){
		$id_direccion = $_GET["id_dir"];

		$sql = "DELETE FROM direcciones WHERE id_direccion = '$id_direccion'";
		$sqlDxD = "DELETE FROM direccionesxdocente WHERE id_direccion = '$id_direccion'";


		if (mysqli_query($link, $sql) and mysqli_query($link, $sqlDxD)){
			header("Location: direccionesAdmin.php");
		}
		else{
			header("Location: direccionesAdmin.php");
		}
	}
	else{
		header("Location: direccionesAdmin.php");
	}
?>
