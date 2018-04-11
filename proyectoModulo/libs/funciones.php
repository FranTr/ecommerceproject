<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function getProducto($id_producto,$conexion){
   $sql = "select * from productos where id=$id_producto";
   $resultado = mysqli_query($conexion,$sql);
   $producto = mysqli_fetch_assoc($resultado);
   return $producto;
} 


function enviarEmail ($asunto,$body) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = gethostbyname('smtp.gmail.com');
        //$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'pruebasphp1234@gmail.com';                 // SMTP username
        $mail->Password = 'codespace2017';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;    

       $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

        //Recipients
        $mail->setFrom('pruebasphp1234@gmail.comm', 'Mailer');
        $mail->addAddress('pruebasphp1234@gmail.com', 'Juan');     // Add a recipient


        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}


