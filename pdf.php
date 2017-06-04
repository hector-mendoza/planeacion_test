<?php
session_start();
ob_start();
require_once('conect.php');
extract($_GET);
$sql = mysqli_query($link, "SELECT * FROM materias WHERE id_materia = '$id' ");
$data_mat = mysqli_fetch_object($sql);

$sql_user = mysqli_query($link, "SELECT * FROM usuarios WHERE  id_usuario = '$_SESSION[id_usuario]' ");
$data_user = mysqli_fetch_object($sql_user);

$sql_tel = mysqli_query($link, "SELECT telefono FROM telefonos WHERE id_usuario = '$_SESSION[id_usuario]' ");
$data_tel = mysqli_fetch_object($sql_tel);

$sql_unid = mysqli_query($link, "SELECT * FROM unidadescompetencia WHERE id_materia = '$id' ");
$data_unid = mysqli_fetch_object($sql_unid);
?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
        <br><br><br><br><br>
        <h1 style="text-align: center;">UVAQ</h1>
        <br><br><br><br><br>
        <h1 style="text-align: center;">Planeación Didáctica</h1>
        <br><br>
        <h3 style="text-align: center;">Semestre Agosto 2016 - Enero 2017</h3>
</page>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
  <table align="center" border="0">
    <tr>
      <td align="center"></td>
    </tr>
  </table><br>
  <table align ="center" width="500">
    <tr>
      <td align="center"><b><h3>MISION DE LA UVAQ:</h3></b></td>
    </tr>
    <tr>
      <td align="left"><p>Formar personas integralmente inspiradas
        en el humanismo católico de Don Vasco de Quiroga
        para que sean agentes de cambio comprometidos con
        el bien común de la sociedad
      </p></td>
    </tr>
  </table>
  <br>
  <table align ="center" width="500">
    <tr>
      <td align="center"><b><h3>VISION DE LA UVAQ:</h3></b></td>
    </tr>
    <tr>
      <td align="justify"><p>La Universidad Vasco de Quiroga es promotora de la educación,
        el estudio, la investigación y difusión cultural, al mismo tiempo que se compromete
        ir a la sociedad, inspirados en el humanismo católico de Don Vasco de Quiroga.
        Tiene una estructura sólida, prestigiada y reconocida en la sociedad de la región
        centro occidente del país. Es una institución, empeñada en “el esfuerzo común por construir
        la civilización del amor, fundada en los valores universales de la paz, de la solidaridad,
        de la justicia y de la libertad” que coadyuva en la transición y vertebración social,
        forma con ideas firmes y principios básicos acerca del Hombre, la sociedad,
        la Cultura y la Universidad, en donde se descubren y perfeccionan las capacidades individuales,
        sustentados en Valores Universales asumidos por la institución.
      </p></td>
    </tr>
  </table>
  <table align ="center" width="600">
    <tr>
      <td align="center"><b><h3>PRINCIPIOS EDUCATIVOS DEL MODELO EDUCATIVO:</h3></b></td>
    </tr>
    <tr>
      <td align="center">
        <p>Verdad, Realidad, Educación, Docente y Educado</p>
      </td>
    </tr>
  </table>
  </page>

  <!-- Aqui empieza la unidad I. DATOS GENERALES-->
  <page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <table align ="center">
      <tr>
        <td align="center">
          <h4>I  DATOS GENERALES:</h4>
        </td>
      </tr>
    </table>
    <table align ="center" border="1">
      <tr>
        <td align="center"><b>Nombre del Plan Estudios</b></td>
        <td width="250"><?php echo $data_mat->nombrePlan; ?></td>
      </tr>
      <tr>
        <td align="center" width="200"><b>Nombre de la Unidad de Aprendizaje</b></td>
        <td width="250"><?php echo $data_mat->nombreUnidad; ?></td>
      </tr>
      <tr>
        <td align="center" width="200"><b>Generales del Docente:</b></td>
        <td width="250">
          <table border="1">
            <tr>
              <td>Nombre:</td><td width="150"><?php echo $data_user->nombre . " " . $data_user->apellido; ?></td>
            </tr>
            <tr>
              <td>Email:</td><td><?php echo $data_user->correo; ?></td>
            </tr>
            <tr>
              <td>Teléfono Contacto:</td><td><?php echo $data_tel->telefono; ?></td>
            </tr>
            <tr>
              <td>Grado Académico:</td><td><?php echo $data_user->grado_academ; ?></td>
            </tr>
            <tr>
              <td>Formación:</td><td><?php echo $data_user->formacion; ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center" width="250"><b>Semestre/Cuatrimestre:</b></td>
        <td><?php echo $data_mat->semestre . "°"; ?></td>
      </tr>
      <tr>
        <td align="center" width="250"><b>Fecha:</b></td>
        <td width="250"><?php echo $data_mat->fecha; ?></td>
      </tr>
    </table>
    <br><br><br><br><br><br><br><br>
    <table align ="center">
      <tr>
        <td align="center"><h4>II.PROPÓSITO:</h4></td>
      </tr>
    </table>
    <table align ="center" border="1">
      <tr>
          <td align="center" width="600"><?php echo $data_mat->proposito; ?></td>
        </tr>
      </table>
      <br><br>
      <table align ="center">
        <tr>
          <td align="center"><h4>III.COMPETENCIAS GENÉRICAS Y ESPECÍFICAS:</h4></td>
        </tr>
      </table>
      <table align ="center" border="1">
        <tr>
          <td align="left" width="600"><label>Competencias Genéricas:</label><?php echo $data_mat->competenciasGen; ?><br><br><label>Competencias Específicas:</label><?php echo $data_mat->competenciasEsp; ?></td>
        </tr>
      </table>
  </page>
  <page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <table align ="center">
      <tr>
        <td align="center"><h4>IV.FECHAS DE EVALUACIÓNES SUMATIVAS:</h4></td>
      </tr>
      </table>
      <table align ="center" border="1">
        <tr>
          <td align="center" width="250">1er Reporte</td><td align="center" width="300"><?php echo $data_mat->primeraEvaluacion; ?></td>
        </tr>
        <tr>
          <td align="center" width="250">2do Reporte</td><td align="center" width="300"><?php echo $data_mat->segundaEvaluacion; ?></td>
        </tr>
        <tr>
          <td align="center" width="250">3er Reporte</td><td align="center" width="300"><?php echo $data_mat->terceraEvaluacion; ?></td>
        </tr>
      </table>

      <table align ="center">
        <tr>
          <td align="center"><h4>V.HORAS Y CALENDARIO DE SESIONES:</h4></td></tr>

      </table>
      <table align="center" border="1">
        <tr>
          <td width="200">Horas Totales de Unidad de Aprendizaje</td><td width="200"></td><td width="200"><?php echo $data_mat->horasUnidad; ?></td>
        </tr>
        <tr>
          <td width="200">Horas Totales Con Docente</td><td colspan="2">

            <table border="1">
              <tr>
                <td width="200">Teóricas: <?php echo $data_mat->horasTeoDoc; ?></td><td width="200">Prácticas: <?php echo $data_mat->horasPracDoc; ?></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    <br><br>
    <table align ="center">
      <tr>
        <td align="center"><h4>VI.IDENTIFICACIÓN DEL GRUPO:</h4></td>
      </tr>
    </table>
    <table align="center" border="1">
      <tr>
        <td width="200">Gupo</td><td width="200">No. Alumnos</td><td width="200">Salón</td>
      </tr>
      <tr>
        <td><?php echo $data_mat->grupo; ?></td><td><?php echo $data_mat->numAlumnos; ?></td><td><?php echo $data_mat->salon; ?></td>
      </tr>
    </table>
  </page>

  <page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <table align ="center">
      <tr>
        <td align="center"><h4>VII.UNIDAD DE COMPETENCIA:</h4></td>
      </tr>
    </table>
    <table align="center" border="1">
      <tr>
        <td width="220">FECHA</td><td width="380"><?php echo $data_unid->fecha; ?></td>
      </tr>
      <tr>
        <td width="220">APRENDIZAJES ESPERADOS</td><td><?php echo $data_unid->aprenEsp; ?></td>
      </tr>
      <tr>
        <td width="220">ESTRATEGIAS DE APRENDIZAJE</td><td><?php echo $data_unid->estApren; ?></td>
      </tr>
      <tr>
        <td width="220">RECURSOS DIDÁCTICOS Y OBJETIVOS DE APRENDIZAJE</td><td><?php echo $data_unid->recursos; ?></td>
      </tr>
      <tr>
        <td width="220">EVIDENCIAS DE APRENDIZAJE</td><td><?php echo $data_unid->evidencias; ?></td>
      </tr>
      <tr>
        <td width="220">TIPOS DE EVALUACIÓN</td><td></td>
      </tr>
      <tr>
        <td width="220">INSTRUMETOS DE EVALUACIÓN</td><td><?php echo $data_unid->instrumentosEvaluacion; ?></td>
      </tr>
      <tr>
        <td width="220">CRITERIOS DE EVALUACIÓN Y PONDERACIÓN</td><td><?php echo $data_unid->ponderacion; ?></td>
      </tr>
    </table>
  </page>
  <!-- Aqui empieza la unidad VIII.REFERENCIAS BÁSICAS-->

  <page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <table align ="center">
      <tr>
        <td align="center"><h4>VIII.REFERENCIAS BÁSICAS:</h4></td>
      </tr>
    </table>
    <table align ="center" border="1">
      <tr>
        <td align="center" width="600"><br><br><br><br></td>
      </tr>
    </table>
    <br><br>
    <!-- Aqui termina la unidad VIII.REFERENCIAS BÁSICAS-->
    <!-- Aqui empieza la unidad IX.REFERENCIAS COMPLEMENTARIAS-->
    <table align ="center">
      <tr>
        <td align="center"><h4>IX.REFERENCIAS COMPLEMENTARIAS:</h4></td>
      </tr>
    </table>
    <table align ="center" border="1">
      <tr>
        <td align="center" width="600"><br><br><br><br></td>
      </tr>
    </table>
<!-- Aqui termina la unidad IX.REFERENCIAS COMPLEMENTARIAS-->
  </page>
<?php
$content = ob_get_clean();
require_once(dirname(__FILE__).'/vendor/autoload.php');
try
{
  $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
  $html2pdf->pdf->SetDisplayMode('fullpage');
  $html2pdf->pdf->SetTitle("Planeación Académica");
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output('Planeacion.pdf');
}
catch(HTML2PDF_exception $e) {
  echo $e;
  exit;
}
?>
