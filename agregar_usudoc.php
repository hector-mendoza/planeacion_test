<?php include('conect.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include("navbarHeader.php"); include("sidebar.php"); ?>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid table-responsive">
                    <h1 class="page-header">
                    Lista Usuarios (AREA)
                    </h1>
                    <div class="col-md-12">
                            <form method="POST"  action="guardarUsrdirec.php" accept-charset="utf-8">

                                    Nombre: <input type="text" name="nombre" id="nombre" class="form-control" placeholder = "Nombre" requiered>
                                    Apellido: <input type="text" name="apellido" id="apellido" class="form-control" placeholder = "Apellido" requiered>
                                    Usuario: <input type="text" name="usuario" id="usuario" class="form-control" placeholder = "Usuario" requiered>
                                    Contraseña: <input type="password" name="pass" id="pass" class="form-control" placeholder = "Contraseña" requiered>
                                    Correo: <input type="text" name="correo" id="correo" class="form-control" placeholder = "Correo" requiered>
                                    Grado académico: <input type="text" name="grado_academ" id="grado_academ" class="form-control" placeholder = "Grado Académico" requiered>
                                    Formación: <input type="text" name="formacion" id="formacion" class="form-control" placeholder = "Formación" requiered> <br>
                                    <input type="hidden" name="admin" id="admin" value="0">
                                    <input type="hidden" name="director" id="director" value="0">
                                    <input type="hidden" name="id_director" id="id_director" value="<?php echo $_SESSION["id_usuario"] ?>">


                                    <br><br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" id="submit" class="btn btn-success" value="DAR  DE ALTA">
                                </div>

                       </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('script.php'); ?>
    </body>
</html>
