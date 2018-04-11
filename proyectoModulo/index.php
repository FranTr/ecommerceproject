<?php include("startapp.php");
session_start();
$titulo = "Inicio";
$template_seccion = "templates/home.php";

$sql = "SELECT * FROM producto
        WHERE idproducto <=8";

$resultado_producto = sqlsrv_query($conexion,$sql);

include 'templates/main.php';

?>