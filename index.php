<?php include('conect.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include("navbarHeader.php"); include("sidebar.php"); ?>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                <?php 
                $tipo = mysqli_query($link, "SELECT * FROM usuarios WHERE id_usuario = '$_SESSION[id_usuario]' ");
                $data = mysqli_fetch_object($tipo);
                if ($data->admin === "1") {
                	$_SESSION["admin"] = true;
                    echo "admin";
                }else{
                	if($data->director === "1"){
                		$_SESSION["director"] = true;
                	}
                	?>
                     <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Principal <small>Mision y Visión UVAQ</small>
                            </h1>
                            <div class="jumbotron">
                                <h1>Misión</h1>
                                <p>
                                    Formar personas integralmente inspiradas en el humanismo católico de Don Vasco de Quiroga
                                    para que sean agentes de cambio comprometidos con el bien común de la sociedad.
                                </p>
                                <p style="text-align: center"><button class="btn btn-primary btn-lg">COPIAR</button>
                                </p>
                            </div>
                            <div class="jumbotron">
                                <h1>Visión</h1>
                                <p style="text-align: justify; text-justify: center" class="vision">
                                    La Universidad Vasco de Quiroga es promotora de la educación, el estudio, la investigación
                                    y la difusión de la cultura, al mismo tiempo que se compromete ir a la sociedad, inspirados
                                    en el humanismo católico de Don Vasco de Quiroga. Tiene una estructura sólida, prestigiada y
                                    reconocida en la sociedad de la región centro occidente del país. Es una Institución, empeñada
                                    en el "esfuerzo común por construir la civilazión del amor, fundada en los valores universales
                                    de la paz, de la solidaridad, de la justicia y de la libertad" que coadyuva en la transición
                                    y vertebración social, forma con ideales firmes y principos básicos acerca del Hombre, la
                                    Sociedad, la Cultura y la Universidad, en donde se descubren y perfeccionan las capacidades
                                    individuales, sustentados en Valores Universales asumidos por la Institución.
                                </p>
                                <p style="text-align: center"><button class="btn btn-primary btn-lg botonCopiar">COPIAR</button>
                                </p>
                            </div>
                            <div class="jumbotron">
                                <h3><b>Principios Educativos del Modelo Educativo:</b></h3>
                                <p style="text-align: justify; text-justify: center">
                                    Verdad, Realidad, Educación, Docente y Educando.
                                </p>
                                <p style="text-align: center"><button class="btn btn-primary btn-lg botonCopiar">COPIAR</button>
                                </p>
                            </div>
                        </div>
                    </div>
               <?php }

                 ?>
                    <!-- Page Heading -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php include('script.php'); ?>
</body>
</html>