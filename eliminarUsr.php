<?php
	include('conect.php');

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_GET["id_usuario"])){
		$id_usuario = $_GET["id_usuario"];

		$sql = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";


		if (mysqli_query($link, $sql)){
			header("Location: usuariosAdmin.php");
		}
		else{
			header("Location: usuariosAdmin.php");
		}
	}
	else{
		header("Location: usuariosAdmin.php");
	}
?>
