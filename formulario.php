<?php
$name="";
$email="";
$message=""; 
$error="";

if(empty($_POST["name"])){
    $error = 'Ingresa un nombre </br>';
}else{
    $name = $_POST["name"];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
}
if(empty($_POST["email"])){
    $error .= 'Ingresa un email </br>';
}else{
    $email= $_POST["email"];
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error .= 'Ingresa un email verdadero </br>';   
    }else{
       $email = filter_var($email,FILTER_SANITIZE_EMAIL);
   } 
}
if(empty($_POST["message"])){
    $error .= 'Ingresa un mensaje valido </br>';
}else{
    $message = $_POST["message"];
    $message = filter_var($message, FILTER_SANITIZE_STRING);
}

$body= "Nombre: ".$name."<br>";
$body.="E-mail: ".$email."<br>";
$body.="Mensaje: ".$message."<br>";

$enviarA = "infoastrobebe@gmail.com";
$asunto = "Nuevo mensaje de Astrobebé";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);
if($error==''){
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        // $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contact003399@gmail.com';                     // SMTP username
        $mail->Password   = 'wao.com.pk';                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($enviarA);
    
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = $body;
    
        $mail->send();
        echo 'exito';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    echo $error;
}

?>