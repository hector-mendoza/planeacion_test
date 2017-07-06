<!DOCTYPE html>
<html lang="en">
    <?php include('conect.php'); ?>

    <?php include('head.php'); ?>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php

                      include("navbarHeader.php"); 
                      include("sidebar.php"); 

                      ?>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid table-responsive">
                    <h1 class="page-header">
                    Lista Planeaciones Docentes
                    </h1>
                    <div class="col-md-12">
                        <?php
                        /*$userId = mysqli_query($link,"SELECT * FROM materiasxdocente WHERE id_usuario = '$_SESSION[id_usuario]' ") or die("<h2 align='center'>NO HAY RESULTADOS</h2>");
                        
                        $datos = mysqli_fetch_object($userId);*/

                        /*$matId = mysqli_query($link, "SELECT * FROM materias WHERE id_materia = $datos->id_materia") or die("<h2 align='center'>NO HAY RESULTADOS</h2>");*/
                        //$dataMateria = mysqli_fetch_arary($matId);

                        $prueba = mysqli_query($link, "SELECT * FROM usuarios where id_director = $_SESSION[id_usuario]");
                        
                        while ($registro = mysqli_fetch_array($prueba)){  
                       
                            
                                                $matId = mysqli_query($link, "SELECT * FROM materias where materias.id_usuario = $registro[id_usuario] ") or die("<h2>No hay resultados</h2>");
                      

                                             $matId2 = mysqli_query($link, "SELECT * FROM usuarios where usuarios.id_usuario = $registro[id_usuario] ") or die("<h2>No hay resultados</h2>");

                        ?>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">



                            <table class="table table-hover table-bordered table-responsive">
                                <thead>
                                    <tr class="info">
                                        <th>DOCENTES</th>
                                        <th>NOMBRE</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                   if ($matId) {
                                       while ($row = mysqli_fetch_row($matId) and $row2 = mysqli_fetch_row($matId2) ) {
                                    echo "
                                    <tr>
                                        <td>$row2[2] $row2[3] </td>
                                        <td>$row[1]</td>
                                        <td><a href='editar_pdf.php?id=".$row[0]."'>EDITAR</a><br><a href='pdf.php?id=".$row[0]."' target='_blank'>VER PDF</a></td>
                                    </tr>
                                    ";
                                    }
                                   }else{
                                    ?>
                                        <h2>No hay resultados</h2>
                                    <?php
                                   }
                               }
                                    ?>
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