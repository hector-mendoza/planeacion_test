<?php
session_start();
require_once('conect.php');
if (!isset($_SESSION['id_usuario'])) {
	header("Location: login.php");
}
extract($_POST);
extract($_GET);
$total_clases = $_GET['c'];

$sql_carr = mysqli_query($link, "SELECT * FROM carreras WHERE id_carrera = $carrera ");
$sql_uni = mysqli_query($link, "SELECT id_unidades FROM unidadescompetencia");
$carr = mysqli_fetch_array($sql_carr);

$sql = "UPDATE materias SET nombrePlan = '$carr[carrera]', nombreUnidad = '$unidad', semestre = '$semestre', fecha = '$fecha',
		proposito = '$proposito', competenciasGen = '$genericas', competenciasEsp = '$especificas',
		primeraEvaluacion = '$primer_rep', segundaEvaluacion = '$seg_rep', terceraEvaluacion = '$tercer_rep',
		horasUnidad = '$totalhoras', horasTeoDoc = '$docenteteoricas', horasPracDoc = '$docentepracticas', horasTeoInd = '$indep_teo',
		horasPracInd = '$indep_pract', numAlumnos = '$total_alumnos', salon = '$salon', grupo = '$grupo', id_carrera = '$carr[id_carrera]', ciclo = '$ciclo' WHERE id_materia = $id ";

mysqli_query($link, $sql);

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

	// actualiza tabla 7 => Falta instruccion 'AND' para diferenciar renglones
	mysqli_query($link, "UPDATE unidadescompetencia SET fecha = '$fechaUnidades', tema = '$temaUnidades', aprenEsp = '$ap_esp', estApren = '$ini$est$cierre',
		recursos = '$material', evidencias = '$evid_ap', id_tipoEvaluacion = '$tipo_eval', instrumentosEvaluacion = '$inst_eval',
				ponderacion = '$criterio' WHERE id_materia = $id AND  id_unidades = ");
}

//referencias
	foreach ($_POST['ref_bas'] as $refbas) {
		mysqli_query($link, "UPDATE referenciasxmateria SET id_referencia = '$refbas' WHERE id_materia = $id ");
		$ref_bas .= $refbas.",";
	}

	if ($_POST['ref_com']) {
		mysqli_query($link, "UPDATE referenciasxmateria SET id_referencia = '$_POST[ref_com]' WHERE id_materia = $id ");
		echo "<br><br>Referencias complem: " . $ref_com;
	}else{
		echo "no";
	}


 //header("Location: materias.php");
/*mysql_query("INSERT INTO permisos VALUES('','$_SESSION[id_usuario]','$id_materia','ALL')",$link) or die('<h2>Error al enviar datos</h2><br><br><a href="nuevaMateria.php"><h1>Regresar</h1></a>');*/

 ?>
