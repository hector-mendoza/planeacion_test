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
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="info">
                                <th>NOMBRE</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>data</td>
                                <td align="center"><a href="pdf.php" title="VER PDF">VER PDF</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include('script.php'); ?>
    </body>
</html>