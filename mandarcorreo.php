<?php
require 'phpmailer/PHPMailerAutoload.php';

include 'configurarCorreo.php';

date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $emailEnvio;
$mail->Password = $pass;
$mail->setFrom($email, $name);
$mail->addAddress($emailRecibido, $nombreEmpresa);
$mail->Subject = $asunto;
$mail->isHTML(true);
$mail->Body = $msg;
$mail->CharSet = 'UTF-8';
$mail->send();
?>
