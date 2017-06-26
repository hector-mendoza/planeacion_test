<?php 
session_start();
require_once('conect.php');
if (!isset($_SESSION['id_usuario'])) {
	header("Location: login.php");
}
extract($_POST);
$total_clases = $_GET['c'];

$sql_carr = mysqli_query($link, "SELECT * FROM carreras WHERE id_carrera = $carrera ");
$carr = mysqli_fetch_array($sql_carr);

$sql = "UPDATE INTO materias VALUES('','$carr[carrera]','$unidad','$semestre', '$fecha', '$proposito', '$genericas', '$especificas',
	'$primer_rep', '$seg_rep', '$tercer_rep', '$totalhoras', '$docenteteoricas', '$docentepracticas', '$indep_teo',
	'$indep_pract', '$total_alumnos', '$salon', '$grupo', '$carr[id_carrera]', '$ciclo', '$_SESSION[id_usuario]')";

if (mysqli_query($link, $sql)) {
	$lastId = mysqli_insert_id($link);
}

for ($i=0; $i < $total_clases; $i++) { 
	
	$fechaUnidades = $_POST['fechaUnidades'.$i];
	$temaUnidades = $_POST['temaUnidades'.$i];
	$ap_esp = $_POST['ap_esp'.$i];
	$evid_ap = $_POST['evid_ap'.$i];

	foreach ($_POST['inicio'.$i] as $inicio) {
		$ini .= $inicio.",";
	}
	foreach ($_POST['est_ap'.$i] as $est_ap) {
		$est .= $est_ap.",";
	}
	foreach ($_POST['cierre'.$i] as $cie) {
		$cierre .= $cie.",";
	}
	foreach ($_POST['material'.$i] as $mat) {
		$material .= $mat.",";
	}
	if ($_POST['otros'].$i) {
		echo $_POST['otros'.$i];
	}
	/*foreach ($_POST['inst_eval'.$i] as $inst) {	
		$inst_evalu .= $inst.",";
	}
	foreach ($_POST['tipo_eval'.$i] as $tipo) {	
		$tipo_evalu .= $tipo.",";
	}*/

	$tipo_eval = $_POST['tipo_eval'.$i];
	$inst_eval = $_POST['inst_eval'.$i];
	$criterio = $_POST['criterio'.$i];

	mysqli_query($link, "UPDATE INTO unidadescompetencia VALUES ('', '$lastId', '$fechaUnidades', '$temaUnidades', '$ap_esp', '$ini$est$cierre', '$material', '$evid_ap', '$tipo_eval', '$inst_eval', '$criterio')");
}

//referencias
	foreach ($_POST['ref_bas'] as $refbas) {
		mysqli_query($link, "UPDATE INTO referenciasxmateria VALUES('', '$lastId', '$refbas', 'BASICA') ");
		$ref_bas .= $refbas.",";
	}

	if ($_POST['ref_com']) {
		mysqli_query($link, "UPDATE INTO referenciasxmateria VALUES('', '$lastId', '$_POST[ref_com]', 'COMPLEMENTARIA') ");
		echo "<br><br>Referencias complem: " . $ref_com;
	}else{
		echo "no";
	}


header("Location: materias.php");
/*mysql_query("INSERT INTO permisos VALUES('','$_SESSION[id_usuario]','$id_materia','ALL')",$link) or die('<h2>Error al enviar datos</h2><br><br><a href="nuevaMateria.php"><h1>Regresar</h1></a>');*/

 ?>