<?php
include("conect.php") ;
if (isset($_POST)) {
	$out = '';
	$sql_ref = "SELECT * FROM usuarios WHERE id_usuario = $_POST[usrId]";
	$result = mysqli_query($link, $sql_ref);
	while ($row = mysqli_fetch_array($result)) {
		$out .= '	
					<input type="hidden" name="id_usuario" id="id_usuario" value="'. $_POST["usrId"] . '">
                    Nombre: <input type="text" name="nombre" id="nombre" class="form-control" value="'.$row["nombre"].'" placeholder = "Nombre" requiered>
                    Apellido: <input type="text" name="apellido" id="apellido" class="form-control" value="'.$row["apellido"].'" placeholder = "Apellido" requiered>
                    Usuario: <input type="text" name="usuario" id="usuario" class="form-control" value="'.$row["usuario"].'" placeholder = "Usuario" requiered>
                    Contraseña: <input type="password" name="pass" id="pass" class="form-control" value="'.$row["pass"].'" placeholder = "Contraseña" requiered>
                    Correo: <input type="text" name="correo" id="correo" class="form-control" value="'.$row["correo"].'" placeholder = "Correo" requiered>
                    Grado académico: <input type="text" name="grado_academ" id="grado_academ" class="form-control" value="'.$row["grado_academ"].'" placeholder = "Grado Académico" requiered>
                    Formación: <input type="text" name="formacion" id="formacion" class="form-control" value="'.$row["formacion"].'" placeholder = "Formación" requiered> <br>
                    ';
                    if ($row["admin"] == 1)
				    {
				        $out .= 'Administrador:
			                    <select name="admin" id="admin">
			                    	<option value="0"> NO </option>
			                    	<option value="1" selected> SI </option>
			                    </select>
			                    <br><br>';
				     }
				     else
				     {
				        $out .= 'Administrador:
			                    <select name="admin" id="admin">
			                    	<option value="0" selected> NO </option>
			                    	<option value="1"> SI </option>
			                    </select>
			                    <br><br>';
				     }

				     if ($row["director"] == 1)
				    {
				        $out .= 'Director:
			                    <select name="director" id="director">
			                    	<option value="0"> NO </option>
			                    	<option value="1" selected> SI </option>
			                    </select>';
				     }
				     else
				     {
				        $out .= 'Director:
			                    <select name="director" id="director">
			                    	<option value="0" selected> NO </option>
			                    	<option value="1"> SI </option>
			                    </select>';
				     }
	}
	echo $out;
}
 ?>