<?php 

require '../startApp.php';
session_start();

    if(isset($_SESSION["usuario"])) {
   
        $template_seccion = "../templates/auth/mi-cuenta.php";
        $titulo = "Mi cuenta";
    
    } else {

        $error = "Debes iniciar sesion";
        $template_seccion = "../templates/login.php";
        $titulo = "Login";
    
}

include ("../templates/main.php");
require "../endApp.php";