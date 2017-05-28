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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="firstStep">
                                    <h3 class="dark-grey">I. DATOS GENERALES:</h3>
                                    
                                    <div class="form-group col-lg-12 col-md-8">
                                        <label>Nombre Plan Estudios: </label>
                                        <input type="text" name="plan" class="form-control" id="plan" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Nombre Unidad Aprendizaje: </label>
                                        <input type="text" name="" class="form-control" id="unidad" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" required>
                                        <label>Semestre / Cuatrimestre: </label>
                                        <input type="text" name="grado" class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Fecha: </label>
                                        <input type="date" name="fecha" class="" id="fecha" required><br><br>
                                        <input type="radio" id="in-category-20" name="category" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" id="submit" onclick="$('#firstStep').hide(); $('#secondStep').show()" disabled>SEGUIR</button>
                                        <script>
                                            $("input[type='text'], input[type='date']").on("keyup", function(){
                                                if($(this).val() != "" && $("input[type='date']").val() != "" && $("input[name='category']").is(":checked") == true){
                                                    $("button[id='submit']").removeAttr("disabled");
                                                }
                                            });
                                            $("input[name='category']").on("change", function(){
                                                if($(this).val() != "" && $("input[type='date']").val() != "" && $("input[name='category']").is(":checked") == true){
                                                    $("button[id='submit']").removeAttr("disabled");
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="secondStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">II. PROPÓSITO:</h3>
                                        <textarea class="form-control" name="proposito" placeholder="Escribe el propósito..." rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category2" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#secondStep').hide(); $('#firstStep').show()" >ATRAS</button>
                                        <button type="button" id="submit2" class="btn btn-info btn-lg" onclick="$('#secondStep').hide(); $('#thirdStep').show()" disabled>SEGUIR</button>
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
                                
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="thirdStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">III. COMPETENCIAS GENÉRICAS Y ESPECÍFICAS DE LA UNIDAD APRENDIZAJE:</h3>
                                        <textarea class="form-control" name="genericas" placeholder="GENÉRICAS" rows="5" cols="25" ></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="especificas" placeholder="ESPECÍFICAS" rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category3" value="LISTO"> <b>LISTO</b>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                        <button type="button" class="btn btn-info btn-lg" onclick="$('#thirdStep').hide(); $('#secondStep').show()" >ATRAS</button>
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="fourthStep" style="display:none;"">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IV. FECHAS DE EVALUACIONES SUMATIVAS:</h3>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>1ER Reporte:</label><input type="date" name="primer_rep" class="form-control" id="1reporte" value="" >
                                        <label>2DO Reporte:</label><input type="date" name="seg_rep" class="form-control" id="2reporte" value="" >
                                        <label>3ER Reporte(FINAL):</label><input type="date" name="tercer_rep" class="form-control" id="3reporte" value="" ><br><br>
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="fifthStep" style="display:none;">
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="sixthStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">VI. IDENTIFICACIÓN DEL GRUPO:</h3>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <label>Grupo:</label>
                                        <input type="number" placeholder="No. de Alumnos" name="total_alumnos" class="form-control" id="total_alumnos" value="" >
                                    </div>
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" placeholder="Salón" name="salon" class="form-control" id="salon" value="" ><br><br>
                                        <input type="radio" id="in-category-20" name="category6" value="LISTO"> <b>LISTO</b>
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="sevenStep" style="display:none;">
                                    <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12" >
                                        <h3 class="dark-grey">VII.UNIDADES DE COMPETENCIA:</h3>
                                        <div style="overflow-y: scroll; height:200px; width: 100%">
                                            <table id="unidades" border="1" class="table table-hover table-responsive">
                                                <tr>
                                                    <th>Dia con fecha y Horario</th>
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
                                                    <td><textarea id="1" name="cosa"></textarea></td>
                                                    <td><textarea id="2" name="cosa"></textarea></td>
                                                    <td><textarea id="3" name="cosa"></textarea></td>
                                                    <td><textarea id="4" name="cosa"></textarea></td>
                                                    <td><textarea id="5" name="cosa"></textarea></td>
                                                    <td><textarea id="6" name="cosa"></textarea></td>
                                                    <td><textarea id="7" name="cosa"></textarea></td>
                                                    <td><textarea id="8" name="cosa"></textarea></td>
                                                    <td><textarea id="9" name="cosa"></textarea></td>
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="eightStep" style="display:none;">
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
                                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12" id="nineStep" style="display:none;">
                                    <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                        <h3 class="dark-grey">IX. REFERENCIAS COMPLEMENTARIAS:</h3>
                                        <textarea class="form-control" name="complem" placeholder="Referencias Complementarias" rows="5" cols="25" ></textarea><br><br>
                                        <input type="radio" id="in-category-20" name="category2" value="LISTO"> <b>LISTO</b>
                                    </div>
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