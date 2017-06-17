<?php
	include('conect.php');
	extract($_POST);

	// if (!isset($_SESSION['id_usuario'])) {
	// 	header("Location: login.php");
	// }

	if(isset($_POST["id_usuario"])){

		$sql = "UPDATE usuarios SET usuario = '$usuario', nombre = '$nombre', apellido = '$apellido', pass = '$pass', correo = '$correo', grado_academ = '$grado_academ', formacion = '$formacion', admin = '$admin', director = '$director' WHERE id_usuario = '$id_usuario'";


		if (mysqli_query($link, $sql)){
			header("Location: usuariosAdmin.php");
		}
	}
	else{
		$sql = "INSERT INTO usuarios VALUES('','$usuario','$nombre','$apellido', '$pass', '$correo', '$grado_academ', '$formacion',
		'$admin', '$director')";


		if (mysqli_query($link, $sql)){
			header("Location: usuariosAdmin.php");
		}
	}
?>
