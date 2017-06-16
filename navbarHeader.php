<?php
session_start();
if (!$_SESSION['id_usuario']) {
header("Location: login.php");
}
mysql_connect("localhost", "root", "", "planeacion");
mysql_select_db("planeacion") or die(mysql_error()) ;
$sql = "SELECT nombre FROM usuarios WHERE id_usuario = $_SESSION[id_usuario]";
$res= @mysql_query($sql) or die(mysql_error());
$data = mysql_fetch_assoc($res);
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
    <a class="navbar-brand" href="index.php">Planeación UVAQ</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu message-dropdown">
            <li class="message-footer">
                <a href="#">Leer mensajes</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu alert-dropdown">
            <li>
                <a href="#">Ver todas</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $data['nombre']; ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Opciones</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="salir.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
            </li>
        </ul>
    </li>
</ul>