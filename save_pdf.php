<?php 
session_start();
require_once('conect.php');
if (!isset($_SESSION['id_usuario'])) {
	header("Location: login.php");
}
extract($_POST);

$sql = "INSERT INTO materias VALUES('','$plan','$unidad','$grado', '$fecha', '$proposito', '$genericas', '$especificas',
	'$primer_rep', '$seg_rep', '$tercer_rep', '$totalhoras', '$docenteteoricas', '$docentepracticas', '$indep_teo',
	'$indep_pract', '$total_alumnos', '$salon', '$grupo', 1, '$ciclo')";

$lastId = mysqli_insert_id($link);

$sql_unicomp = "INSERT INTO unidadescompetencia VALUES ('', '$lastId', '$fechaUnidades', '$temaUnidades', '$ap_esp', '$est_ap', '$recursos', '$evid_ap', 2, 2, '$criterio')";

if (mysqli_query($link, $sql)) {
	$lastId = mysqli_insert_id($link);
	mysqli_query($link, $sql_unicomp);
}

header("Location: materias.php");




/*mysql_query("INSERT INTO permisos VALUES('','$_SESSION[id_usuario]','$id_materia','ALL')",$link) or die('<h2>Error al enviar datos</h2><br><br><a href="nuevaMateria.php"><h1>Regresar</h1></a>');*/

 ?>