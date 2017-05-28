<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Planeación UVAQ</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form id="selectionForm" class="form-horizontal" role="form" method="POST" action="#">
                <div id="selectMateria" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Selección de Materia</div>
                        </div>
                        <div style="padding-top:30px" class="panel-body" >
                            
                            
                            <div class="form-group">
                                <label for="ciclo" class="col-md-3 control-label">Ciclo / Plan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ciclo" placeholder="Ciclo / Plan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="carrera" class="col-md-3 control-label">Carrera</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="carrera" placeholder="Carrera">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="semestre" class="col-md-3 control-label">Semestre</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="semestre" placeholder="Semestre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="materia" class="col-md-3 control-label">Materia</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="materia" placeholder="Materia">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="button" class="btn btn-lg btn-info" onclick="$('#selectMateria').hide(); $('#selectClases').show()">SIGUIENTE <i class="glyphicon glyphicon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="selectClases" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><i class="glyphicon glyphicon-hand-right"></i> Selección de Clases</div>
                        </div>
                        <div class="panel-body" >
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Núm. de Clases</label>
                                <div class="col-md-9">
                                    <select name="clases" class="form-control">
                                        <?php
                                        for ($i=0; $i <= 50; $i++) {
                                        echo "<option value=$i>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="button" class="btn btn-lg btn-info" onclick="$('#selectClases').hide(); $('#pasteTemario').show()">SIGUIENTE <i class="glyphicon glyphicon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pasteTemario" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><i class="glyphicon glyphicon-paste"></i> Pegar el Temario</div>
                        </div>
                        <div class="panel-body" >
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Temario</label>
                                <div class="col-md-9">
                                    <textarea name="temario" class="form-control" placeholder="Pega tu temario aquí"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" name="submit" value="SIGUIENTE" class="btn btn-info btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
=======
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Planeación UVAQ</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form id="selectionForm" class="form-horizontal" role="form" method="POST" action="#">
                <div id="selectMateria" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Selección de Materia</div>
                        </div>
                        <div style="padding-top:30px" class="panel-body" >
                            
                            
                            <div class="form-group">
                                <label for="ciclo" class="col-md-3 control-label">Ciclo / Plan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ciclo" placeholder="Ciclo / Plan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="carrera" class="col-md-3 control-label">Carrera</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="carrera" placeholder="Carrera">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="semestre" class="col-md-3 control-label">Semestre</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="semestre" placeholder="Semestre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="materia" class="col-md-3 control-label">Materia</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="materia" placeholder="Materia">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="button" class="btn btn-lg btn-info" onclick="$('#selectMateria').hide(); $('#selectClases').show()">SIGUIENTE <i class="glyphicon glyphicon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="selectClases" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><i class="glyphicon glyphicon-hand-right"></i> Selección de Clases</div>
                        </div>
                        <div class="panel-body" >
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Núm. de Clases</label>
                                <div class="col-md-9">
                                    <select name="clases" class="form-control">
                                        <?php
                                        for ($i=0; $i <= 50; $i++) {
                                        echo "<option value=$i>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="button" class="btn btn-lg btn-info" onclick="$('#selectClases').hide(); $('#pasteTemario').show()">SIGUIENTE <i class="glyphicon glyphicon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pasteTemario" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><i class="glyphicon glyphicon-paste"></i> Pegar el Temario</div>
                        </div>
                        <div class="panel-body" >
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Temario</label>
                                <div class="col-md-9">
                                    <textarea name="temario" class="form-control" placeholder="Pega tu temario aquí"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" name="submit" value="SIGUIENTE" class="btn btn-info btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
>>>>>>> 434e92f46bf4ccc54e27f8a81833f867563f08f6
</html>