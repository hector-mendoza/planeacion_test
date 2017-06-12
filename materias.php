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
                    Lista Planeaciones
                    </h1>
                    <div class="col-md-12">
                        <?php
                        $userId = mysqli_query($link,"SELECT id_materia, id_usuario FROM materiasxdocente WHERE id_usuario = '$_SESSION[id_usuario]' ") or die("<h2 align='center'>NO HAY RESULTADOS</h2>");
                        $datos = mysqli_fetch_object($userId);
                        $matId = mysqli_query($link, "SELECT * FROM materias") or die("<h2 align='center'>NO HAY RESULTADOS</h2>");
                        //$dataMateria = mysqli_fetch_arary($matId);
                        ?>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>NOMBRE</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php while ($row = mysqli_fetch_row($matId)) {
                                    echo "
                                    <tr>
                                        <td>$row[1]</td>
                                        <td><a href='editar_pdf.php?id=".$row[0]."'>EDITAR</a><br><a href='pdf.php?id=".$row[0]."' target='_blank'>VER PDF</a></td>
                                    </tr>
                                    ";
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