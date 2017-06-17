<?php
include("conect.php") ;
if (isset($_POST)) {
	$out = '';
	$sql_ref = "SELECT d.id_direccion, d.direccion, u.id_usuario, u.nombre, u.apellido FROM direcciones d
                                                    LEFT JOIN direccionesxdocente dxd
                                                    ON  d.id_direccion = dxd.id_direccion
                                                    LEFT JOIN usuarios u
                                                    ON dxd.id_usuario = u.id_usuario WHERE d.id_direccion = $_POST[dirId]";
	$result = mysqli_query($link, $sql_ref);
	$out .= '
	<div class="table-responsive">
		<table class="table table-bordered">
	</div>
	';
	while ($row = mysqli_fetch_array($result)) {
		$out .= '	
					<input type="hidden" name="id_direccion" id="id_direccion" value="'. $_POST["dirId"] . '">
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
	$out .= "</table></div>";
	echo $out;
}
 ?>