<?php 
    session_start();
    require'../startApp.php';

    $fecha = date("Y-m-d H:i:s");
    $id_usuario = $_SESSION["usuario"]["id"];
    $producto_pagado = $_POST["pagado"];
    $carrito = $_SESSION["carrito"];
    $carrito_id = $carrito["idcarrito"];


    $sql = "UPDATE carrito SET pagado = '$producto_pagado' WHERE idcarrito='$carrito_id'";

     $sql_total = "SELECT SUM(p.precio) as TOTAL FROM productosCarrito as pc
	INNER JOIN producto as p ON p.idproducto = pc.idproducto
	INNER JOIN carrito as c ON pc.idcarrito = c.idcarrito
	INNER JOIN usuario as u ON u.id = c.idusuario
	WHERE pc.idcarrito = '$carrito_id'";

    $resultado = sqlsrv_query($conexion,$sql);
    $resultado_total = sqlsrv_query($conexion,$sql_total);

    $total_carrito = sqlsrv_fetch_array($resultado_total,SQLSRV_FETCH_ASSOC);

    $tot = $total_carrito["TOTAL"];
    $sql = "UPDATE carrito SET total ='$tot' WHERE idcarrito='$carrito_id'";
    $update_total = sqlsrv_query($conexion,$sql);

    if($resultado_total && $resultado && $update_total) {
        
       
        $sql = "INSERT INTO carrito(idusuario,fecha,total,pagado) "
          .  "VALUES('$id_usuario','$fecha',0,0);";
        $resultado = sqlsrv_query($conexion, $sql);
        
        if($resultado) {
            
            $user = $_SESSION["usuario"];
            $sql = "SELECT * FROM carrito WHERE idusuario ='$id_usuario' AND fecha='$fecha'";
            $resultado = sqlsrv_query($conexion, $sql);
            $carrito = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
            $_SESSION["carrito"] = $carrito;
    
        $template_seccion= "../templates/pagoOk.php";
        
        }
    } else {
        
        echo "no ha pagado correctamente el carrito";
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>
