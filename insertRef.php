<?php 
include('conect.php');
if (!empty($_POST)) {
	extract($_POST);
	$sql = mysqli_query($link, "INSERT INTO referencias VALUES ('','$isbn', '$autor', '$fecha', '$titulo', '$editorial')");
	header("Location: referencias.php");
}else{
	echo "no";
}
 ?>
