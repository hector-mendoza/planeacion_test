<?php
$link = mysqli_connect("localhost", "root", "", "nombreDB");
$db = mysqli_select_db($link, "nombreDB") or die("<h2>BD no encontrada</h2>");
?>