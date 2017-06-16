<?php
include('conect.php');
 if(isset($_POST["id_materia"]))
 {
    $opciones = '<option value="0"> Elige un modelo</option>';
    $strConsulta = mysqli_query($link, "select * from materias");
    while( $fila = mysqli_fetch_array($strConsulta) )
    {
       $opciones.='<option value="'.$fila["id_materia"].'">'.$fila["materia"].'</option>';
    }
     echo $opciones;
 }else{
 	?><script> console.log("nop"); </script><?php
 }
?>