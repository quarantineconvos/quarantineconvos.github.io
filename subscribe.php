<?php

use PHPMailer\PHPMailer\PHPMailer;

//require 'PHPMailerAutoload.php';
require 'path/to/vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'conversationsq@gmail.com';
$mail->Password = 'threelevelyacht';
$mail->SMTPSecure = "tls";   
$mail->Port = 587;   
$name = $_POST['name'];
$from = "conversationsq@gmail.com";

$to = $_POST['mail'];
//var_dump($_POST['mail']);
$mail->setFrom($mail, 'The Quarantine Conversations Staff');
$mail->addAddress($to, $name);
$mail->Subject = "Thank you!";
$mail->Body ="Thank you for subscribing to the Quarantine Conversations newsletter. We hope we exceed the expectations you have for"
?>
