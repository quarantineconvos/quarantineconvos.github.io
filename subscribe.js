function sendEmail() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["mail"].value;
	Email.send({
	Host: "smtp.gmail.com",
	Username : "conversationsq@gmail.com",
	Password : "threelevelyacht",
	To : y,
	From : "<conversationsq@gmail.com",
	Subject : "<email subject>",
	Body : "<email body>",
	}).then(
		message => alert("mail sent successfully")
	);
}