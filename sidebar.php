<?php

mysql_connect("localhost", "root", "", "planeacion");
mysql_select_db("planeacion") or die(mysql_error()) ;
$tipo = "SELECT admin FROM usuarios WHERE id_usuario = $_SESSION[id_usuario]";
$tipo2 = "SELECT director FROM usuarios WHERE id_usuario = $_SESSION[id_usuario]";

$res= @mysql_query($tipo) or die(mysql_error());
$data = mysql_fetch_assoc($res);

$res2= @mysql_query($tipo2) or die(mysql_error());
$data2 = mysql_fetch_assoc($res2);


             
                if ($data["admin"] === "1" and $data2["director"] === "0" ) {
?>


<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">

                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal Admin</a>
            
                
        </li>
        <!-- <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li> -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Materias<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="referencias.php"> <i class="glyphicon glyphicon-book"></i> Referencias</a>
                </li>
                <!-- <li>
                    <a href="num_clases.php"> <i class="glyphicon glyphicon-plus"></i> Agregar materia</a>
                </li> -->
                <!-- <li>
                    <a href="materias.php"> <i class="glyphicon glyphicon-eye-open"></i> Ver materias</a>
                </li> -->
            </ul>
        </li>
       
            <li>
                <a href="usuariosAdmin.php"><i class="glyphicon glyphicon-user"></i> Usuarios<i></i></a>
            </li>
            <li>
                <a href="direccionesAdmin.php"><i class="glyphicon glyphicon-folder-close"></i> Direcciones<i></i></a>
            </li>

             <li>
                <a href="carreras.php"><i class="glyphicon glyphicon-folder-close"></i> Carreras<i></i></a>
            </li>
           
            <li>
                    <a href="docentes.php"> <i class="glyphicon glyphicon-eye-open"></i> Ver docentes(area)</a>
                </li>
        <!--<li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>-->
        <!--         <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Cambio interfaz</a>
        </li> -->
        <li>
            <a href="creditos.php"><i class="glyphicon glyphicon-thumbs-up"></i> Créditos</a>
        </li>
    </ul>
</div>

<?php
                }  else  if ($data["admin"] === "0" && $data2["director"] === "1" ) {
?>

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">

                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal </a>
            
                
        </li>
        <!-- <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li> -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Materias<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="referencias.php"> <i class="glyphicon glyphicon-book"></i> Referencias</a>
                </li>
                <li>
                    <a href="num_clases.php"> <i class="glyphicon glyphicon-plus"></i> Agregar materia</a>
                </li>
                <li>
                    <a href="materias.php"> <i class="glyphicon glyphicon-eye-open"></i> Ver materias</a>
                </li>
            </ul>
        </li>

 <li>
                    <a href="docentes.php"> <i class="glyphicon glyphicon-eye-open"></i> Ver docentes(area)</a>
                </li>
        
        
        <!--<li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>-->
        <!--         <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Cambio interfaz</a>
        </li> -->
        <li>
            <a href="creditos.php"><i class="glyphicon glyphicon-thumbs-up"></i> Créditos</a>
        </li>
    </ul>
</div>


<?php
                } else  if ($data["admin"] === "0" && $data2["director"] === "0" ) {

?>

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">

                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal </a>
            
                
        </li>
        <!-- <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li> -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Materias<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="referencias.php"> <i class="glyphicon glyphicon-book"></i> Referencias</a>
                </li>
                <li>
                    <a href="num_clases.php"> <i class="glyphicon glyphicon-plus"></i> Agregar materia</a>
                </li>
                <li>
                    <a href="materias.php"> <i class="glyphicon glyphicon-eye-open"></i> Ver materias</a>
                </li>
            </ul>
        </li>
        
        <!--<li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>-->
        <!--         <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Cambio interfaz</a>
        </li> -->
        <li>
            <a href="creditos.php"><i class="glyphicon glyphicon-thumbs-up"></i> Créditos</a>
        </li>
    </ul>
</div>

<?php
                } 

        

                               
            ?>
