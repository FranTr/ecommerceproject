<?php include("../startapp.php");
session_start();

    if( isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 1 ) {
        
$titulo = "Modificar productos";
$template_seccion = "../templates/introproductos.php";

include '../templates/main.php';
        
} else {
    
    echo "Acceso denegado";
}
?>