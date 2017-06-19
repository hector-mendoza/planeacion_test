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
                    Lista de Carreras
                    </h1>
                    <div class="col-md-12">
                        <?php

                          $sql = mysqli_query($link, "SELECT  c.id_carrera, c.carrera, c.id_direccion , d.direccion FROM carreras c
                                                    LEFT JOIN direcciones d
                                                    ON  c.id_direccion = d.id_direccion");
                        ?>


                        <a href="#agregacarr" class="btn btn-success" data-toggle="modal">+ AGREGAR</a><br><br>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>ID_CARRERA</th>
                                        <th>CARRERA</th>
                                        <th>DIRECCIÓN</th>
                                        <th>ACCIONES</th>                             
                             
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php while ($row = mysqli_fetch_row($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[0]; ?></td>
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[3]; ?></td>

                                      <td>
                                      <a href="editarCarr.php?id_carrera=<?php echo $row[0]; ?>" class="btn btn btn-warning">EDITAR</a>

                                      
                                      <a href="eliminarcarr.php?id_carrera=<?php echo $row[0]; ?>" class="btn btn btn-danger">ELIMINAR</a></td>
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
                
                <div id="agregacarr" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Agregar Carrera</h4>
                            </div>
                            <form method="POST" id="insert_usr" action="agregarcarr.php" accept-charset="utf-8">
                                <div class="modal-body">
                                    Nombre de la carrera: <input type="text" name="carrera" id="carrera" class="form-control" placeholder = "Carrera" requiered>
                                    

                                    <select class="selectpicker" data-live-search="true" name="id_direccion" id="id_direccion" requiered>
                                        <optgroup label="Dirección">
                                            <?php
                                            include('conect.php');
                                            $ref = mysqli_query($link,"SELECT * FROM direcciones  ");
                                            while ($r = mysqli_fetch_row($ref)) {
                                                echo "<option value='$r[0]'>$r[1]</option>";
                                            }
                                            ?>
                                        </optgroup>
                                    </select>
                                    
                            
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" id="submit" class="btn btn-success" value="DAR  DE ALTA">
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