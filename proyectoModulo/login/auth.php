<?php 
    session_start();
    require '../startApp.php';

    $usuario_email =(isset ($_POST["email"])) ? $_POST["email"]: "mail vacio";

    $usuario_password = (isset ($_POST["password"])) ? $_POST["password"] : "password vacio";

    $fecha = date("Y-m-d H:i:s");


   if($usuario_email =='' && $usuario_password =='') {
       die();
   } 


//validar los datos del post 

$sql = "SELECT * FROM usuario WHERE Email ='$usuario_email' AND pass='$usuario_password'";

$resultado = sqlsrv_query($conexion, $sql);

if($resultado) {

     $usuario = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
    
    if($usuario) {
        
        $_SESSION["usuario"] = $usuario;
        $id_usuario = $_SESSION["usuario"]["id"];
        
        $sql = "INSERT INTO carrito(idusuario,fecha,total,pagado) "
          .  "VALUES('$id_usuario','$fecha',0,0);";
        
        $resultado = sqlsrv_query($conexion, $sql);
        
        if($resultado) {
            
            $user = $_SESSION["usuario"];
            
            $sql = "SELECT * FROM carrito WHERE idusuario ='$id_usuario' AND fecha='$fecha'";
            
            $resultado = sqlsrv_query($conexion, $sql);
            
            $carrito = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
            
            $_SESSION["carrito"] = $carrito;
            
            header("Location: ../micuenta/index.php");
        }
        
        
        
        
    } else {
       
        $error ="Error de autentificacion";
       header("Location: ../login/index.php");
    }
} else {
        $error ="Error de conexion";
       header("Location: ../login/index.php");
    
}

include('../templates/main.php');

