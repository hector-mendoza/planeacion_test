<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <?php include('script.php'); ?>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include("navbarHeader.php"); include("sidebar.php"); ?>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <section class="container">
                        <div class="container-page">
                            <form action="save_pdf.php" method="POST" accept-charset="utf-8">
                                <!--  <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="firstStep">
                                    <h3 class="dark-grey">Selección de Materia:</h3>
                                    <div class="form-group col-lg-12 col-md-8">
                                        <label>Ciclo / Plan: </label>
                                        <input type="text" name="plan" class="form-control" id="plan" required>
                                    </div>
                                </div> -->
                                <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12" id="firstStep">
                                    <h3 class="dark-grey">I. DATOS GENERALES:</h3>
                                    
                                    <div class="form-group col-lg-12 col-md-8">
                                        <label>Nombre Plan Estudios: </label>
                                        <input type="text" name="plan" class="form-control" id="plan" placeholder="Nombre de la Carrera" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Nombre Unidad Aprendizaje: </label>
                                        <input type="text" name="unidad" class="form-control" id="unidad" placeholder="Nombre de la Materia" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" required>
                                        <label>Semestre / Cuatrimestre: </label>
                                        <input type="text" name="grado" id="grado" class="form-control" placeholder="Smestre / Cuatrimestre">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12" required>
                                        <label>Núm. Clases: </label>
                                        <input type="number" name="clases" class="form-control" id="num_clases" placeholder="Número de Clases">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12" required>
                                        <label>Ciclo: </label>
                                        <select name="ciclo" class="form-control">
                                            <option value="1">2017 - 2018</option>
                                            <option value="2">2018 - 2018</option>
                                            <option value="3">2018 - 2019</option>
                                            <option value="4">2019 - 2019</option>
                                            <option value="5">2019 - 2020</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <label>Fecha: </label>
                                        <input type="date" name="fecha" class="form-control" id="fecha" value="<?php echo date("Y-m-d");?>"><br><br>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <input type="radio" id="in-category-20" name="category" value="LISTO"> <b>LISTO</b>
                                        <br><br>
                                        <button type="button" class="btn btn-info btn-lg" id="submit" onclick="$('#firstStep').hide(); $('#secondStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("input[type='text'], input[type='number'], input[type='date']").on("keyup", function(){
                                        if($(this).val() != "" && $("input[type='date']").val() != "" && $("input[name='category']").is(":checked") == true){
                                        $("button[id='submit']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category']").on("change", function(){
                                        if($(this).val() != "" && $("input[type='text']").val() != "" && $("input[name='category']").is(":checked") == true){
                                        $("button[id='submit']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="secondStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">II. PROPÓSITO:</h3>
                                        <textarea class="form-control" name="proposito" placeholder="Escribe el propósito..." rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category2" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#secondStep').hide(); $('#firstStep').show()" >ATRAS</button>
                                        <button type="button" id="submit2" class="btn btn-info btn-lg" onclick="$('#secondStep').hide(); $('#temario').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("textarea").on("keyup", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category2']").is(":checked") == true){
                                        $("button[id='submit2']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category2']").on("change", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category2']").is(":checked") == true){
                                        $("button[id='submit2']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="temario" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">PEGA TU TEMARIO:</h3>
                                        <textarea class="form-control" name="temario" placeholder="PEGA TU TEMARIO AQUÍ" rows="20" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category2_1" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#temario').hide(); $('#firstStep').show()" >ATRAS</button>
                                        <button type="button" id="submit2_1" class="btn btn-info btn-lg" onclick="$('#temario').hide(); $('#thirdStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("textarea").on("keyup", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category2_1']").is(":checked") == true){
                                        $("button[id='submit2_1']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category2_1']").on("change", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category2_1']").is(":checked") == true){
                                        $("button[id='submit2_1']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="thirdStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">III. COMPETENCIAS GENÉRICAS Y ESPECÍFICAS DE LA UNIDAD APRENDIZAJE:</h3>
                                        <textarea class="form-control" name="genericas" placeholder="GENÉRICAS" rows="5" cols="25" ></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="especificas" placeholder="ESPECÍFICAS" rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category3" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#thirdStep').hide(); $('#temario').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" id="submit3" onclick="$('#thirdStep').hide(); $('#fourthStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("textarea").on("keyup", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category3']").is(":checked") == true){
                                        $("button[id='submit3']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category3']").on("change", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category3']").is(":checked") == true){
                                        $("button[id='submit3']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="fourthStep" style="display:none;"">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IV. FECHAS DE EVALUACIONES SUMATIVAS:</h3>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <label>1ER Reporte:</label><input type="date" name="primer_rep" class="form-control" id="1reporte" value="" >
                                        <br>
                                        <label>2DO Reporte:</label><input type="date" name="seg_rep" class="form-control" id="2reporte" value="" >
                                        <br>
                                        <label>3ER Reporte (FINAL):</label><input type="date" name="tercer_rep" class="form-control" id="3reporte" value="" ><br><br>
                                        <input type="radio" id="in-category-20" name="category4" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#fourthStep').hide(); $('#thirdStep').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" id="submit4" onclick="$('#fourthStep').hide(); $('#fifthStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("input[type='date']").on("keyup", function(){
                                        if($(this).val() != "" && $("input[type='date']").val() != "" && $("input[name='category4']").is(":checked") == true){
                                        $("button[id='submit4']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category4']").on("change", function(){
                                        if($(this).val() != "" && $("input[type='date']").val() != "" && $("input[name='category4']").is(":checked") == true){
                                        $("button[id='submit4']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="fifthStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">V. HORAS Y CALENDARIO DE SESIONES:</h3>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Horas Totales de UNIDAD DE APRENDIZAJE:</label><input type="number" placeholder="Horas Totales de UNIDAD DE APRENDIZAJE" name="totalhoras" class="form-control" id="totalhoras" value="" >
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Horas Totales CON DOCENTE:</label>
                                        <input type="number" placeholder="Horas Totales Teóricas" name="docenteteoricas" class="form-control" id="totalhoras" value="" >
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <input type="number" placeholder="Horas Totales Prácticas" name="docentepracticas" class="form-control" id="totalhoras" value="" >
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Horas Totales INDEPENDIENTES:</label>
                                        <input type="number" placeholder="Horas Totales INDEPENDIENTES Teóricas" name="indep_teo" class="form-control" id="indep_teo" value="" >
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <input type="number" placeholder="Horas Totales INDEPENDIENTES Prácticas" name="indep_pract" class="form-control" id="indep_pract" value="" ><br><br>
                                        <input type="radio" id="in-category-20" name="category5" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#fifthStep').hide(); $('#fourthStep').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" id="submit5" onclick="$('#fifthStep').hide(); $('#sixthStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("input[type='number']").on("keyup", function(){
                                        if($(this).val() != "" && $("input[type='number']").val() != "" && $("input[name='category5']").is(":checked") == true){
                                        $("button[id='submit5']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category5']").on("change", function(){
                                        if($(this).val() != "" && $("input[type='number']").val() != "" && $("input[name='category5']").is(":checked") == true){
                                        $("button[id='submit5']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="sixthStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VI. IDENTIFICACIÓN DEL GRUPO:</h3>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <label>Grupo:</label>
                                        <input type="number" placeholder="Grupo" name="grupo" class="form-control" id="grupo">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <label>Salón:</label>
                                        <input type="text" placeholder="Salón" name="salon" class="form-control" id="salon" value="" ><br><br>
                                        <input type="radio" id="in-category-20" name="category6" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <label>No. Alumnos:</label>
                                        <input type="number" placeholder="No. de Alumnos" name="total_alumnos" class="form-control" id="total_alumnos" value="" >
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#sixthStep').hide(); $('#fifthStep').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" id="submit6" onclick="$('#sixthStep').hide(); $('#sevenStep').show()">SEGUIR</button>
                                        <script>
                                        $("input[type='text'], input[type='number']").on("keyup", function(){
                                        if($(this).val() != "" && $("input[type='number']").val() != "" && $("input[name='category6']").is(":checked") == true){
                                        $("button[id='submit6']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category6']").on("change", function(){
                                        if($(this).val() != "" && $("input[type='number']").val() != "" && $("input[name='category6']").is(":checked") == true){
                                        $("button[id='submit6']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="sevenStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" >
                                        <h3 class="dark-grey">VII.UNIDADES DE COMPETENCIA:</h3>
                                        <div style="overflow-y: scroll; height:200px; width: 100%">
                                            <table id="unidades" border="1" class="table table-hover table-responsive">
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Tema</th>
                                                    <th>Aprendizajes esperados</th>
                                                    <th>Estrategias de aprendizaje</th>
                                                    <th>Recursos didacticos</th>
                                                    <th>Evidencias de aprendizaje</th>
                                                    <th>Tipos de evaluacion</th>
                                                    <th>Instrumentos de evaluacion</th>
                                                    <th>Criterios de evaluacion y ponderacion</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="date" name="fechaUnidades"></td>
                                                    <td><textarea id="2" name="temaUnidades"></textarea></td>
                                                    <td><textarea id="3" name="ap_esp"></textarea></td>
                                                    <td><textarea id="4" name="est_ap"></textarea></td>
                                                    <td><textarea id="5" name="recursos"></textarea></td>
                                                    <td><textarea id="6" name="evid_ap"></textarea></td>
                                                    <td><textarea id="7" name="tipo_eval"></textarea></td>
                                                    <td><textarea id="8" name="inst_eval"></textarea></td>
                                                    <td><textarea id="9" name="criterio"></textarea></td>
                                                </tr>
                                            </table><br><br>    
                                            <input type="radio" id="in-category-20" name="category2" value="LISTO"> <b>LISTO</b>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#sevenStep').hide(); $('#sixthStep').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#sevenStep').hide(); $('#eightStep').show()">SEGUIR</button>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="eightStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VIII. REFERENCIAS BÁSICAS:</h3>
                                        <textarea class="form-control" name="basicas" placeholder="Referencias Básicas" rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category8" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#eightStep').hide(); $('#sevenStep').show()" >ATRAS</button>
                                        <button type="button" class="btn btn-info btn-lg" id="submit8" onclick="$('#eightStep').hide(); $('#nineStep').show()" disabled>SEGUIR</button>
                                        <script>
                                        $("textarea").on("keyup", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category8']").is(":checked") == true){
                                        $("button[id='submit8']").removeAttr("disabled");
                                        }
                                        });
                                        $("input[name='category8']").on("change", function(){
                                        if($(this).val() != "" && $("textarea").val() != "" && $("input[name='category8']").is(":checked") == true){
                                        $("button[id='submit8']").removeAttr("disabled");
                                        }
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12" id="nineStep" style="display:none;">
                                    <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IX. REFERENCIAS COMPLEMENTARIAS:</h3>
                                        <textarea class="form-control" name="complem" placeholder="Referencias Complementarias" rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category2" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#nineStep').hide(); $('#eightStep').show()" >ATRAS</button>
                                        <input type="submit" name="submit" class="btn btn-danger btn-lg" value="TERMINAR">
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            
        </body>
    </html>