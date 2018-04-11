<?php include("../startapp.php");
session_start();

    if( isset($_SESSION["usuario"]) && $_SESSION["usuario"]["privilegio"] == 1 ) {
        
$titulo = "Eliminar usuario";
$template_seccion = "../templates/auth/eliminar_usuario.php";

include '../templates/main.php';
} else {
    
    echo "Acceso denegado";
}
?>