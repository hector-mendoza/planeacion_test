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
                        <?php

                        $sql = mysqli_query($link, "SELECT * FROM usuarios where  admin = '0' and director = '0' and id_director = $_SESSION[id_usuario]");
                        ?>
                      
                        <a href="agregar_usudoc.php" class="btn btn-success" >+ AGREGAR</a><br><br>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>CORREO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php while ($row = mysqli_fetch_row($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row[2]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[5]; ?></td>
                                        <td><a href="eliminarUsr.php?id_usuario=<?php echo $row[0]; ?>" class="btn btn btn-danger">ELIMINAR</a></td>
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
                
              