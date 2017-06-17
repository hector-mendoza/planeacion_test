<?php
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <?php
            if($_SESSION['admin']){
                ?>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal Admin</a>
                <?php  
            }
            else{
                ?>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal</a>
                <?php 
            }
            ?>
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
        <?php
        if($_SESSION['admin']){
            ?>
            <li>
                <a href="usuariosAdmin.php"><i class="glyphicon glyphicon-user"></i> Usuarios<i></i></a>
            </li>
            <li>
                <a href="direccionesAdmin.php"><i class="glyphicon glyphicon-folder-close"></i> Direcciones<i></i></a>
            </li>
            <?php
        }
        ?>
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