<?php 
include("conect.php");
$sqlRef = mysqli_query($link, "SELECT * FROM referencias");
 ?>
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
                <h1 class="page-header">Lista Referencias</h1>
                <a href="#agregarRef" class="btn btn-success" data-toggle="modal">+ AGREGAR</a><br><br>
                    <section class="container">
                        <div class="container-page">
                            <div class=" table table-responsive ">
                                <table class="table table-responsive table-bordered">
                                    <tr class="info">
                                        <th>ISBN</th>
                                        <th>Autor</th>
                                        <th>VISTA</th>
                                    </tr>
                                    <?php 
                                    while ($row = mysqli_fetch_row($sqlRef)) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $row["1"] ?></td>
                                            <td> <?php echo $row["2"] ?></td>
                                            <td><input type="button" name="viewRef" id="<?php echo $row["0"]; ?>" class="view_data btn btn-danger" value="VER"></td>
                                        </tr>
                        
                                        <?php
                                    }
                                     ?>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>

<div id="agregarRef" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar Referencia</h4>
            </div>
            <form method="POST" id="insert_refBas" accept-charset="utf-8">
                <div class="modal-body">
                    <p>Formulario para agregar referencia.</p>
                    <input type="text" placeholder="ISBN" name="isbn" class="form-control" id="isbn" required><br>
                    <input type="text" placeholder="Autor" name="autor" class="form-control" id="autor" required><br>
                    Fecha:
                    <input type="date" class="form-control" name="fecha" id="fecha"><br><br>
                    <input type="text" placeholder="Titulo" name="titulo" class="form-control" id="titulo" required><br>
                    <input type="text" placeholder="Editorial" name="editorial" class="form-control" id="editorial" required><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <input type="submit" id="submit" class="btn btn-success" value="DAR  DE ALTA">
                </div>
            </form>
        </div>
    </div>
</div>
                                

<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detalles Referencia</h4>
            </div>
            <div class="modal-body" id="ref_detail">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
        $('.view_data').click(function () {
            var refId = $(this).attr("id");
            $.ajax({
                url: "selectRef.php",
                method: "post",
                data: {refId:refId},
                success: function (data) {
                    $('#ref_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
     $('#insert_refBas').on("submit", function(event){ 
          event.preventDefault();
          if($('#isbn').val() == ""){  
           alert("ISBN is required");  
          }else if($('#autor').val() == ''){  
           alert("Autor is required");  
          }else if($('#titulo').val() == ''){  
           alert("Titulo is required");  
          }else{
            $.ajax({
                url:"insertRef.php",  
                method:"POST",  
                data:$('#insert_refBas').serialize(),
                success:function(data){  
                 $('#insert_refBas')[0].reset();  
                 $('#agregarRef').modal('hide');  
                 $('#ref_bas').html(data); 
                }
            });
            $(document).ajaxStop(function () {
                window.location.reload();
            });
        }  
    });
     
</script>