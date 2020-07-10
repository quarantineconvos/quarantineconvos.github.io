function sendEmail() {
    var x = document.forms["emailForm"]["name"].value;
    var y = document.forms["emailForm"]["mail"].value;
	Email.send({
	Host: "smtp.gmail.com",
	Username : "conversationsq@gmail.com",
	Password : "threelevelyacht",
	To : y,
	From : "<conversationsq@gmail.com",
	Subject : "Welcome to the convo! " + x ,
	Body : "Thank you for joining the Quarantine Conversations mailing list " + x + "we hope to live up to your expectations",
	}).then(
		message => alert("mail sent successfully")
	);
}