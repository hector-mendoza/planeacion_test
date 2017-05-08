<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Planeación UVAQ</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Usuario</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Leer mensajes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Ver todas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Buzón</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Opciones</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Principal</a>
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
                                    <a href="#">Materia 1</a>
                                </li>
                                <li>
                                    <a href="#">Materia 2</a>
                                </li>
                                <li>
                                    <a href="nuevaMateria.php"> <i class="glyphicon glyphicon-plus"></i> Agregar materia</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li>
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>-->
                        <li>
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Cambio interfaz</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <section class="container">
                        <div class="container-page">
                            <form action="nuevaMateria_submit.php" method="POST" accept-charset="utf-8">
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <h3 class="dark-grey">I. DATOS GENERALES:</h3>
                                    
                                    <div class="form-group col-lg-12 col-md-8">
                                        <label>Nombre Plan Estudios: </label>
                                        <input type="text" name="plan" class="form-control" id="plan" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Nombre Unidad Aprendizaje: </label>
                                        <input type="text" name="" class="form-control" id="unidad" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Semestre / Cuatrimestre: </label>
                                        <input type="password" name="" class="form-control" name="" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Fecha: </label>
                                        <input type="date" name="fecha" class="form-control" id="fecha" value="" required>
                                    </div>
                                    <br>
                                    
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">II. PROPÓSITO:</h3>
                                        <textarea class="form-control" name="proposito" placeholder="Escribe el propósito..." rows="5" cols="25" required></textarea>
                                    </div>
                                    <br>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">III. COMPETENCIAS GENÉRICAS Y ESPECÍFICAS DE LA UNIDAD APRENDIZAJE:</h3>
                                        <textarea class="form-control" name="proposito" placeholder="GENÉRICAS" rows="5" cols="25" required></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="proposito" placeholder="ESPECÍFICAS" rows="5" cols="25" required></textarea>
                                    </div>
                                    

                                   <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IV. FECHAS DE EVALUACIONES SUMATIVAS:</h3>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>1ER Reporte:</label><input type="date" name="1reporte" class="form-control" id="1reporte" value="" required>
                                    <label>2ER Reporte:</label><input type="date" name="2reporte" class="form-control" id="2reporte" value="" required>
                                    <label>3ER Reporte(FINAL):</label><input type="date" name="3reporte" class="form-control" id="3reporte" value="" required>
                                    </div>


                                   <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">V. HORAS Y CALENDARIO DE SESIONES:</h3>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Horas Totales de UNIDAD DE APRENDIZAJE:</label><input type="number" placeholder="Horas Totales de UNIDAD DE APRENDIZAJE" name="totalhoras" class="form-control" id="totalhoras" value="" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Horas Totales CON DOCENTE:</label>
                                    <input type="number" placeholder="Horas Totales Teóricas" name="docenteteoricas" class="form-control" id="totalhoras" value="" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <input type="number" placeholder="Horas Totales Prácticas" name="docentepracticas" class="form-control" id="totalhoras" value="" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Horas Totales INDEPENDIENTES:</label>
                                    <input type="number" placeholder="Horas Totales INDEPENDIENTES Teóricas" name="independientesteoricas" class="form-control" id="independientesteoricas" value="" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <input type="number" placeholder="Horas Totales INDEPENDIENTES Prácticas" name="independientespracticas" class="form-control" id="independientespracticas" value="" required>
                                    </div>



                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VI. IDENTIFICACIÓN DEL GRUPO:</h3>
                                    </div>



                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Grupo:</label>
                                    <input type="number" placeholder="No. de Alumnos" name="totalalumnos" class="form-control" id="totalalumnos" value="" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Salón" name="salon" class="form-control" id="salon" value="" required>
                                    </div>
                                    
                                    <!-- /**************************************************************************************************/
                                   /**********************************VII. UNIDADES DE COMPETENCIA************************************/
                                   /**************************************************************************************************/ -->
                                   <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VII.UNIDADES DE COMPETENCIA:</h3>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Dia de la semana:</label><input type="text" placeholder="dia de la semana" name="diasemana" class="form-control" id="diasemana" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Fecha:</label><input type="text" placeholder="dia-mes-año" name="fecha" class="form-control" id="fecha" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Horario:</label><input type="text" placeholder="hora inicio-hora final" name="horario" class="form-control" id="horario" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Aprendizajes Esperados:</label><input type="text" placeholder="breve descripción" name="aprendizajes" class="form-control" id="aprendizajes" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Estrategias de Aprendizaje:</label><input type="text" placeholder="breve descripción" name="estrategias" class="form-control" id="estrategias" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Recursos Didácticos y Objetivos de Aprendizaje:</label><input type="text" placeholder="primero Recursos y posterioremtne objetivos" name="RD_y_OA" class="form-control" id="RD_y_OA" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Evidencias de Aprendizaje:</label><input type="text" placeholder="separadas por comas (,)" name="evidencias_aprend" class="form-control" id="evidencias_aprend" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Tipos de Evaluación:</label><input type="text" placeholder="separadas por comas (,)" name="tipo_eval" class="form-control" id="tipo_eval" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Instrumentos de Evaluación:</label><input type="text" placeholder="separadas por comas (,)" name="inst_eval" class="form-control" id="inst_eval" value="" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                    <label>Criterios de Evaluación y Ponderación:</label><input type="text" placeholder="separadas por comas (,)" name="criterios" class="form-control" id="criterios" value="" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" >
                                    <!-- /**************************************************************************************************/
                                    /**********************************VII. UNIDADES DE COMPETENCIA************************************/
                                    /**************************************************************************************************/ -->


                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VIII. REFERENCIAS BÁSICAS:</h3>
                                        <textarea class="form-control" name="basicas" placeholder="Referencias Básicas" rows="5" cols="25" required></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IX. REFERENCIAS COMPLEMENTARIAS:</h3>
                                        <textarea class="form-control" name="Complementarias" placeholder="Referencias Complementarias" rows="5" cols="25" required></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" >
                                        <input type="submit" class="btn btn-info" name="submit" value="GUARDAR">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <?php include('script.php'); ?>
    </body>
</html>
