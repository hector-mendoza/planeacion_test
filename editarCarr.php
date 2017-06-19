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
                        <form method="POST" id="insert_usr" action="guardarcarr.php" accept-charset="utf-8">
                            <?php
                                include("conect.php") ;
                                if (isset($_GET["id_carrera"])) {
                                    $out = '';
                                 
                            $sql_ref = "SELECT  c.id_carrera, c.carrera, c.id_direccion , d.direccion FROM carreras c
                                                    LEFT JOIN direcciones d
                                                    ON  c.id_direccion = d.id_direccion
                                                    WHERE c.id_carrera = $_GET[id_carrera]";
                                                    


                                    $result = mysqli_query($link, $sql_ref);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $out .= '   
                                                    <input type="hidden" name="id_carrera" id="id_carrera" 
                                                    value="'. $_GET["id_carrera"] . '">
                                                    Carrera: <input type="text" name="carrera" id="carrera" class="form-control" value="'. $row["carrera"] .'" placeholder = "carrera" requiered>
                                                    
                                                    <select class="selectpicker" data-live-search="true" name="id_direccion" id="id_direccion" requiered>
                                                        <optgroup label="Direcciones">';
                                                                            $ref = mysqli_query($link,"SELECT * FROM direcciones ");
                                                                            while ($r = mysqli_fetch_row($ref)) {
                                                                            echo "<option value='$r[0]'>$r[1]</option>";
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
