<?php
$name = $_POST['name'];
$from = "conversationsq@gmail.com";
$to = $_POST['mail'];
//var_dump($_POST['mail']);
$subject = "Thank you!";
$message= "Thank you for joining our mailing list {$name}! We hope to live up to your expectations";
$headers = "From:" . $from;
mail ($to,$subject,$message,$headers);

?>
