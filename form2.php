<?php
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$fromname='contact form';
$row='angel.e.diaz.b@gmail.com';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact003399@gmail.com';                 // SMTP username
$mail->Password = 'wao.com.pk';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->FromName=$fromname;
$mail->addBCC($row,$fromname);
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'someone contacted you';
$mail->Body    = '<b><font color=green>HI Admin you,ve received message from '.$_POST['name1'].'</font></b><br>Nombre completo: '.$_POST['name1'].'<br>Email: '.$_POST['email1'].'<br>Nombre del bebé: '.$_POST['namebebe'].'<br>Fecha de nacimiento: '.$_POST['date'].'<br>Hora de nacimiento: '.$_POST['time'].'<br>País de nacimiento: '.$_POST['country'].'<br>Estado de nacimiento: '.$_POST['state'].'<br>Ciudad de nacimiento: '.$_POST['city'].'<br>Color de la carta: '.$_POST['color'].'<br> ';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<div class="alert" id="mensajeExito">Mensaje enviado con éxito. Recibirás tu certificado lo antes posible!</div>';
    echo'<script>$("#form")[0].reset()</script>';
}

?>