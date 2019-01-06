<?php
	if (isset($_POST["submit"])) {
		$vorname = $_POST['surname'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$from = 'Pina Kongress'; 
		$to = 'giesinger@silberball.com'; 
		$subject = 'Anmeldung Kongress 2019';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['inputName']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['inputEmail'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['inputCity']) {
			$errMessage = 'Please enter your message';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>