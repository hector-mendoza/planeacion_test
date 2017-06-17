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
                    Lista Direcciones
                    </h1>
                    <div class="col-md-12">
                        <?php

                        $sql = mysqli_query($link, "SELECT d.id_direccion, d.direccion, u.id_usuario, u.nombre, u.apellido FROM direcciones d
                                                    LEFT JOIN direccionesxdocente dxd
                                                    ON  d.id_direccion = dxd.id_direccion
                                                    LEFT JOIN usuarios u
                                                    ON dxd.id_usuario = u.id_usuario");
                        ?>
                        <a href="#agregarDir" class="btn btn-success" data-toggle="modal">+ AGREGAR</a><br><br>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>ID DIRECCION</th>
                                        <th>DIRECCION</th>
                                        <th>NOMBRE DIRECTOR</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php while ($row = mysqli_fetch_row($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[0]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[3] . ' ' . $row[4]; ?></td>
                                        <td><a href="editarDir.php?id_dir=<?php echo $row[0]; ?>" class="btn btn btn-warning">EDITAR</a><a href="eliminarDir.php?id_dir=<?php echo $row[0]; ?>" class="btn btn btn-danger">ELIMINAR</a></td>
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
                
                <div id="agregarDir" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Agregar Direccion</h4>
                            </div>
                            <form method="POST" id="insert_usr" action="guardarDir.php" accept-charset="utf-8">
                                <div class="modal-body">
                                    Direccion: <input type="text" name="direccion" id="direccion" class="form-control" placeholder = "Nombre" requiered>
                                    Director:
                                    <select class="selectpicker" data-live-search="true" name="id_usuario" id="id_usuario" requiered>
                                        <optgroup label="Director">
                                            <?php
                                            include('conect.php');
                                            $ref = mysqli_query($link,"SELECT * FROM usuarios u WHERE u.director = '1' ");
                                            while ($r = mysqli_fetch_row($ref)) {
                                                echo "<option value='$r[0]'>$r[2] $r[3]</option>";
                                            }
                                            ?>
                                        </optgroup>
                                    </select>
                                    
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" id="submit" class="btn btn-success" value="DAR DE ALTA">
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
                                <div class="modal-body" id ="edit_detail">
                                    
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
                            var dirId = $(this).attr("id");
                            $.ajax({
                                url: "editDirModal.php",
                                method: "post",
                                data: {dirId:dirId},
                                success: function (data) {
                                    $('#edit_detail').html(data);
                                    $('#dataModal').modal("show");
                                }
                            });
                        });
                     
                </script>