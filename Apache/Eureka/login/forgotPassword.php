<title>Forgot Password</title>
<?php
// $to = "ayushrathi18@gmail.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com" . "\r\n" .
// "CC: somebodyelse@example.com";

// mail($to,$subject,$txt,$headers);
include "header.php";
?>

<body>
<div class="container">
	<form action = "" method="POST">
	<div class="input-group">
	<input type="text" name="femail" class="form-control" placeholder="Enter the registered Email" required>
	<span class="input-group-btn">
	<input type="submit" name="fbutton" class="btn btn-success" value="Forgot Password"></span>
	</div>
	</form>
</div>
</body>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
include "database.php";
if(isset($_POST['fbutton'])){
	$sql="select * from v_user where email='".$_POST['femail']."'";
	$result=$db->query($sql);
	if(!$result->num_rows){
		echo "<script>alert('Please register your email first');</script>";
	}
	else{
		$row=$result->fetch_object();
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'vision.nitbhopal@gmail.com';          // SMTP username
$mail->Password = 'palindrome1771'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('vision.nitbhopal@gmail.com', 'Online Exam Quiz');
$mail->addReplyTo('vision.nitbhopal@gmail.com', 'Online Exam Quiz');
$mail->addAddress($_POST['femail']);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Vision NIT Bhopal</h1>';
$bodyContent .= '<p>
Login Credentials are given Below: 
</p>
<br>
------------------------
<h4>
Username: '.$row->name.'
</h4>
<h4>
Password: '.$row->pass.'
</h4>
------------------------
<br>';

$mail->Subject = 'Forgot Password Request';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}
	
?>


 <?php
// $mail                = new PHPMailer();
// $mail->IsSMTP(); // telling the class to use SMTP

// $mail->Host       = "stmp.gmail.com"; // SMTP server

// $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

// $mail->SMTPAuth   = true;                  // enable SMTP authentication

// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier

// $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server

// $mail->Port       = 465;                   // set the SMTP port for the GMAIL server

// $mail->Username   = "ayushrathi18@gmail.com";  // GMAIL username

// $mail->Password   = "ayush123";            // GMAIL password

// $mail->SetFrom("ayushrathi18@gmail.com", 'Ayush Rathi');

// $mail->AddReplyTo("ayushrathi18@gmail.com", 'Ayush Rathi');

// $mail->Subject    = "Hey there";

// $mail->AltBody    = “Hey, check out this new post on www.vishalkumar.in”; // optional, comment out and test

// $mail->MsgHTML($body);

// $address = "www.anilrath@gmail.com";

// $mail->AddAddress($address, "Ayush");
// ?>

<?php
	echo '<script>alert("Credentials Mailed to your email.");</script>';
	echo '<script>setTimeout("location.href=\"index.php\",0");</script>';
}
}
?>