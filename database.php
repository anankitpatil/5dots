<?php
if(isset($_REQUEST))
{
	$connection = mysql_connect("localhost", "fivedots", "zQ3fxybe");
	mysql_select_db("fivedots", $connection);
	error_reporting(E_ALL && ~E_NOTICE);
	
	$email = $_POST['subscriptionMail'];
	
	$sql = "INSERT INTO `early-access` (email) VALUES ('$email')";
	$result = mysql_query($sql);
	if($result) {
		echo "Your mail has been added to the list!";
	} else {
		if (mysql_errno() == 1062) {
			echo "Your mail was already in the list!";
		} else {
			echo "Something went wrong, refresh the page and try again!";//$sql . mysql_error();
		}
	}
}
?>