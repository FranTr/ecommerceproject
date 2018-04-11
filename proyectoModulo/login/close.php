<?php

 require '../startApp.php';
    session_start();

if(isset($_SESSION["usuario"])) {
    
    SESSION_DESTROY();
     header('Location: ../index.php');
    
} else {
    
    header('Location: ../login/index.php');
}
require'../endApp.php';
?> 
