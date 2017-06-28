<?php
include('conect.php');
extract($_POST);

    $tot_mat = mysqli_query($link, "SELECT * FROM materiasxcarrera mxc
                                    WHERE mxc.id_carrera = $id_carrera AND mxc.semestre = $semestre;");
    if ($tot_mat) {
        while ($id_mat = mysqli_fetch_row($tot_mat)) {
            echo "<option value='$id_mat[0]'>$id_mat[1]</option>";
        }
    }
?>