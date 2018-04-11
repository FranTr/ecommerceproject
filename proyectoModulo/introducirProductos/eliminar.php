<?php session_start();
    require'../startApp.php';

    $producto_nombre = $_POST["nombre"];


    $sql = "delete producto WHERE nombre ='$producto_nombre'";
   
      $resultado = sqlsrv_query($conexion,$sql);   
    if($resultado) {
        
        $vinos = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
        $template_seccion= "../templates/introproductos.php";
             
     /*   header('Location: ../introducirProductos/index.php');*/
    } else {
        echo "No se ha borrado correctamente";
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>
