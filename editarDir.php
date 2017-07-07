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
                        <form method="POST" id="insert_usr" action="guardarDir.php" accept-charset="utf-8">
                            <?php
                                include("conect.php") ;
                                if (isset($_GET)) {
                                    $out = '';
                                    $sql_ref = "SELECT d.id_direccion, d.direccion, u.id_usuario, u.nombre, u.apellido FROM direcciones d
                                                                                    LEFT JOIN direccionesxdocente dxd
                                                                                    ON  d.id_direccion = dxd.id_direccion
                                                                                    LEFT JOIN usuarios u
                                                                                    ON dxd.id_usuario = u.id_usuario WHERE d.id_direccion = $_GET[id_dir]";
                                    $result = mysqli_query($link, $sql_ref);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $out .= '   
                                                    <input type="hidden" name="id_direccion" id="id_direccion" value="'. $_GET["id_dir"] . '">
                                                    Direccion: <input type="text" name="direccion" id="direccion" class="form-control" value="'. $row["direccion"] .'" placeholder = "Direccion" requiered>
                                                    <select class="selectpicker" data-live-search="true" name="id_usuario" id="id_usuario" requiered>
                                                        <optgroup label="Director">';
                                                                            $ref = mysqli_query($link,"SELECT * FROM usuarios u WHERE u.director = '1' ");
                                                                            while ($r = mysqli_fetch_row($ref)) {
                                                                                $out .= '<option value="'. $r[0] .'">'. $r[2] . $r[3] .'</option> ';
                                                                            }
                                        $out .= '                                    
                                                        </optgroup>
                                                    </select>
                                                    ';
                                    }
                                    echo $out;
                                }
                                 ?>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                            <input type="submit" id="submit" class="btn btn-success" value="GUARDAR">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('script.php'); ?>
    </body>
</html>