<?php include("../startapp.php");
session_start();

$titulo = "Carrito";
$detalles_producto = $_POST["id"];
$usuario = $_SESSION["usuario"];
$carrito = $_SESSION["carrito"];    
$carrito_id = $carrito["idcarrito"];
$usuario_id = $usuario["id"];

    $sql = "SELECT * FROM producto WHERE idproducto ='$detalles_producto'";
    
        
    if(isset($_SESSION["usuario"]) && sqlsrv_query($conexion,$sql) && isset($_SESSION["carrito"]) ) {
      
     $sql = "INSERT into productosCarrito(idcarrito,idproducto)"
    ."VALUES('$carrito_id','$detalles_producto')";
        
      $resultado = sqlsrv_query($conexion,$sql);
        
         if($resultado) {
             
             $carrito = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
             
            header("Location: ../producto/index.php");
        
        } else {

             //header("Location: ../producto/index.php");
         } 
    } else {
        $template_seccion= "../templates/home.php";
    }
    
include '../templates/main.php';
require"../endApp.php";
?>
