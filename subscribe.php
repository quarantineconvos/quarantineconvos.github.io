<!DOCTYPE html> 
<html>
<head>
	<title >Subscribe</title>
	
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="subscribe.css">
	<link rel = "icon" href =  "mainlogo1.png" type = "image/x-icon"> 
</head>
<body>
<div class="header"> 
	
<p><a href="https://www.instagram.com/qconversations/?hl=en" target="_blank"><img src="instagram_logo.png" alt="instagram" style="width:35px;height:35px;margin-left: 95%;"></a></p>
	
	<img src="logotransparent.png" alt="Quarantine Conversations" class="center">
	<br><br><br>
	<p style="text-align:center;word-spacing: 200px;"> <a class="white" href="index.html" > HOME</a> <a class="white" href="about.html" > ABOUT</a> <a class="white" href="subscribe.html">SUBSCRIBE</a> <a class="white" href="submit.html" >SUBMIT</a></p>
	
	
</div>


<div class="walls"><h1>Subscribe to Our Newsletter!</h1>
	
	<form action="subscribe.php" method="post">
		<input type="text" placeholder="Name" name="name" required><br>
    		<input type="text" placeholder="Email address" name="mail" required><br>
		<input type="submit" value ="Subscribe">
		
		</div>
		<?php use PHPMailer\PHPMailer\PHPMailer;

		//require 'PHPMailerAutoload.php'; backup if path/to doesnt work
			require 'path/to/vendor/autoload.php';
			$allowedMethods = array('POST');
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

		</form>
	</body>
</html>
