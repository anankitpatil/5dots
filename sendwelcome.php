<?php
if(isset($_REQUEST))
{
	$email = $_POST['subscriptionMail'];
	$subject = 'Welcome to Five Dots. A life, fully charged.';
	/*$message = 'Name: ' . $name . "\r\n" .
		'Phone: ' . $phone . "\r\n" .
		'E - mail: ' . $email . "\r\n" .
		'Message: ' . $message . "\r\n" .
		"\r\n" .
		'fivedots.life';*/
	$message = '<html>
	<body>
	<table style="width:100%;height:100%;font-family:Helvetica,Arial,sans-serif">
  <tr>
    <td align="center" valign="top" style="text-align:center">
      <center>
        <table style="width:580px;margin:0 auto;table-layout:fixed">
          <tr>
            <td colspan="6">
              <a href="http://www.fivedots.life"><img width="580" height="251" src="http://fivedots.life/img/mailer-hero.jpg" /></a>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <p style="text-align:center;padding-top:30px;font-weight:400;font-size:15px">Firstly, thank you for signing up taking the first step towards a life fully charged.</p>
              <p style="text-align:center;padding-top:30px;font-weight:400;font-size:15px">We can&#39;t begin to tell you how thrilled we are to see users such as yourself interested in our sustainable fitness programs which we are soon to launch. Here&#39;s what signing up with us early on has helped you with:</p>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" style="padding-top:45px;width:33.33%">
              <img width="40" height="36" src="http://fivedots.life/img/icon-love.png" />
            </td>
            <td colspan="2" align="center" style="padding-top:45px">
              <img width="39" height="40" src="http://fivedots.life/img/icon-discount.png" />
            </td>
            <td colspan="2" align="center" style="padding-top:45px">
              <img width="40" height="40" src="http://fivedots.life/img/icon-gift.png" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" style="padding-top:15px">
              <p style="font-weight:400;font-size:15px">Because we love you, you get to be the very first to know that the app is out.</p>
            </td>
            <td colspan="2" align="center" style="padding-top:15px">
              <p style="font-weight:400;font-size:15px">Get 30% of any of your first training program you sign up for.</p>
            </td>
            <td colspan="2" align="center" style="padding-top:15px">
              <p style="font-weight:400;font-size:15px">Get a free gift hamper as we get closer to the launch.<br />&nbsp;</p>
            </td>
          </tr>
          <tr>
            <td colspan="6" align="center" style="padding-top:45px">
              <p style="font-weight:400;font-size:15px">Stay Healthy.<br />&nbsp;<br />Sincerely,<br /><b>Rashmi Chaudhary<br />CEO & Founder, Five Dots</b></p>
            </td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top:45px">
              <p style="display:inline-block;margin:0;font-weight:400;font-size:15px">Coming soon on: </p>
              <a href="#"><img width="30" height="35" style="display:inline-block;margin:0 0 -9px 15px" src="http://fivedots.life/img/logo-android.png" /></a>
              <a href="#"><img width="29" height="35" style="display:inline-block;margin:0 0 -9px 15px" src="http://fivedots.life/img/logo-apple.png" /></a>
            </td>
            <td colspan="3" align="right" style="padding-top:45px">
              <p style="display:inline-block;margin:0;font-weight:400;font-size:15px">Come join the club: </p>
              <a href="https://www.facebook.com/Five-Dots-Digital-793947770728566"><img width="35" height="35" style="display:inline-block;margin:0 0 -9px 9px" src="http://fivedots.life/img/logo-fb.png" /></a>
              <a href="https://twitter.com/5d_life"><img width="35" height="35" style="display:inline-block;margin:0 0 -9px 9px" src="http://fivedots.life/img/logo-twitter.png" /></a>
              <a href="http://instagram.com/fivedotslife"><img width="35" height="35" style="display:inline-block;margin:0 0 -9px 9px" src="http://fivedots.life/img/logo-insta.png" /></a>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>';

	$headers = 'From: FiveDots <support@fivedots.life>' . "\r\n" .
		'Reply-To: FiveDots Support <' . $email . ">\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	// PHP MAILER

	//require 'mail/PHPMailerAutoload.php';

	//$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	/*$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'sg2plcpnl0046.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'support@fivedots.life';                 // SMTP username
	$mail->Password = 'Fitworld145';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom('support@fivedots.life', 'FiveDots');
	$mail->addAddress($email);               // Name is optional
	$mail->addReplyTo('support@fivedots.life', 'FiveDots Support');*/

	//$mail->isHTML(true);                                  // Set email format to HTML

	//$mail->Subject = $subject;
	//$mail->Body    = $message;
	// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	/*if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	};*/

	//echo 'check here ';

	if(mail($email, $subject, $message, $headers)){
		echo 'We have received your contact details. We will get in touch soon!';
	} else{
		echo 'Something went wrong. Please refresh the page and try again.';
	};
}
?>
