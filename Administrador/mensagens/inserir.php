<?php

include_once 'class.smtp.php';
include_once 'class.phpmailer.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'aulaifsul@gmail.com';                 // SMTP username
$mail->Password = '123456aula';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('antonydasilvam@gmail.com', 'Site Web');
$mail->addAddress('toxicgoma@gmail.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email;
$mail->Body    = 'Nome:'.$nome. '<br><br> Mensagem:'.$mensagem;
$mail->AltBody = 'Mensagem: '.$mensagem.'';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada com sucesso';
}


?>