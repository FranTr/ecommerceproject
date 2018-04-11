<?php include("../startapp.php");
session_start();

$titulo = "Catalogo";
$template_seccion = "../templates/productos.php";

$sql = "SELECT * FROM producto";
$resultado_producto = sqlsrv_query($conexion,$sql);

include '../templates/main.php';

?>