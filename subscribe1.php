<?php

use PHPMailer\PHPMailer\PHPMailer;

//require 'PHPMailerAutoload.php'; backup if path/to doesnt work
require 'path/to/vendor/autoload.php';
$allowedMethods = array(
    'POST'
);
$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
if(!in_array($requestMethod, $allowedMethods)){
    header($_SERVER["SERVER_PROTOCOL"]." 405 Method Not Allowed", true, 405);
    exit;
}
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; //google smtp information
$mail->SMTPAuth = true;//google smtp information
$mail->Username = 'conversationsq@gmail.com';
$mail->Password = 'threelevelyacht';
$mail->SMTPSecure = "tls";   //google smtp information
$mail->Port = 587;   //google smtp information
$name = $_POST['name'];
$from = "conversationsq@gmail.com";

$to = $_POST['mail'];
//var_dump($_POST['mail']);
$mail->setFrom($mail, 'The Quarantine Conversations Staff'); //Who it is from
$mail->addAddress($to, $name); //who you send it to

$mail->Subject = "Thank you!"; //Subject of email

$mail->Body ="Thank you for subscribing to the Quarantine Conversations newsletter. We hope we exceed the expectations you have for" //Body of email
?>
