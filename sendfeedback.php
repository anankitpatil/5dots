<?php
if(isset($_REQUEST))
{
	$name = $_POST['feedbackName'];
	$phone = $_POST['feedbackPhone'];
	$email = $_POST['feedbackMail'];
	$message = $_POST['feedbackMessage'];

	$to = 'support@fivedotsdigital.com';
	$subject = 'fivedots.life | Feedback from ' . $name;
	$message = 'Name: ' . $name . "\r\n" .
		'Phone: ' . $phone . "\r\n" .
		'E - mail: ' . $email . "\r\n" .
		'Message: ' . $message . "\r\n" .
		"\r\n" .
		'FiveDots';
	$headers = 'From: FiveDots Feedback Form <support@fivedots.life>' . "\r\n" .
		'Reply-To: ' . $name . ' <' . $email . ">\r\n" .
		'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)){
		echo 'We have mailed your feedback across. We will get in touch soon!';
	} else{
		echo 'Something went wrong. Please refresh the page and try again.';
	};
}
?>
