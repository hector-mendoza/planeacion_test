<?php
include('conect.php');
$id_carrera = $_POST['id_carrera'];

    $tot_sem = mysqli_query($link, "SELECT mxc.semestre FROM materiasxcarrera mxc
									INNER JOIN carreras c
									ON c.id_carrera = mxc.id_carrera
									WHERE c.id_carrera = $id_carrera
									GROUP BY mxc.semestre;");
    if ($tot_sem) {
        while ($id_sem = mysqli_fetch_row($tot_sem)) {
            echo "<option value='$id_sem[0]'>$id_sem[0]</option>";
        }
    }
?>