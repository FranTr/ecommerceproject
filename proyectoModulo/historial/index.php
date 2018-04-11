<?php 
    session_start();
    require'../startApp.php';

    $carrito = $_SESSION["carrito"];
    $carrito_id = $carrito["idcarrito"];
    $sql = "SELECT * FROM carrito WHERE pagado = 1";
   
     $resultado = sqlsrv_query($conexion, $sql);

    if($resultado) {
   
        $template_seccion= "../templates/mostrarhistorial.php";
        
        
    } else {
        echo "error";
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>
