<?php 
    session_start();
    require'../startApp.php';

    $producto_nombre = $_POST["nombre"];
    $producto_descripcion = $_POST["descripcion"];
    $producto_precio = $_POST["precio"];
    $producto_imagen = $_POST["imagen"];

    $sql = "INSERT INTO producto(nombre,descripcion,precio,urlimagen)"
        . "VALUES('$producto_nombre',
                  '$producto_descripcion',
                  '$producto_precio',
                  '$producto_imagen')";
   
        
    if(sqlsrv_query($conexion,$sql)) {
        
        $sql ="SELECT * FROM producto WHERE nombre ='$producto_nombre'";
        
        $resultado =sqlsrv_query($conexion,$sql);
        
         if($resultado) {
             
        header('Location: ../introducirProductos/index.php');
        $vinos = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
        $template_seccion= "../templates/introproductos.php";
        
        } 
    } else {
        
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>
