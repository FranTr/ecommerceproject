<?php 
    session_start();
    require'../startApp.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
//recoger las variables que me vienen por post
$datos=[];
$datos["nombre"] = $_POST['nombre'];
$datos["email"] = $_POST['email'];
$datos["telefono"]=$_POST['telefono'];
$datos["mensaje"] = $_POST['mensaje'];
$asunto_mail = 'Nuevo contacto desde la web';
$cuerpo ='Nombre: '. $datos["nombre"] . ' Mail: ' . $datos["email"] . ' Telefono: ' . $datos["telefono"] . ' Mensaje: ' . $datos["mensaje"];
if($datos["nombre"] =='' || 
   $datos["email"] =='' || 
   $datos["telefono"]=='' || 
   $datos["mensaje"]== '' ||
   $cuerpo=='') {
    die();
}
if(!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    die();
}


enviarEmail($asunto_mail,$cuerpo);


    $contacto_nombre = $_POST["nombre"];
    $contacto_email = $_POST["email"];
    $contacto_telefono = $_POST["telefono"];
    $contacto_mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO contacto(nombre,email,tlf,mensaje)"
        . "VALUES('$contacto_nombre',
                  '$contacto_email',
                  '$contacto_telefono',
                  '$contacto_mensaje')";
   
    
    if(sqlsrv_query($conexion,$sql)) {
     
        $sql ="SELECT * FROM contacto WHERE mensaje ='$contacto_mensaje'";
        $resultado =sqlsrv_query($conexion,$sql);
         if($resultado) {
        header('Location: ../index.php');
        $contactos = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
        $template_seccion= "../templates/home.php";
        
        } 
    } else {
        
    }
    
    include("../templates/main.php");
    require"../endApp.php";
?>