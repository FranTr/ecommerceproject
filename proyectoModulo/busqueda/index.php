<?php include("../startapp.php");
session_start();

$titulo = "Busqueda";
$busqueda_producto = $_POST["buscar"];
$template_seccion= "../templates/busqueda.php";

    $sql = "SELECT * FROM producto WHERE nombre LIKE '$busqueda_producto%' OR nombre LIKE '%$busqueda_producto%' ";
   
        
    if(sqlsrv_query($conexion,$sql)) {
        
        $sql ="SELECT * FROM producto WHERE nombre LIKE '$busqueda_producto%' OR nombre LIKE '%$busqueda_producto%'";
        $resultado =sqlsrv_query($conexion,$sql);
        
         if(empty($resultado)) {

        $template_seccion= "../templates/busqueda.php";
        
        } 
    } else {
        
    }
    
include '../templates/main.php';
require"../endApp.php";
?>