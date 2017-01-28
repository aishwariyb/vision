<?php
//echo 'Reached Here';
require 'PHPMailer/PHPMailerAutoload.php';
//echo 'Exec1';
$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0086.prod.sin2.secureserver.net';
$mail->Port = 587;
$mail->SMTPAuth = false;
$mail->Username = 'vision.nitbhopal@gmail.com';          // SMTP username
$mail->Password = 'palindrome1771'; // SMTP password
$mail->SMTPSecure = false;                  // Enable TLS encryption, `ssl` also accepted
$mail->setFrom('vision.nitbhopal@gmail.com', 'Vision NIT Bhopal');
$mail->addReplyTo('vision.nitbhopal@gmail.com', 'Vision NIT Bhopal');
$mail->addAddress($_POST['newsletter_input']);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Vision NIT Bhopal</h1>';
$bodyContent .= '<p>
Congratulations!! You have been successfully subscribed for our newsletter.
</p>';
$mail->Subject = 'Vision Newsletter';
$mail->Body    = $bodyContent;
//echo 'This is the stuff I am talking about';
if(!$mail->send()) {
echo "<script >";
echo 'alert("Mail Not Valid. Check your e-mail address and Try again")';
echo '</script>';

}
else
{
echo "<script>";
echo 'window.alert("Email Registered.")';
echo '</script>';
}
?>
