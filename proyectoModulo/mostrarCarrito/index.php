<?php include("../startapp.php");
session_start();
$titulo = "Carrito";
$template_seccion = "../templates/detalles.php";

$carrito = $_SESSION["carrito"];    
$carrito_id = $carrito["idcarrito"];

$sql = " SELECT p.idproducto, p.nombre,p.precio,p.urlimagen FROM productosCarrito as pc
	INNER JOIN producto as p ON p.idproducto = pc.idproducto
	INNER JOIN carrito as c ON pc.idcarrito = c.idcarrito
	INNER JOIN usuario as u ON u.id = c.idusuario
	WHERE pc.idcarrito = '$carrito_id'";

$resultado_productos = sqlsrv_query($conexion,$sql);

include '../templates/main.php';

?>
