<?php
if(isset($_REQUEST))
{
	$connection = mysql_connect("localhost", "fivedots", "zQ3fxybe");
	mysql_select_db("fivedots", $connection);
	error_reporting(E_ALL && ~E_NOTICE);
	
	$name = $_POST['feedbackName'];
	$phone = $_POST['feedbackPhone'];
	$email = $_POST['feedbackMail'];
	$message = $_POST['feedbackMessage'];
	
	$sql = "INSERT INTO `feedback` (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
	$result = mysql_query($sql);
	if($result) {
		echo "Your feedback has<br />been noted!";
	} else {
		if (mysql_errno() == 1062) {
			echo "Feedback with the<br />same phone number exists!";
		} else {
			echo "Something went wrong,<br />refresh the page<br />and try again!";//$sql . mysql_error();
		}
	}
}
?>