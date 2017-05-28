<?php
require_once('conect.php');
extract($_POST);

$req = (strlen($email)*strlen($name)*strlen($lastname)*strlen($tel)*strlen($grado)*strlen($formacion)*
  strlen($user)*strlen($pass)*strlen($r_pass)) or die('<h2><a href="login.php">Completa los campos</a></h2>');

  if($pass != $r_pass){
    echo "Las contraseñas no coinciden";
  }
  // $password = md5($r_password);

 mysqli_query($link,"INSERT INTO usuarios VALUES('','$user','$name','$lastname', '$pass', '$email', '$grado', '$formacion', 0, 0)") or die("Error de envío");

  $lastId = mysqli_insert_id($link);
  $phone_sql = "INSERT INTO telefonos VALUES('', '$lastId', '$tel')";
  mysqli_query($link, $phone_sql);

header("Location: login.php");
 ?>
