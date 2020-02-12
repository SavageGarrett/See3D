<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require'../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

function sendRequestMail($name) {
//Create a new PHPMailer instance
$mail = new PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "mail.see3d.org"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "see3d@see3d.org"; // SMTP account username example
$mail->Password   = "*vQxH%/%2T,v?8aR";        // SMTP account password example

//Set who the message is to be sent from
$mail->setFrom('see3d@see3d.org', 'See3D Mail');
//Set an alternative reply-to address
//$mail->addReplyTo('info@see3d.org', 'See3D Info');
//Set who the message is to be sent to
$mail->addAddress('garrettcarder@gmail.com', 'Garrett');
$mail->addAddress('info@see3d.org', See3D);
$mail->addAddress('karbowski.4@osu.edu', Caroline);
$mail->addAddress('emilydkiehl@gmail.com', Emly);
//Set the subject line
$mail->Subject = 'New Model Request';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->Body = "A new model has been requested by " . $name;
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
//echo 'working ...';
if (strcmp($mail,"") != 0) {
	if (!$mail->send()) {
    		echo 'Mailer Error: '. $mail->ErrorInfo;
	} else {
    		//echo 'Message sent!';
	}
}
}
?>
