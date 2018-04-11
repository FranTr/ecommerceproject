<?php 
    session_start();
    require'../startApp.php';

    $usuario_email = $_POST["email"];

    
        $sql ="SELECT * FROM usuario WHERE Email='$usuario_email'";

        $resultado = sqlsrv_query($conexion,$sql);

        $user = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

    if(!empty($user)) {
        $sql = "delete usuario WHERE Email='$usuario_email'";
        sqlsrv_query($conexion,$sql);
        
        $sql ="SELECT * FROM usuario WHERE Email='$usuario_email'";
        
        $resultado = sqlsrv_query($conexion,$sql);
        
        $user = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
        
         if(empty($user)) {
             
             $template_seccion= "../templates/auth/eliminar_usuario.php";
            $users = "ha sido eliminado";
             
        } else {
             
            $template_seccion= "../templates/auth/eliminar_usuario.php";
        $users = "No ha sido eliminado";
            
    }
    } else {
        
       $template_seccion= "../templates/auth/eliminar_usuario.php";
             $users = "El email es erroneo o no existe";
        
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>
