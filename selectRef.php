<?php
include("conect.php") ;
if (isset($_POST)) {
	$out = '';
	$sql_ref = "SELECT * FROM referencias WHERE id_referencia = $_POST[refId]";
	$result = mysqli_query($link, $sql_ref);
	$out .= '
	<div class="table-responsive">
		<table class="table table-bordered">
	</div>
	';
	while ($row = mysqli_fetch_array($result)) {
		$out .= '
			<tr>
				<td width="30%"><label>ISBN</label></td>
				<td width="70%">'.$row["isbn"].'</td>
			</tr>
			<tr>
				<td width="30%"><label>AUTOR</label></td>
				<td width="70%">'.$row["autor"].'</td>
			</tr>
			<tr>
				<td width="30%"><label>FECHA</label></td>
				<td width="70%">'.$row["fecha"].'</td>
			</tr>
			<tr>
				<td width="30%"><label>TITULO</label></td>
				<td width="70%">'.$row["titulo"].'</td>
			</tr>
			<tr>
				<td width="30%"><label>EDITORIAL</label></td>
				<td width="70%">'.$row["editorial"].'</td>
			</tr>
		';
	}
	$out .= "</table></div>";
	echo $out;
}
 ?>