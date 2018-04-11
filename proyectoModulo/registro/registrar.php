<?php 
    session_start();
    require'../startApp.php';
    
    $usuario_name =  $_POST["nombre"];
    $usuario_email =$_POST["email"];
    $usuario_apellido1 =  $_POST["apellido1"];
    $usuario_apellido2 =$_POST["apellido2"];
    $usuario_password =$_POST["password"];

    $sql = "INSERT INTO usuario(nombre,Apellido1,Apellido2,Email,Verificacion,pass,privilegio) "
    . "VALUES('$usuario_name',
            '$usuario_apellido1',
            '$usuario_apellido2',
            '$usuario_email',
            0,
            '$usuario_password',0)";

   if(sqlsrv_query($conexion,$sql)) {
    
       $sql ="SELECT * FROM usuario WHERE Email ='$usuario_email'";
       
       $resultado =sqlsrv_query($conexion,$sql);
       
      if($resultado) {
          
           $_SESSION["usuario"] = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
            
           $template_seccion="../templates/auth/registro.php";
          //si el registro es correcto, inicia la sesión
       }
   } else {
       $template_seccion="../templates/auth/error_registro.php";
   }
    
    include("../templates/main.php");
    require"../endApp.php";
