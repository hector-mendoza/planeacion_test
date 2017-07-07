<?php
	include('conect.php');
	extract($_POST);

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_POST["id_direccion"])){

		$sql = "UPDATE direcciones SET direccion = '$direccion' WHERE id_direccion = '$id_direccion'";

		$sqlDxD = "UPDATE direccionesxdocente SET id_usuario = '$id_usuario' WHERE id_direccion = '$id_direccion'";


		if (mysqli_query($link, $sql) and mysqli_query($link, $sqlDxD)){
			header("Location: direccionesAdmin.php");
		}
		else{
			echo "Error en el update";
		}
	}
	else{
		$sql = "INSERT INTO direcciones VALUES('','$direccion')";
		mysqli_query($link, $sql);
		$lastId = mysqli_insert_id($link);
		$sqlDxD = "INSERT INTO direccionesxdocente VALUES('', '$lastId', '$id_usuario')";


		if (mysqli_query($link, $sqlDxD)){
			header("Location: direccionesAdmin.php");
		}
		else{
			echo "Error en el insert";
		}
	}
?>
