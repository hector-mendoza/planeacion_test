<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <?php include('script.php'); ?>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include("navbarHeader.php"); include("sidebar.php"); ?>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <section class="container">
                        <div class="container-page">
                            <form action="nuevaMateria.php" method="POST" accept-charset="utf-8">
                                <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12" id="firstStep">
                                    <h3 class="dark-grey">PRIMERO: Ingresa el número de clases:</h3>
                                </div>
                                <div class="form-group col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <label>Núm. Clases: </label>
                                    <input type="number" name="clases" class="form-control" id="num_clases" placeholder="Número de Clases" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-8 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="numClases" class="btn btn-info btn-lg">SEGUIR</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>