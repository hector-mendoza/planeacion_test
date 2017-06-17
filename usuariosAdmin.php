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
                    Lista Usuarios
                    </h1>
                    <div class="col-md-12">
                        <?php

                        $sql = mysqli_query($link, "SELECT * FROM usuarios");
                        ?>
                        <a href="#agregarUsr" class="btn btn-success" data-toggle="modal">+ AGREGAR</a><br><br>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>USUARIO</th>
                                        <th>CORREO</th>
                                        <th>ADMINISTRADOR</th>
                                        <th>DIRECTOR</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php while ($row = mysqli_fetch_row($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[2]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[5]; ?></td>
                                        <td><?php echo $row[8]; ?></td>
                                        <td><?php echo $row[9]; ?></td>
                                        <td><input type="button" name="viewRef" id="<?php echo $row[0]; ?>" class="edit_data btn btn-warning" value="EDITAR"><a href="eliminarUsr.php?id_usuario=<?php echo $row[0]; ?>" class="btn btn btn-danger">ELIMINAR</a></td>
                                        </tr>
                                    </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('script.php'); ?>
    </body>
</html>
                
                <div id="agregarUsr" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Agregar Usuario</h4>
                            </div>
                            <form method="POST" id="insert_usr" action="guardarUsr.php" accept-charset="utf-8">
                                <div class="modal-body">
                                    Nombre: <input type="text" name="nombre" id="nombre" class="form-control" placeholder = "Nombre" requiered>
                                    Apellido: <input type="text" name="apellido" id="apellido" class="form-control" placeholder = "Apellido" requiered>
                                    Usuario: <input type="text" name="usuario" id="usuario" class="form-control" placeholder = "Usuario" requiered>
                                    Contraseña: <input type="password" name="pass" id="pass" class="form-control" placeholder = "Contraseña" requiered>
                                    Correo: <input type="text" name="correo" id="correo" class="form-control" placeholder = "Correo" requiered>
                                    Grado académico: <input type="text" name="grado_academ" id="grado_academ" class="form-control" placeholder = "Grado Académico" requiered>
                                    Formación: <input type="text" name="formacion" id="formacion" class="form-control" placeholder = "Formación" requiered> <br>
                                    Administrador:
                                    <select name="admin" id="admin">
                                        <option value="0"> NO </option>
                                        <option value="1"> SI </option>
                                    </select>
                                    Director:
                                    <select name="director" id="director">
                                        <option value="0"> NO </option>
                                        <option value="1"> SI </option>
                                    </select>
                                    <br><br>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" id="submit" class="btn btn-success" value="DAR  DE ALTA">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="dataModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Editar Usuario</h4>
                            </div>
                            <form method="POST" id="insert_usr" action="guardarUsr.php" accept-charset="utf-8">
                                <div class="modal-body" id ="editUsr_detail">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" id="submit" class="btn btn-success" value="GUARDAR">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                        $('.edit_data').click(function () {
                            var usrId = $(this).attr("id");
                            $.ajax({
                                url: "editUsrModal.php",
                                method: "post",
                                data: {usrId:usrId},
                                success: function (data) {
                                    $('#editUsr_detail').html(data);
                                    $('#dataModal').modal("show");
                                }
                            });
                        });
                     
                </script>