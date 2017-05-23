<?php 
session_start();
require_once("conect.php");
extract($_POST);
$req = (strlen($user)*strlen($pass) or die("Completa los campos"));

$sql = "SELECT id_usuario FROM usuarios WHERE email = '$user' AND 
	password = '$pass' ";
$review = mysqli_query($link, $sql);

if (mysqli_num_rows($review) > 0) {
	$data = mysqli_fetch_array($review);
	$user_data = $data['id_usuario'];
	$_SESSION['id_usuario'] = $user_data;

	$id_usuario = mysql_result($review, 0);
	header("Location: index.php");
}else{
?>
	<script>
		alert("Completa los campos correctamente");
		location.href = "login.php";
	</script>
<?php 
}

 ?>