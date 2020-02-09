<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('../vendor/phpmailer/phpmailer/src/SMTP.php');
require('../includes/psl-config.php');

//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Settings
$mail->IsSMTP();                        // Set SMTP Status
$mail->CharSet = 'UTF-8';               // Character Set
$mail->Host       = SMTP_HOST;          // SMTP server
$mail->SMTPDebug  = 0;                  // enables SMTP debug information (for testing)
$mail->SMTPSecure = SMTP_SECURE;        // SMTP Encryption
$mail->SMTPAuth   = true;               // enable SMTP authentication
$mail->Port       = SMTP_PORT;          // SMTP port
$mail->Username   = MAIL_USR;           // SMTP account username
$mail->Password   = MAIL_PWD;           // SMTP account password

//Set who the message is to be sent from
$mail->setFrom('see3d@see3d.org', 'See3D Mail');

//Set an alternative reply-to address
//$mail->addReplyTo('info@see3d.org', 'See3D Info');

//Set who the message is to be sent to
$mail->addAddress('garrettcarder@gmail.com', 'Garrett');

//Set the subject line
$mail->Subject = 'PHPMailer mail() test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

// Set mail body
$mail->Body = "This is the body of the message";

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors

if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
