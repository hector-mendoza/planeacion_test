<?php
$link = mysqli_connect("localhost", "root", "", "planeacion");
$db = mysqli_select_db($link, "planeacion") or die("<h2>BD no encontrada</h2>");
?>